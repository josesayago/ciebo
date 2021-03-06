<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <meta name="author" content="Jose SAYAGO" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <script>document.createElement( "picture" );</script>
</head>
<body <?php body_class(); ?>>
    <?php if( is_home() || is_front_page() ) { ?><div class="jumbotron"><?php } ?>
        <div class="container">
            <!-- \Menu -->
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion">
                    <span class="sr-only">Mostrar Menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-CIEBO.png" /></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navegacion">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Nosotros <span class="nohover">&nbsp;&nbsp;&nbsp;/</span></a>
                        <ul class="dropdown-menu">   
                            <li><a href="<?php echo get_page_link( get_page_by_title('ciebo')->ID ); ?>">CIEBO</a></li>
                            <li><a href="<?php echo get_page_link( get_page_by_title('junta directiva')->ID ); ?>">Junta Directiva</a></li>
                            <li><a href="<?php echo get_page_link( get_page_by_title('afiliados')->ID ); ?>">Afiliados</a></li>
                        </ul>
                    </li>
                    <li class="visible-xs"><a href="#">Afiliación</a></li>
                    <li><a href="<?php echo get_page_link( get_page_by_title('certificacion')->ID ); ?>">Certificación <span class="nohover">&nbsp;&nbsp;&nbsp;/</span></a></li>
                    <li><a href="<?php echo get_page_link( get_page_by_title('caras felices')->ID ); ?>">Caras Felices <span class="nohover">&nbsp;&nbsp;&nbsp;/</span></a></li>
                    <li class="visible-xs"><a href="#">Noticias</a></li>
                    <li class="visible-xs"><a href="#">Eventos</a></li>
                    <li class="visible-xs"><a href="<?php echo get_page_link( get_page_by_title('blog inmobiliario')->ID ); ?>">Blog Inmobiliario</a></li>
                    <li class="visible-xs"><a href="#">Leyes y Decretos</a></li>
                    <li class="hidden-xs"><a href="#contacto">Contacto</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <!-- /Menu -->
            <?php if( is_home() || is_front_page() ) { ?>
            <div class="row">
                <div class="col-md-3 jumboquote">
                    <div class="jumbotext">
                        <?php echo get_theme_mod('jumbotron_hpquote'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 jumboaction">
                    <a href="http://ciebo.laelitenetwork.com/afiliacion/"><?php echo get_theme_mod('jumbotron_hpcalltoaction'); ?></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-9 jumbosearch">
                    <div class="col-md-10 col-md-offset-2">
                        <h2 class="hidden-xs">Busca Inmuebles en la Zona</h2>
                        <h2 class="visible-xs">Encuentra un inmueble en la zona</h2>
                        <div class="select-group">
                            <p>
                                <label for="propiedad">Propiedad</label>
                            </p>
                            <p>
                                <select name="propiedad">
                                    <option value="apartamento">Apartamento</option>
                                    <option value="casa">Casa</option>
                                    <option value="galpon">Galpón</option>
                                    <option value="oficina-local">Oficina / Local</option>
                                    <option value="terreno">Terreno</option>
                                    <option value="townhouse">Townhouse</option>
                                </select>
                            </p>
                        </div>
                        <div class="select-group">
                            <p>
                                <label for="operacion">Operación</label>
                            </p>
                            <p>
                                <select name="operacion">
                                    <option value="compra">Compra</option>
                                    <option value="alquiler">Alquiler</option>
                                </select>
                            </p>
                        </div>
                        <div class="select-group">
                            <p>
                                <label for="ciudad">Ciudad</label>
                            </p>
                            <p>
                                <select name="ciudad">
                                    <option value="ciudad-bolivar">Ciudad Bolívar</option>
                                    <option value="ciudad-guayana">Ciudad Guayana</option>
                                </select>
                            </p>
                        </div>
                        <p class="text-right">
                            <button class="buscador">Buscar</button>
                        </p>
                    </div> 
                </div>
            </div>
            <?php } ?>
        </div>
    <?php if( empty( $pagename ) ) { ?></div><?php } ?>