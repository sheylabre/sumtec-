<?php 
$utm_source = $_GET['utm_source'];
$utm_medium = $_GET['utm_medium'];
$utm_campaign = $_GET['utm_campaign'];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>SUMTEC | Yealink </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/font-awesome.min.css">
     <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '283247205429194'); // Insert your pixel ID here.
    // fbq('track', 'PageView');
    fbq('track', 'PageView');

    </script>
</head>

<body class="fondo">
    <header class="desk-header">
        <div class="container">
            <div class="row mg-logo">
                <div class="col-sm-6 col-md-5">
                    <p class="txt-nuevo-sistema">NUEVO SISTEMA
                        <br> DE VIDEO CONFERENCIA
                        <br> <big class="txt-vc120"> VC120X - 12X</big></p>
                </div>
                <div class="col-sm-6 col-md-3 col-md-offset-4">
                    <img class="logo-yealink" src="static/img/logo-yealink.png">
                </div>
            </div>
        </div>
    </header>
   <!--  ESTO ES DE MOVILES -->
    <header class="movile-header">
        <div class="container">
            <div class="row mg-logo">
                <div class="col-sm-6 col-md-3 col-md-offset-4">
                    <img class="logo-yealink" src="static/img/logo-yealink.png">
                </div>
                <div class="col-sm-6 col-md-5">
                    <p class="txt-nuevo-sistema">NUEVO SISTEMA
                        <br> DE VIDEO CONFERENCIA
                        <br> <big class="txt-vc120"> VC120X - 12X</big></p>
                </div>
            </div>
        </div>
    </header>
    <!-- FIN MOVILES -->
    <section>
        <div class="container">
            <div class="row">
                <div class=" col-md-8">
                    <div class="row mg-marco-producto">
                        <div id="product-container" class="col-sm-6 col-md-8">
                            <img id="producto"  class="product start" src="static/img/camara.png">
                            <img id="producto2" class="product start" src="static/img/dvd.png">
                            <img id="producto1" class="product start" src="static/img/calculadora.png">
                        </div>
                        <div class="col-sm-6 col-md-4 marco-desc">
                            <img class="desc25" src="static/img/desc 25.png">
                            <div class="txt-incrementa-reduce">
                                <p class="txt-incrementa-productividad">INCREMENTA TU
                                    <br>PRODUCTIVIDAD,</p>
                                <p class="reduce-costo">REDUCE COSTOS Y
                                    <br> ACELERA LA TOMA DE
                                    <br> DECISIONES</p>
                            </div>
                        </div>
                    </div>
                    <p class="blue-banner">CONÉCTATE SIN CONFIGURACIONES ADICIONALES</p>
                    <div class="row">
                        <div class="col-xs-4 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-same-height">
                            <img class="icono" src="static/img/icono-llave.png">
                            <p class="icon-text">FACILIDAD DE
                                <br>INSTALACIÓN Y
                                <br>DESPLIEGUE</p>
                        </div>
                        <div class="col-xs-4 col-sm-2 col-md-2 col-same-height">
                            <img class="icono" src="static/img/icono-camara.png">
                            <p class="icon-text">ALTA CALIDAD
                                <br>DE AUDIO Y
                                <br>VIDEO (HD180px)</p>
                        </div>
                        <div class="col-xs-4 col-sm-2 col-md-2 col-same-height">
                            <img class="icono" src="static/img/icono-pantalla.png">
                            <p class="icon-text">CONEXIÓN
                                <br>DESDE CUALQUIER
                                <br>DISPOSITIVO</p>
                        </div>
                        <div class="col-xs-6 col-sm-2 col-md-2 col-same-height">
                            <img class="icono" src="static/img/icono-grafico.png">
                            <p class="icon-text">RENTABILIDAD</p>
                        </div>
                        <div class="col-xs-6 col-sm-2 col-md-2 col-same-height">
                            <img class="icono" src="static/img/icono-escudo.png">
                            <p class="icon-text">LIBRE DE
                                <br> LICENCIAMIENTO</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <form id="form" validate="novalidate" method="POST" action="./send-mail.php">
                        <p class="txt-solicitalo">SOLICÍTALO AQUÍ</p>
                        <div class="form-group">
                            <input type="text" class="form-control" id="empresa" name="empresa" placeholder="EMPRESA">
                        </div>
                        <div class="form-group">
                            <input type="text" maxlength="11" class="form-control" id="ruc" name="ruc" placeholder="RUC">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="NOMBRE">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="APELLIDO">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="cargo" name="cargo" placeholder="CARGO">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="telefono" name="num" placeholder="TELÉFONO">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="correo" placeholder="CORREO">
                        </div>
                        <div class="form-group">
                            <div class="checkbox" style="text-align:center ">
                                <label style=" font-size: 12px;">
                                    <input type="checkbox" name="check"> Deseo recibir información de ofertas y promociones
                                </label>
                            </div>
                            <div style="text-align:center">
                                <button id="enviar" type="submit" class="submit btn btn-color">ENVIAR</button>
                               <!--  <p class="terminos" data-toggle="modal" data-target="#terminos">Términos y condiciones</p> -->
                                <input type="hidden" name="source" value="<?= $utm_source ?>">
                                <input type="hidden" name="medium" value="<?= $utm_medium ?>">
                                <input type="hidden" name="campaign" value="<?= $utm_campaign ?>">
                                <input type="hidden" name="landing" value="Equipo Yealink VC120X - 12X ">
                            </div>
                        </div>
                    </form>
                    <div style="display:none" class="gracias">
                        <div class="texto">
                            <div>
                                <span>¡Gracias!</span><br><br>  Tu registro ha sido completado satisfactoriamente.<br><br>
                                Pronto uno de nuestros asesores se pondrá en contacto contigo.
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
    </footer>
    <script src="static/js/jquery-3.1.1.min.js"></script>
    <script src="static/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="static/js/app.js"></script>
    <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-92547149-1', 'auto');
            ga('send', 'pageview');

        </script>
</body>

</html>
