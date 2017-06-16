<?php
$server = $_SERVER['HTTP_HOST'];
if ($server != 'localhost') {
    define('URL', 'https://www.imagenwebhq.com/appsfb/loyalty-program/');
} else {
    define('URL', 'http://localhost/apps/loyalty-program/');
}
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
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
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
                        <div class="modal-body">
                            <!-- Form group begin -->
                            <form class="text-center mar-top" id="ContactForm" method="post" action="<?= URL; ?>enviar-datos.php">
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                                        <div class="form-group">
                                            <input maxlength="25" type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                                        <div class="form-group">
                                            <input maxlength="20" type="text" name="apellido" class="form-control" placeholder="Apellido" required>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                                        <div class="form-group">
                                            <input maxlength="80" type="text" name="ci" class="form-control" placeholder="C.I." required>
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                                        <div class="form-group">
                                            <input maxlength="80" type="text" name="email" class="form-control" placeholder="Email" required>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                                        <div class="form-group">
                                            <input type="file" name="imagen" accept="image/*" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                                    <input type="submit" value="Enviar" id="btnSubmit"  class="btn btn-block hvr-shutter-out-horizontal">
                                </div>
                            </form>
                            <div class="space-bottom"></div>
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
        <!-- jQuery JavaScript plugins -->
        <script src="<?= URL; ?>js/jquery-1.12.4.min.js" type="text/javascript"></script>
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
                $("#btnSubmit").click(function () {
                    var nombre = $("input[name=nombre]");
                    var apellido = $("input[name=apellido]");
                    var ci = $("input[name=ci]");
                    var email = $("input[name=email]");
                    var imagen = $("input[name=imagen]");
                    $("#ContactForm").submit();
                });
            });
        </script>
    </body>
</html>