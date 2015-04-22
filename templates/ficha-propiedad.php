<?php
/**
 * Template Name: Ficha de Propiedad
 * Description: Plantilla para la sección "Ficha de Propiedad" del sitio.
 */
get_template_part('templates/header');
?>
<div class="certificacion-wrapper buscador-wrapper resultados-wrapper ficha-wrapper">
	<div class="col-md-12 col-xs-12">
		<div class="breadcrumb hidden-xs"><a href="<?php echo get_bloginfo('url'); ?>">Inicio</a> > <a href="<?php echo get_page_link( get_page_by_title('buscador de inmuebles')->ID ); ?>">Buscador de Inmuebles</a> > <a href="/buscador-inmuebles/resultados/">Resultados</a> > Propiedad</div>
		<div class="col-md-3 col-xs-12">
			<h2 class="page-banner">Buscador de Inmuebles</h2>
			<div class="clearfix">&nbsp;</div>
			<div class="ficha-thumbs">
				<div class="row">
					<div class="col-md-4 col-xs-4">
						<img src="http://placehold.it/70x70" />
					</div>
					<div class="col-md-4 col-xs-4">
						<img src="http://placehold.it/70x70" />
					</div>
					<div class="col-md-4 col-xs-4">
						<img src="http://placehold.it/70x70" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-xs-4">
						<img src="http://placehold.it/70x70" />
					</div>
					<div class="col-md-4 col-xs-4">
						<img src="http://placehold.it/70x70" />
					</div>
					<div class="col-md-4 col-xs-4">
						<img src="http://placehold.it/70x70" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-xs-4">
						<img src="http://placehold.it/70x70" />
					</div>
					<div class="col-md-4 col-xs-4">
						<img src="http://placehold.it/70x70" />
					</div>
					<div class="col-md-4 col-xs-4">
						<img src="http://placehold.it/70x70" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-xs-4">
						<img src="http://placehold.it/70x70" />
					</div>
					<div class="col-md-4 col-xs-4">
						<img src="http://placehold.it/70x70" />
					</div>
					<div class="col-md-4 col-xs-4">
						<img src="http://placehold.it/70x70" />
					</div>
				</div>
			</div>
			<div class="ficha-mapa">
				<div class="col-md-12 col-xs-12">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mapa_propiedad.jpg" />
				</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-2 col-xs-2">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/marker.png" />
					</div>
					<div class="col-md-10 col-xs-10">
						<p>Calle Ventuari, Res. Kamoiran, Alta Vista Norte, Puerto Ordaz, Edo. Bolívar.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-9 col-xs-12">
			<div class="inner-content">
				<div class="col-md-9 col-xs-12">
					<h2 class="section-title">Apartamento, Res. Kamoiran<br />Alta Vista Norte.</h2>
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="http://placehold.it/670x370" alt="...">
								<div class="carousel-caption">
									Vista Frente
								</div>
					    	</div>
					    	<div class="item">
					      		<img src="http://placehold.it/670x370" alt="...">
					      		<div class="carousel-caption">
					        		Pasillo
					      		</div>
					    	</div>
					    	<div class="item">
					      		<img src="http://placehold.it/670x370" alt="...">
					      		<div class="carousel-caption">
					        		Estacionamiento
					      		</div>
					    	</div>
					  	</div>
					  	<!-- Controls -->
					  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					  		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					  		<span class="sr-only">Anterior</span>
					  	</a>
					  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					  		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					  		<span class="sr-only">Siguiente</span>
					  	</a>
					</div>
				</div>
				<div class="col-md-3 col-xs-12">
					<div class="ficha-agente corredor">
						<div class="pic-m6">&nbsp;</div>
						<div class="nombre">Ahilad Cenet</div>
						<div class="telf"><img src="http://ciebo.loc/wp-content/themes/ciebo/assets/images/iconos/telefono.png" /> 0286-9629778</div>
						<div class="cel"><img src="http://ciebo.loc/wp-content/themes/ciebo/assets/images/iconos/celular.png" /> 0414-8285311</div>
						<div class="email"><img src="http://ciebo.loc/wp-content/themes/ciebo/assets/images/iconos/mail.png" /> cenet@gmail.com</div>
						<span class="nro-afiliado">#023</span>
					</div>
				</div>
				<div class="row ficha-tabla">
					<div class="col-md-9 col-xs-12">
						<div class="clearfix">&nbsp;</div>
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<td>
										<span class="title">Precio de alquiler</span>
										Bs. 17.500
									</td>
									<td>
										<span class="title">Superficie total m<sup>2</sup></span>
										200
									</td>
									<td>
										<span class="title">Construcción m<sup>2</sup></span>
										85
									</td>
									<td>
										<span class="title">Precio / m<sup>2</sup></span>
										Bs. 102,5
									</td>
								</tr>
								<tr>
									<td>
										<span class="title">Habitaciones</span>
										2
									</td>
									<td>
										<span class="title">Baños</span>
										2
									</td>
									<td>
										<span class="title">Estacionamiento</span>
										4
									</td>
									<td>
										<span class="title">Antigüedad</span>
										30 años
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row btn-buscador">
					<div class="col-md-12 col-xs-12">
						<p class="text-right"><a href="/buscador" class="btn">Ir al buscador</a></p>
					</div>
				</div>
			</div>
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
	<div id="contacto" class="col-md-6 pieder">
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
			<a href="https://www.google.com/maps/place/C%C3%A1mara+Inmobiliaria+del+Estado+Bol%C3%ADvar/@8.297713,-62.727852,15z/data=!4m2!3m1!1s0x0:0x1f2a53491140f4f7?hl=es-ES" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mapa.png" /></a>
		</div>
	</div>
</div>
<?php get_template_part('templates/footer'); ?>