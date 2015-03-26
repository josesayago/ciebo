<?php get_template_part('templates/header'); ?>
<div class="content row">
	<div class="col-md-12">
		<div class="col-md-4">
			<?php
				if( function_exists( 'single_latest_posts' ) ) {
					$params_tips = array(
						'title'				=> 'Tips inmobiliarios',
						'title_only'		=> 'false',
						'auto_excerpt'		=> 'true',
						'excerpt_length'	=> 24,
						'excerpt_trail'		=> 'custom',
						'excerpt_trail_cu'	=> '&#86;er m&aacute;s',
						'category'			=> 'tips',
						'number_posts'		=> 1,
						'instance'			=> 'tips',
						'full_meta'			=> 'true'
					);
					single_latest_posts( $params_tips );
				}
			?>
		</div>
		<div class="col-md-4">
			<?php
				if( function_exists( 'single_latest_posts' ) ) {
					$params_noticias = array(
						'title'				=> 'Noticias',
						'title_only'		=> 'false',
						'auto_excerpt'		=> 'true',
						'excerpt_length'	=> 24,
						'excerpt_trail'		=> 'custom',
						'excerpt_trail_cu'	=> '&#86;er m&aacute;s',
						'category'			=> 'noticias',
						'number_posts'		=> 1,
						'instance'			=> 'noticias',
						'full_meta'			=> 'true'
					);
					single_latest_posts( $params_noticias );
				}
			?>
		</div>
		<div class="col-md-4">
			<?php
				if( function_exists( 'single_latest_posts' ) ) {
					$params_eventos = array(
						'title' 			=> 'Eventos',
						'title_only'		=> 'false',
						'auto_excerpt'		=> 'true',
						'excerpt_length'	=> 24,
						'excerpt_trail'		=> 'custom',
						'excerpt_trail_cu'	=> '&#86;er m&aacute;s',
						'category'			=> 'eventos',
						'instance'			=> 'eventos',
						'number_posts'		=> 1,
						'full_meta'			=> 'true'
					);
					single_latest_posts( $params_eventos );
				}
			?>
		</div>
	</div>
</div>
<div class="move-down">
	<a href="#inicio"><i class="fa fa-lg fa-angle-down"></i></a>
</div>
<div class="clearfix"></div>
<div class="content row">
	<div class="col-md-8 col-md-offset-2">
		<h2 id="inicio" class="bigquote">
			Los directores participan activamente junto con nuestros afiliados en las distintas comisiones 
			que facilitan la coordinación de todas las actividades realizadas por el gremio.
		</h2>
	</div>
</div>
<div class="content row miembros">
	<div class="col-sm-3 col-md-12 grupo">
		<div class="col-md-3 m1">
			<div class="miembro">
				<div class="nombre">
					<p>Clemente Tenías</p>
				</div>
				<div class="cargo">
					<p>Presidencia</p>
				</div>
				<div class="email">
					<a href="mailto:presidencia@ciebo.com">presidencia@ciebo.com</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 m2">
			<div class="miembro">
				<div class="nombre">
					<p>Pedro Pérez Francis</p>
				</div>
				<div class="cargo">
					<p>Vicepresidencia</p>
				</div>
				<div class="email">
					<a href="mailto:vice@ciebo.com">vice@ciebo.com</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 m3">
			<div class="miembro">
				<div class="nombre">
					<p>Gladys Villalba</p>
				</div>
				<div class="cargo">
					<p>Finanzas</p>
				</div>
				<div class="email">
					<a href="mailto:finanzas@ciebo.com">finanzas@ciebo.com</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 m4">
			<div class="miembro">
				<div class="nombre">
					<p>Mayuly Zerpa</p>
				</div>
				<div class="cargo">
					<p>Secretaría</p>
				</div>
				<div class="email">
					<a href="mailto:sec@ciebo.com">sec@ciebo.com</a>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-sm-3 col-md-12 grupo">
		<div class="col-md-3 m5">
			<div class="miembro">
				<div class="nombre">
					<p>Eddy Rojas</p>
				</div>
				<div class="cargo">
					<p>Comunicación y medios</p>
				</div>
				<div class="email">
					<a href="mailto:medios@ciebo.com">medios@ciebo.com</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 m6">
			<div class="miembro">
				<div class="nombre">
					<p>Jacqueline Rodríguez</p>
				</div>
				<div class="cargo">
					<p>Actividades sociales</p>
				</div>
				<div class="email">
					<a href="mailto:sociales@ciebo.com">sociales@ciebo.com</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 m7">
			<div class="miembro">
				<div class="nombre">
					<p>Soris Espinoza</p>
				</div>
				<div class="cargo">
					<p>Programa de certificación</p>
				</div>
				<div class="email">
					<a href="mailto:certificacion@ciebo.com">certificacion@ciebo.com</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 m8">
			<div class="miembro">
				<div class="nombre">
					<p>Franco Piñango</p>
				</div>
				<div class="cargo">
					<p>Comunicación y medios</p>
				</div>
				<div class="email">
					<a href="mailto:medios@ciebo.com">medios@ciebo.com</a>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-sm-3 col-md-12 grupo">
		<div class="col-md-3 m9">
			<div class="miembro">
				<div class="nombre">
					<p>Annet León</p>
				</div>
				<div class="cargo">
					<p>Programa de certificación</p>
				</div>
				<div class="email">
					<a href="mailto:certificacion@ciebo.com">certificacion@ciebo.com</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 m10">
			<div class="miembro">
				<div class="nombre">
					<p>Alexais Montenegro</p>
				</div>
				<div class="cargo">
					<p>Ética y disciplina</p>
				</div>
				<div class="email">
					<a href="mailto:disciplina@ciebo.com">disciplina@ciebo.com</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 m11">
			<div class="miembro">
				<div class="nombre">
					<p>Jenny Vallenilla</p>
				</div>
				<div class="cargo">
					<p>Actividades sociales</p>
				</div>
				<div class="email">
					<a href="mailto:sociales@ciebo.com">sociales@ciebo.com</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 m12">
			<div class="miembro">
				<div class="nombre">
					<p>María Pilar Mina</p>
				</div>
				<div class="cargo">
					<p>Actividades sociales</p>
				</div>
				<div class="email">
					<a href="mailto:sociales@ciebo.com">sociales@ciebo.com</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_template_part('templates/footer'); ?>