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
    <div class="jumbotron">
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
                  <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navegacion">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Nosotros &nbsp;&nbsp;&nbsp;<span class="nohover">/</span></a></li>
                    <li><a href="#">Certificación &nbsp;&nbsp;&nbsp;<span class="nohover">/</span></a></li>
                    <li><a href="#">Caras Felices &nbsp;&nbsp;&nbsp;<span class="nohover">/</span></a></li>
                    <li><a href="#">Contacto</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <!-- /Menu -->
            <div class="row">
                <div class="col-md-4 jumboquote">
                    <?php echo get_theme_mod('jumbotron_hpquote'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 jumboaction">
                    <a href="<?php echo get_theme_mod('jumbotron_hpcalltoaction_link'); ?>"><?php echo get_theme_mod('jumbotron_hpcalltoaction'); ?></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-10 jumbosearch">
                    <h2>Busca Inmuebles en la Zona</h2>
                    <p>
                        <label for="propiedad">Propiedad</label>
                    </p>
                    <p>
                        <select name="propiedad">
                            <option value=""></option>
                        </select>
                    </p>
                    <p>
                        <label for="operacion">Operación</label>
                    </p>
                    <p>
                        <select name="operacion">
                            <option value=""></option>
                        </select>
                    </p>
                    <p>
                        <label for="ciudad">Ciudad</label>
                    </p>
                    <p>
                        <select name="ciudad">
                            <option value=""></option>
                        </select>
                    </p>
                    <p class="text-center">
                        <button>Buscar</button>
                    </p>
                </div>
            </div>
        </div>
    </div>