<?php

include './config.php';
include './lib/Database.php';
$db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
if (!empty($_POST)) {
    $error = false;
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    #verificamos que le email no exista
    $existe = $db->select("select * from customer where email = '$email'");
    if (empty($existe)) {
        $absolutedir = dirname(__FILE__);
        $dir = '/upload/';
        $serverdir = $absolutedir . $dir;
        $filename = array();
        foreach ($_FILES as $inputname => $file) {
            $newname = date('Y-m-d') . '-' . date('H-i-s') . $_POST[$inputname . '_name'];
            $archivo = $file['name'];
            $extension = strtolower(end(explode('.', $archivo)));
            $fname = $newname . '.' . $extension;

            $contents = file_get_contents($file['tmp_name']);

            $handle = fopen($serverdir . $fname, 'w');
            fwrite($handle, $contents);
            fclose($handle);

            $filename[] = $fname;
        }

        #insertamos en la BD
        $db->insert('customer', array(
            'nombre' => utf8_decode($nombre),
            'telefono' => $telefono,
            'email' => $email,
            'archivo' => $fname
        ));
        $data = array(
            'type' => 'success',
            'content' => '<p class="bg-success">Gracias ' . utf8_encode($nombre) . '. Tus datos han sido enviados.</p>',
        );
    } else {
        $data = array(
            'type' => 'error',
            'content' => '<p class="bg-error">El correo que esta intentando registrar ya existe.</p>',
        );
    }
    echo json_encode($data);
}
?>