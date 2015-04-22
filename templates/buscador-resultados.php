<?php
/**
 * Template Name: Resultados Buscador
 * Description: Plantilla para la sección "Resultados del Buscador de Inmuebles" del sitio.
 */
get_template_part('templates/header');
?>
<div class="certificacion-wrapper buscador-wrapper resultados-wrapper">
	<div class="col-md-12 col-xs-12">
		<div class="breadcrumb hidden-xs"><a href="<?php echo get_bloginfo('url'); ?>">Inicio</a> > <a href="<?php echo get_page_link( get_page_by_title('buscador de inmuebles')->ID ); ?>">Buscador de Inmuebles</a> > Resultados</div>
		<div class="col-md-3 col-xs-12">
			<h2 class="page-banner">Buscador de Inmuebles</h2>

			<nav class="nav-buscador">
				<ul>
					<li class="seccion">
						<span class="titulo"><i class="fa fa-caret-right fa-lg"></i> Ciudad</span>
						<ul>
							<li><a href="#">Ciudad Bolívar</a></li>
							<li><a href="#">Ciudad Guayana</a></li>
						</ul>
					</li>
					<li class="seccion">
						<span class="titulo"><i class="fa fa-caret-right fa-lg"></i> Zona</span>
						<ul>
							<li><a href="#">Zona 1</a></li>
						</ul>
					</li>
					<li class="seccion">
						<span class="titulo"><i class="fa fa-caret-right fa-lg"></i> Tipo de Propiedad</span>
						<ul>
							<li><a href="#">Apartamento</a></li>
							<li><a href="#">Casa</a></li>
							<li><a href="#">Galpón</a></li>
							<li><a href="#">Oficina / Local</a></li>
							<li><a href="#">Terreno</a></li>
							<li><a href="#">Townhouse</a></li>
						</ul>
					</li>
					<li class="seccion">
						<span class="titulo"><i class="fa fa-caret-right fa-lg"></i> Precio</span>
						<ul>
							<li><input type="text" name="precio-min" placeholder="Bs. Min" /> a <input type="text" name="precio-max" placeholder="Bs. Max" /></li>
						</ul>
					</li>
					<li class="seccion">
						<span class="titulo"><i class="fa fa-caret-right fa-lg"></i> Habitaciones</span>
						<ul>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
						</ul>
					</li>
					<li class="seccion">
						<span class="titulo"><i class="fa fa-caret-right fa-lg"></i> Baños</span>
						<ul>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
						</ul>
					</li>
					<li class="seccion">
						<span class="titulo"><i class="fa fa-caret-right fa-lg"></i> Estacionamiento</span>
						<ul>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
						</ul>
					</li>
				</ul>
			</nav>

		</div>
		<div class="col-md-9 col-xs-12">
			<div class="inner-content">
				<div class="row">
					<div class="apto col-md-3 col-xs-10">
						<div class="apto-img">
							<img src="http://placehold.it/200x200" />
						</div>
						<div class="apto-desc">
							<h3><a href="propiedad/">Apartamento Res. Kamoiran Alta Vista Norte</a></h3>
							<ul>
								<li>85 m<sup>2</sup></li>
								<li>2 Habitaciones</li>
								<li>2 Baños</li>
							</ul>
							<h4>Bs. 17.500</h4>
						</div>
					</div>
					<div class="apto col-md-3 col-xs-10">
						<div class="apto-img">
							<img src="http://placehold.it/200x200" />
						</div>
						<div class="apto-desc">
							<h3>Apartamento Res. Cachamay Alta Vista Norte</h3>
							<ul>
								<li>85 m<sup>2</sup></li>
								<li>2 Habitaciones</li>
								<li>2 Baños</li>
							</ul>
							<h4>Bs. 15.200</h4>
						</div>
					</div>
					<div class="apto col-md-3 col-xs-10">
						<div class="apto-img">
							<img src="http://placehold.it/200x200" />
						</div>
						<div class="apto-desc">
							<h3>Apartamento Res. Kamarata Alta Vista Norte</h3>
							<ul>
								<li>85 m<sup>2</sup></li>
								<li>2 Habitaciones</li>
								<li>2 Baños</li>
							</ul>
							<h4>Bs. 20.500</h4>
						</div>
					</div>
					<div class="apto col-md-3 col-xs-10">
						<div class="apto-img">
							<img src="http://placehold.it/200x200" />
						</div>
						<div class="apto-desc">
							<h3>Apartamento Res. Karuay Alta Vista Norte</h3>
							<ul>
								<li>85 m<sup>2</sup></li>
								<li>2 Habitaciones</li>
								<li>2 Baños</li>
							</ul>
							<h4>Bs. 16.000</h4>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="apto col-md-3 col-xs-10">
						<div class="apto-img">
							<img src="http://placehold.it/200x200" />
						</div>
						<div class="apto-desc">
							<h3>Apartamento Res. Los Raudales Alta Vista Norte</h3>
							<ul>
								<li>85 m<sup>2</sup></li>
								<li>2 Habitaciones</li>
								<li>2 Baños</li>
							</ul>
							<h4>Bs. 17.500</h4>
						</div>
					</div>
					<div class="apto col-md-3 col-xs-10">
						<div class="apto-img">
							<img src="http://placehold.it/200x200" />
						</div>
						<div class="apto-desc">
							<h3>Apartamento Res. La Llovizna Alta Vista Norte</h3>
							<ul>
								<li>85 m<sup>2</sup></li>
								<li>2 Habitaciones</li>
								<li>2 Baños</li>
							</ul>
							<h4>Bs. 15.200</h4>
						</div>
					</div>
					<div class="apto col-md-3 col-xs-10">
						<div class="apto-img">
							<img src="http://placehold.it/200x200" />
						</div>
						<div class="apto-desc">
							<h3>Apartamento Res. Entre Ríos Alta Vista Norte</h3>
							<ul>
								<li>85 m<sup>2</sup></li>
								<li>2 Habitaciones</li>
								<li>2 Baños</li>
							</ul>
							<h4>Bs. 20.500</h4>
						</div>
					</div>
					<div class="apto col-md-3 col-xs-10">
						<div class="apto-img">
							<img src="http://placehold.it/200x200" />
						</div>
						<div class="apto-desc">
							<h3>Apartamento Res. Karuay Alta Vista Norte</h3>
							<ul>
								<li>85 m<sup>2</sup></li>
								<li>2 Habitaciones</li>
								<li>2 Baños</li>
							</ul>
							<h4>Bs. 16.000</h4>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="apto col-md-3 col-xs-10">
						<div class="apto-img">
							<img src="http://placehold.it/200x200" />
						</div>
						<div class="apto-desc">
							<h3>Apartamento Res. Américas Alta Vista Norte</h3>
							<ul>
								<li>85 m<sup>2</sup></li>
								<li>2 Habitaciones</li>
								<li>2 Baños</li>
							</ul>
							<h4>Bs. 17.500</h4>
						</div>
					</div>
					<div class="apto col-md-3 col-xs-10">
						<div class="apto-img">
							<img src="http://placehold.it/200x200" />
						</div>
						<div class="apto-desc">
							<h3>Apartamento Res. Roraima I Alta Vista Norte</h3>
							<ul>
								<li>85 m<sup>2</sup></li>
								<li>2 Habitaciones</li>
								<li>2 Baños</li>
							</ul>
							<h4>Bs. 15.200</h4>
						</div>
					</div>
					<div class="apto col-md-3 col-xs-10">
						<div class="apto-img">
							<img src="http://placehold.it/200x200" />
						</div>
						<div class="apto-desc">
							<h3>Apartamento Res. La Churuata Alta Vista Norte</h3>
							<ul>
								<li>85 m<sup>2</sup></li>
								<li>2 Habitaciones</li>
								<li>2 Baños</li>
							</ul>
							<h4>Bs. 20.000</h4>
						</div>
					</div>
					<div class="apto col-md-3 col-xs-10">
						<div class="apto-img">
							<img src="http://placehold.it/200x200" />
						</div>
						<div class="apto-desc">
							<h3>Apartamento Res. Guayana Alta Vista Norte</h3>
							<ul>
								<li>100 m<sup>2</sup></li>
								<li>3 Habitaciones</li>
								<li>2 Baños</li>
							</ul>
							<h4>Bs. 19.000</h4>
						</div>
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