<?php
include './config.php';
include './lib/Database.php';
?>
<!doctype html>
<!--
++++++++++++++++++++++++++++++++++++++++++++++++++++++
AUTHOR : Designcollection
PROJECT : Diamond Coming-Soon HTML Page
VERSION : 1.0
++++++++++++++++++++++++++++++++++++++++++++++++++++++
-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
    <!--<![endif]-->
    <head>
        <!-- Character set configuration -->
        <meta charset="UTF-8">
        <title>Kia Loyalty Customer Program</title>
        <link href="<?= URL; ?>images/favicon.ico" rel="icon" type="image/x-icon" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Viewport configuration, scaling options -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- CSS Stylesheet -->
        <link href="<?= URL; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?= URL; ?>css/pop-up-form.css" rel="stylesheet" type="text/css">
        <link href="<?= URL; ?>css/coming-soon.css" rel="stylesheet" type="text/css">
        <link href="<?= URL; ?>css/custom.css" rel="stylesheet" type="text/css">
        <link href="<?= URL; ?>css/bottom-share.css" rel="stylesheet" type="text/css">
        <link href="<?= URL; ?>css/animations.css" rel="stylesheet" type="text/css">
        <!-- Font Awesome icon -->
        <link href="<?= URL; ?>css/font-awesome.min.css" rel="stylesheet">
        <!-- Google web font  -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link href="<?= URL; ?>css/html5fileupload.css?v1.0" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- jQuery JavaScript plugins -->
        <script src="<?= URL; ?>js/jquery-1.12.4.min.js" type="text/javascript"></script>
        <script src="<?= URL; ?>js/html5fileupload.min.js?v1.2.1"></script>
    </head>
    <body class="demo-one">
        <!-- Loding GIF Begin -->
        <div class="loader"></div>  
        <!-- Unique ID Begin  -->
        <div id="pop" class="animatedParent">
            <!-- Contact Form Begin -->
            <div id="contactModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content bg-color">
                        <div class="default "></div>
                        <!-- Model header section begin -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3 class="big-title">Subí tu mejor foto con Kia</h3>
                            <div class="border-bottom"></div>
                        </div>
                        <!-- Model body secton begin -->
                        <div class="modal-body" id="modalBody">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="<?= URL; ?>upload.php" role="form" method="POST" enctype="multipart/form-data" id="frmLoyalty">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nombre Completo:</label>
                                                <input type="text" name="nombre" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>E-mail:</label>
                                                <input type="text" name="email" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Teléfono:</label>
                                                <input type="text" name="telefono" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Imagen:</label>
                                                <div class="html5fileupload demo_form" data-url="upload.php"  data-valid-extensions="jpg,png,gif,bmp,jpeg" data-form="true" style="width: 100%;">
                                                    <input type="file" name="file_1" required="required" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success btn-lg btn-block" id="btnEnviar" type="submit">Enviar</button>
                                            </div>
                                        </div>
                                    </form>
                                    <script>
                                        $('.html5fileupload.demo_form').html5fileupload();
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Form End -->
        <!-- Social Share Icon Begin -->
        <div id="ss_bar">
            <div class="social-bg-middle" id="social_icon">
                <ul class="list-inline">
                    <li><a href="https://twitter.com/" target="_blank" class="hvr-bob"><span class="fa-stack fa-lg icon-twitter"><i class="fa fa-twitter fa-stack-1x"></i></span></a></li>
                    <li><a href="https://vimeo.com/" target="_blank" class="hvr-bob"><span class="fa-stack fa-lg"><i class="fa fa-instagram fa-stack-1x"></i></span></a></li>
                </ul>
            </div>
            <div class="social-small-bg-middle">
                <ul class="list-inline">
                    <li class="share-icon"><a href="#" id="share_icon"><i class="fa fa-share-alt fa-2x" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- Social Share Icon End -->
        <div id="home-wrap">
            <!-- Container begin  -->
            <div class="container">
                <!-- Coloumn begin  -->
                <div class="col-md-6 col-md-offset-3">    
                    <div class="content">              
                        <!-- Animation begin  -->
                        <div class="clearfix"></div>
                        <div class="animatedParent">
                            <!--<div class="text-center"><img src="<?php URL; ?>images/kia_pleno.png" alt="Kia Logo" class="img-responsive"></div>-->
                            <h1 class="awesome">KIA CUSTOMER LOYALTY PROGRAM</h1>
                            <p class="animated fadeInUpShort">Viaja a Korea con Kia.</p>
                            <p class="animated fadeInUpShort">Tener Kia es tener oportunidades de viajar.</p>
                            <a  data-toggle="modal" data-target="#contactModal"  class="notify-btn animated fadeInRightShort">Quiero Viajar!</a>
                        </div>
                    </div>	  
                </div>
            </div>
        </div> 
        <!-- Container End -->

        <!-- Bootstrap JavaScript plugins -->
        <script src="<?= URL; ?>js/bootstrap.min.js" type="text/javascript"></script>

        <!-- Social Icon Display/Hide jQuery -->
        <script src="<?= URL; ?>js/big-sidebar-bottom.js" type="text/javascript"></script>

        <!-- Text Animation jQuery JavaScript plugins -->
        <script src="<?= URL; ?>js/css-animate.js" type="text/javascript"></script>

        <!-- Website Load Script -->
        <script type="text/javascript">
                                        $(function () {
                                            $(window).load(function () {
                                                $(".loader").fadeOut("slow");
                                            })
                                            //click btn enviar
                                            $('#btnEnviar').click(function (e) {
                                                e.preventDefault();
                                                var nombre = $('input[name=nombre]');
                                                var email = $('input[name=email]');
                                                var telefono = $('input[name=telefono]');
                                                if (nombre.val().trim().length == 0) {
                                                    nombre.css("border", "2px solid red");
                                                } else {
                                                    nombre.css("border", "1px solid #8c8c8c");
                                                }
                                                if (email.val().trim().length == 0) {
                                                    email.css("border", "2px solid red");
                                                } else {
                                                    email.css("border", "1px solid #8c8c8c");
                                                }
                                                if (telefono.val().trim().length == 0) {
                                                    telefono.css("border", "2px solid red");
                                                } else {
                                                    telefono.css("border", "1px solid #8c8c8c");
                                                }
                                                if (nombre.val().trim().length > 0 && email.val().trim().length > 0 && telefono.val().trim().length > 0) {
                                                    $.ajax({
                                                        type: 'POST',
                                                        url: '<?= URL; ?>upload.php',
                                                        data: new FormData($('#frmLoyalty')[0]),
                                                        cache: false,
                                                        contentType: false,
                                                        processData: false,
                                                        beforeSend: function () {
                                                            // this is where we append a loading image
                                                            $('#modalBody').html("");
                                                            $('#modalBody').html('<div class="col-sm-12"><img src="<?= URL; ?>images/loading2.gif" alt="Cargando..." style="margin: 30px auto; width: 100px;" /></div>');
                                                        },
                                                        success: function (data) {
                                                            // successful request; do something with the data
                                                            $('#modalBody').html(data['content']);

                                                        },
                                                        error: function () {
                                                            // failed request; give feedback to user
                                                            $('#modalBody').html('<p class="class="bg-danger""><strong>Oops!</strong> Lo sentimos, ha ocurrido un error. Por favor vuelva a intertarlo.</p>');
                                                        }
                                                    });
                                                }
                                            });
                                        });
        </script>
    </body>
</html>