<?php
/**
 * Template Name: Nosotros
 * Description: Plantilla para la sección "Nosotros" del sitio.
 */
get_template_part('templates/header');
?>
<div class="col-md-12 col-xs-12">
	<div class="breadcrumb hidden-xs"><a href="<?php echo get_bloginfo('url'); ?>">Inicio</a> > Nosotros > <?php echo get_the_title(); ?></div>
	<div class="col-md-3 col-xs-12">
		<h2 class="page-banner">Nosotros</h2>
		<div class="clearfix">&nbsp;</div>
		<div class="clearfix">&nbsp;</div>
		<div class="clearfix">&nbsp;</div>
		<div class="local-nav">
			<ul class="nav">
				<li class="one <?php if( $pagename == 'ciebo' ) echo 'active'; ?>"><a href="<?php echo get_page_link( get_page_by_title('ciebo')->ID ); ?>">CIEBO</a></li>
				<li class="two <?php if( $pagename == 'junta-directiva' ) echo 'active'; ?>"><a href="<?php echo get_page_link( get_page_by_title('junta directiva')->ID ); ?>">Junta Directiva</a></li>
				<li class="three <?php if( $pagename == 'afiliados' ) echo 'active'; ?>"><a href="<?php echo get_page_link( get_page_by_title('afiliados')->ID ); ?>">Afiliados</a></li>
			</ul>
		</div>
	</div>
	<div class="col-md-9 col-xs-12">
		<div class="inner-content">
		<?php 
			if( have_posts() ) : 
				while( have_posts() ) : the_post();
					the_content();
				endwhile; 
			endif;
		?>
		</div>
	</div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="content row pie">
	<div class="col-md-6 pieizq hidden-xs">
		<div class="col-md-6">
			<h3>Conócenos</h3>
			<ul>
				<li><a href="#">¿Quiénes somos?</a></li>
				<li><a href="#">Código de ética</a></li>
				<li><a href="#">Fundación social</a></li>
				<li><a href="#">Eventos</a></li>
			</ul>
		</div>
		<div class="col-md-6">
			<h3>Acontecer inmobiliario</h3>
			<ul>
				<li><a href="#">Leyes y decretos</a></li>
				<li><a href="#">Noticias</a></li>
				<li><a href="#">Blog inmobiliario</a></li>
				<li><a href="#">Buscador de inmuebles</a></li>
			</ul>
		</div>
	</div>
	<div class="col-md-6 pieder">
		<div class="col-md-3">
			<p class="telf">0286 9613446</p>
			<p class="telf">0424 9163065</p>
			<p class="email">info@ciebo.com</p>
			<div class="socialicons">
				<a href=""><i class="fa fa-facebook-official fa-2x"></i></a>
				<a href=""><i class="fa fa-twitter fa-2x"></i></a>
				<a href=""><i class="fa fa-instagram fa-2x"></i></a>
				<a href=""><i class="fa fa-google-plus fa-2x"></i></a>
			</div>
		</div>
		<div class="col-md-3">
			<p class="dir">
				Torre Continental, Mezzanina,
				Oficina 13, Av. Guayana c/c
				Carrera Caruachi Alta Vista,
				Puerto Ordaz, Bolívar. <br />Zona
				Postal 8050.
			</p>
		</div>
		<div class="col-md-6">
			<iframe width="auto" height="auto" frameborder="0" style="border:0;" src="https://www.google.com/maps/embed/v1/search?q=C%C3%A1mara%20Inmobiliaria%20del%20Estado%20Bol%C3%ADvar%2C%20Ciudad%20Guayana%2C%20Bol%C3%ADvar%2C%20Venezuela&key=AIzaSyCN8_IlAk2hkfjrP9t6k4wWvmekLJMuaDA"></iframe>
		</div>
	</div>
</div>
<?php get_template_part('templates/footer'); ?>