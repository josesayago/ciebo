<?php
/**
 * Template Name: Caras Felices
 * Description: Plantilla para la sección "Caras Felices" del sitio.
 */
get_template_part('templates/header');
?>
<div class="caras-wrapper">
	<div class="col-md-12 col-xs-12">
		<div class="breadcrumb hidden-xs"><a href="<?php echo get_bloginfo('url'); ?>">Inicio</a> > Caras Felices</div>
		<div class="col-md-3 col-xs-12 caras-head">
			<h2 class="page-banner">Caras Felices <span class="page-sloggan">Fundación Social</span></h2>
		</div>
		<div class="col-md-9 col-xs-12">
			<div class="inner-content">
				<div class="row">
					<div class="col-md-6 col-xs-12 descripcion">
						<p>
							Formamos parte de la comunidad y ofrecemos aportes a través de nuestra fundación social. Únete a nuestra causa y aporta tu granito de arena. Puedes realizar un aporte económico o apoyarnos con labor social, cualquier ayuda es bienvenida.
						</p>
					</div>
					<div class="col-md-4 col-xs-12 col-md-offset-2 cronograma">
						<h3>Cronograma de actividades</h3>
						<ul>
							<li><span class="small">■</span> Conociendo la llovizna
								<ul>
									<li>Domingo 08 /02/15 - 9:00am</li>
								</ul>
							</li>
							<li><span class="small">■</span> Una tarde de cine
								<ul>
									<li>Viernes 30 /01/15 - 3:00pm</li>
								</ul>
							</li>
							<li><span class="small">■</span> Sonrisa rural
								<ul>
									<li>Sábado 24 /01/15 - 10:00am</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="clearfix">&nbsp;</div>
				<div class="clearfix">&nbsp;</div>
				<div class="row">
					<div class="col-md-6 col-xs-12 donaciones">
						<div class="col-md-5 col-xs-5">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/caras-felices.png" />
						</div>
						<div class="col-md-7 col-xs-7 dona-text">
							<h3>Donaciones</h3>
							<p><strong>Fundación Caras Felices</strong></p>
							<p>J-306407383-3</p>
							<p><strong>Banco Nam Libero</strong></p>
							<p>0114-0182-16-1820032207</p>
							<p><strong>felices@ciebo.com</strong></p>
						</div>
					</div>
					<div class="clearfix visible-xs">&nbsp;</div>
					<div class="col-md-4 col-xs-12 col-md-offset-2 actividades">
						<h3>Apúntate para la próxima actividad</h3>
						<div class="form">
                            <p>
                            	<input type="text" name="nombre" id="nombre" placeholder="Tu nombre" />
                            </p>
                            <p>
                            	<input type="text" name="email" id="email" placeholder="Tu e-mail" />
                            </p>
	                        <div class="select-group">
	                            <p>
	                                <select name="actividad" dir="rtl">
	                                    <option value="">Selecciona una actividad</option>
	                                </select>
	                            </p>
	                        </div>
	                         <p class="text-right">
	                            <button>Enviar</button>
	                        </p>
	                    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="content row pie-caras">
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
		<div class="col-md-6 caras-logo">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/caras-felices.png" />
		</div>
	</div>
</div>
<?php get_template_part('templates/footer'); ?>