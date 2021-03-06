<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta content='maximum-scale=1.0, user-scalable=0' name='viewport' />
        <title>Miguel & Gloria</title>

        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png"/>
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png"/>
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png"/>
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png"/>
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png"/>
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png"/>
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png"/>
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png"/>
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png"/>
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png"/>
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png"/>
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png"/>
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png"/>
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link rel="manifest" href="favicon/manifest.json"/>
        <meta name="msapplication-TileColor" content="#ffffff"/>
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png"/>
        <meta name="theme-color" content="#ffffff"/>

        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'/>
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <script src="script/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="script/jquery-ui-1.10.2.custom.min.js" type="text/javascript"></script>
        <script src="script/detect-browser-device.js" type="text/javascript"></script>

    </head>

    <body>
        <div id="content" class="content-noscroll">
            <div id="countdown"></div>
            <div id="camarafotos" onclick="showInfoCamara()"></div>
            <div id="preloader">
                <div id="preloader-banner-container">
                    <div id="preloader-banner">
                        <div id="preloader-banner-left"></div>
                        <div id="preloader-banner-middle">
                            <div id="preloader-banner-text-a">CARGANDO</div>
                            <div id="preloader-dots" class="preloader-dots-animation"></div>
                        </div>
                        <div id="preloader-banner-right"></div>

                    </div>
                </div>
            </div>

            <script src="script/preloader.js" type="text/javascript"></script>

            <div id="selectinvitado" style="display:none">
                <div class="chain-block-and-string-container2">
                    <div class="chain-block-string"></div>
                    <div class="chain-block"></div>
                </div>
                <div class="experience-text-container2" >
                    <div class="experience-text-a">¡NOS CASAMOS!</div>
                    <div class="experience-text-a">Y QUEREMOS QUE NOS ACOMPAÑES EN ESTE DÍA</div>
                    <div class="experience-text-c"><input type="text" id="tags" class="textbox" placeholder="Escribe tu nombre" /><input class="myButton" type="button" onclick="seleccionadoInvitado()" value="ENTRAR"/></div>
                </div>
            </div>
            
            <div id="infocamara" style="display:none" onclick="hideInfoCamara()">
                <div class="chain-block-and-string-container2">
                    <div class="chain-block-string"></div>
                    <div class="chain-block"></div>
                </div>
                <div class="experience-text-container2" >
                    <div class="experience-text-b   ">COMPARTE CON NOSOTROS LAS FOTOS</div>
                    <div class="experience-text-a">INSTALA LA APLICACIÓN</div>
                    <div class="experience-text-c">
                        Descárgate la aplicación de WedShoots en www.wedshoots.com o en la tienda de tu teléfono 
                        <a href="https://app.appsflyer.com/id660256196?pid=WP-iOS-ES&c=WP-ES-LANDINGS&s=es" target="_blank">Android</a> o <a href="https://app.appsflyer.com/net.bodas.android.wedshoots?pid=WP-Android-ES&c=WP-ES-LANDINGS" target="_blank">iPhone</a>.
                    </div>
                    <div class="experience-text-a">ACCEDE CON EL CÓDIGO</div>
                    <div class="experience-text-c">
                        Abre Wedshoots en tu móvil, pon tu nombre e introduce el código del albúm, o escanea el código QR que hay aquí en la tarjeta.
                        <br/>Código del albúm: ESaf247f65
                    </div>
                </div>
            </div>

            <div id="page"></div>
            <div id="container">
                <script src="script/container-transparent-or-displaynone.js" type="text/javascript"></script>
                <div id="layer-horizontal-4">

                </div>
                <div id="layer-vertical-1" class="layer-vertical">
                    <div id="cloud-5" class="cloud"></div>
                    <div id="cloud-6" class="cloud"></div>
                    <div id="cloud-7" class="cloud"></div>
                    <div id="cloud-8" class="cloud"></div>
                    <div id="cloud-9" class="cloud"></div>
                </div>

                <div id="layer-horizontal-1" class="layer-horizontal">
                    <div id="cloud-1" class="cloud"></div>
                    <div id="cloud-2" class="cloud"></div>
                    <div id="cloud-3" class="cloud"></div>
                    <div id="cloud-4" class="cloud"></div>
                </div>

                <div id="layer-horizontal-3" class="layer-horizontal">

                    <div id="elevation-1" class="elevation">
                        <div class="ground"></div>
                        <div class="grass"></div>
                    </div>
                    <div id="ground-and-grass-container-1">
                        <div class="ground"></div>
                        <div class="grass"></div>
                    </div>
                    <div id="pamplona-container">
                        <!--<div id="bus-horarios"></div>-->
                        <div class="chain-block-and-string-container">
                            <div class="chain-block-string"></div>
                            <div class="chain-block"></div>
                        </div>
                        <div id="experience-text-container-1" class="experience-text-container" >
                            <div class="experience-text-a">LOS AUTOBUSES</div>
                            <div class="experience-text-c">10:30 Pamplona<br/>11:45 Tudela</div>
                            <div class="experience-text-c">Para realizar todos los trayectos habrá autobús, tanto de ida como de vuelta. Confirmar con nosotros el lugar y la hora de salida.</div>
                        </div>
                    </div>

                    <div id="castillo-container">
                        <div class="chain-block-and-string-container">
                            <div class="chain-block-string"></div>
                            <div class="chain-block"></div>
                        </div>
                        <div id="experience-text-container-2" class="experience-text-container" >
                            <div class="experience-text-a">10/09/2016 12:30</div>
                            <div class="experience-text-b">¡LA CEREMONIA!</div>
                            <div class="experience-text-c">La ceremonia se celebrará a las 12:30 en el Patio de armas del Castillo de Cortes. <a href="http://www.castillodecortes.com" target="_blank">Más info</a></div>
                        </div>
                    </div>
                    <div id="buspamplona-container">
                        <!--<div id="bus-horarios2"></div>-->
                        <div id="tree-11" class="tree-bright-b"></div>
                        <div id="tree-12" class="tree-dark-b"></div>
                        <div id="tree-13" class="tree-bright-b"></div>
                        <div id="tree-14" class="tree-dark-b"></div>
                        <div id="tree-15" class="tree-bright-b"></div>
                        <div id="tree-16" class="tree-dark-b"></div>
                        <div id="tree-17" class="tree-bright-b"></div>
                        <div id="tree-18" class="tree-dark-b"></div>
                        <div id="tree-19" class="tree-bright-b"></div>

                        <div id="bus-parada">
                            <div id="ruedaadelante"></div>
                            <div id="ruedaatras"></div>
                        </div>
                    </div>
                    <div id="elevation-2" class="elevation">
                        <div class="ground"></div>
                        <div class="grass"></div>
                    </div>

                    <div id="buscortes-container">
                        <div class="chain-block-and-string-container">
                            <div class="chain-block-string"></div>
                            <div class="chain-block"></div>
                        </div>
                        <div id="experience-text-container-3" class="experience-text-container" >
                            <div class="experience-text-b">¡AL BANQUETE!</div>
                            <div class="experience-text-c">Tras la ceremonia, nos desplazaremos al Pago de Cirsus en autobús.</div>
                            <!--<div class="experience-text-c">Para realizar todos los trayectos habrá autobús, pedimos confirmación para organizar los buses.</div>-->
                        </div>
                        <div id="bus-parada2">
                            <div id="ruedaadelante2"></div>
                            <div id="ruedaatras2"></div>
                        </div>
                    </div>


                    <div id="busablitas-container">
                        <div id="bus-parada3">
                            <div id="ruedaadelante3"></div>
                            <div id="ruedaatras3"></div>
                        </div>
                    </div>

                    <div id="pagocirsus-container">
                        <div class="chain-block-and-string-container">
                            <div class="chain-block-string"></div>
                            <div class="chain-block"></div>
                        </div>
                        <div id="experience-text-container-4" class="experience-text-container" >
                            <div class="experience-text-b">BANQUETE Y FIESTA</div>
                            <div class="experience-text-c">El banquete y la posterior fiesta se celebrará en el Pago de Cirsus de Ablitas <a href="http://www.pagodecirsus.com/es/restaurante" target="_blank">Más info</a>
                            <div class="experience-text-c">Hora de fin y salida de los autobuses a Pamplona - Cortes y Tudela, pendiente de confirmar, aprox. las 23:00-0:00</div>
                            </div>

                        </div>
                        <div id="pagocirsus">

                        </div>
                    </div>
                    <div id="noche-container">
                        <div id="luna" class="luna"></div>
                        <div id="star-1" class="star"></div>
                        <div id="star-2" class="star"></div>
                        <div id="star-3" class="star"></div>
                        <div id="star-4" class="star"></div>
                        <div id="star-5" class="star"></div>
                        <div id="star-6" class="star"></div>
                        <div id="star-7" class="star"></div>
                        <div id="star-8" class="star"></div>
                        <div id="star-9" class="star"></div>
                        <div id="star-10" class="star"></div>
                        <div id="star-11" class="star"></div>
                        <div id="star-12" class="star"></div>
                        <div id="star-13" class="star"></div>
                        <div id="star-14" class="star"></div>
                        <div id="star-15" class="star"></div><!--
                        <div id="star-16" class="star"></div>
                        <div id="star-17" class="star"></div>
                        <div id="star-18" class="star"></div>
                        <div id="star-19" class="star"></div>
                        <div id="star-20" class="star"></div>
                        <div id="star-21" class="star"></div>
                        <div id="star-22" class="star"></div>
                        <div id="star-23" class="star"></div>
                        <div id="star-24" class="star"></div>-->
                        <div id="buspago-container">
                            <div id="bus-parada4">
                                <div id="ruedaadelante4"></div>
                                <div id="ruedaatras4"></div>
                            </div>
                        </div>

                        <!--<div id="avion"></div>-->S
                        <div id="contact-center">

                            <div id="contact-box">

                                <div id="contact-box-message">
                                    <textarea name="email-message" id="email-message">¡Confirmo mi asistencia!</textarea>
                                </div>
                            </div>

                            <div id="contact-button">
                                <input type="button" class="myButton" value="Enviar mensaje" id="send-email" name="send-email">
                            </div>
                        </div>



                        <div class="contact-confirmation-container">
                            <div class="contact-confirmation">
                                <div class="contact-confirmation-rectangle" style="opacity: 0;"></div>
                                <div class="contact-confirmation-triangle" style="opacity: 0;"></div>
                                <div class="contact-confirmation-title-b" style="opacity: 0;">ERROR</div>
                                <div class="contact-confirmation-text-b" style="opacity: 0;">Please enter a valid email address!</div>
                            </div>
                        </div>

                        <div class="contact-confirmation-container">
                            <div class="contact-confirmation">
                                <div class="contact-confirmation-rectangle" style="opacity: 0;"></div>
                                <div class="contact-confirmation-triangle" style="opacity: 0;"></div>
                                <div class="contact-confirmation-title-b" style="opacity: 0;">ERROR</div>
                                <div class="contact-confirmation-text-b" style="opacity: 0;">¡Por favor rellene el campo Mensaje!</div>
                            </div>
                        </div>

                        <div class="contact-confirmation-container">
                            <div class="contact-confirmation">
                                <div class="contact-confirmation-rectangle" style="opacity: 0;"></div>
                                <div class="contact-confirmation-triangle" style="opacity: 0;"></div>
                                <div class="contact-confirmation-text-d" style="opacity: 0;">Enviando...</div>
                            </div>
                        </div>

                        <div class="contact-confirmation-container">
                            <div class="contact-confirmation">
                                <div class="contact-confirmation-rectangle" style="opacity: 0;"></div>
                                <div class="contact-confirmation-triangle" style="opacity: 0;"></div>
                                <div class="contact-confirmation-title-b" style="opacity: 0;">ERROR</div>
                                <div class="contact-confirmation-text-c" style="opacity: 0;">Ohh¡ Algo ha fallado. ¡Prueba de nuevo!</div>
                            </div>
                        </div>

                        <div class="contact-confirmation-container">
                            <div class="contact-confirmation">
                                <div class="contact-confirmation-rectangle" style="opacity: 0;"></div>
                                <div class="contact-confirmation-triangle" style="opacity: 0;"></div>
                                <div class="contact-confirmation-title-a" style="opacity: 0;">GRACIAS</div>
                                <div class="contact-confirmation-text-a" style="opacity: 0;">Tu mensaje ha sido enviado</div>
                            </div>
                        </div>
                    </div>



                    <div id="elevation-3" class="elevation">
                        <div class="ground"></div>
                        <div class="grass"></div>
                    </div>
                    <div id="elevation-4" class="elevation">
                        <div class="ground"></div>
                        <div class="grass"></div>
                    </div>

                    <div id="splash-container">
                        <div id="scroll-or-swipe-text-container-1" class="scroll-or-swipe-text-container">Pulsa la flecha hacía abajo del teclado</div>
                        <div id="scroll-or-swipe-text-container-2" class="scroll-or-swipe-text-container">Muevete hacía la derecha</div>
                        <div id="tree-5" class="tree-bright-d"></div>
                        <div id="tree-6" class="tree-dark-b"></div>

                        <div id="title-miguel"></div>
                        <div id="title-gloria"></div>
                        <div id="title-fecha"></div>

                        <div id="tree-1" class="tree-dark-c"></div>
                        <div id="tree-2" class="tree-bright-e"></div>
                        <div id="tree-3" class="tree-dark-b"></div>
                        <div id="tree-4" class="tree-dark-a"></div>

                    </div>

                </div>


                <div id="robby-container">
                    <div id="robby">
                        <div id="robby-slides"></div>
                    </div>
                </div>

                <div id="bus-enmarcha">
                    <div id="ruedaadelante" class="ruedaanimate"></div>
                    <div id="ruedaatras" class="ruedaanimate"></div>
                </div>

            </div>
        </div>
        <script src="script/main.js<?php echo "?t=".time();?>" type="text/javascript"></script>
        <script src="script/invitados.js<?php echo "?t=".time();?>" type="text/javascript"></script>
        <script src="script/email.js<?php echo "?t=".time();?>" type="text/javascript"></script>
        <script src="script/countdown.js" type="text/javascript"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78759944-1', 'auto');
  ga('send', 'pageview');

</script>
    </body>

</html>
