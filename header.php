<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<script>
	var dirbase = "<?php echo dirname( get_bloginfo('stylesheet_url')) ?>";
new WOW().init();
</script>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<section id="header">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-md-offset-6 box clearfix">
						<span>Redes sociais </span>	
						<ul class="redes_sociais_header">
							<li class="youtube"><a target="_blank" href="#"></a></li>
							<li class="instagram"><a target="_blank" href="#"></a></li>
							<li class="twitter"><a target="_blank" href="#"></a></li>
							<li class="facebook"><a target="_blank" href="#"></a></li>
						</ul>
					</div>
					<div class="col-md-3 box clearfix header-login">
						<a href="https://sis.getrak.com/rastrus/" class="btn-login pull-right">LOGIN</a>
						<span class="pull-right">Acesse com seu login </span>
					</div>
					<div class="col-md-3 box clearfix header-login-responsive">
						<span>Acesse com seu login </span>
						<a href="https://sis.getrak.com/rastrus/" class="btn-login pull-left">LOGIN</a>
					</div>
				</div>
			</div>
		</header>
		<nav id="header-nav">
			<div class="container">
				<div class="fundo-azul">
					<div class="row">
						<div class="col-md-4 logo-container text-left">
							<a href="<?php echo home_url( '/' ); ?>"><img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo_header.jpg"; ?>" /></a>
							<div class="menu-responsivo">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="<?php echo home_url( '/' )."sobre"; ?>">Institucional</a></li
									><li><a href="<?php echo home_url( '/' )."localizacao"; ?>">Localização</a></li
									><li><a href="<?php echo home_url( '/' )."contato"; ?>">Atendimento</a></li
									><li><a href="<?php echo home_url( '/' )."planos"; ?>">Planos</a></li									
									><li><a href="<?php echo home_url( '/' )."automovel"; ?>">Automóvel</a></li
									><li><a href="<?php echo home_url( '/' )."automovel"; ?>">Moto</a></li
									><li><a href="<?php echo home_url( '/' )."cargas"; ?>">Cargas</a></li
									><li><a href="<?php echo home_url( '/' )."familia"; ?>">Família</a></li>
								</ul>								
							</div>	
						</div>
						<div class="col-md-8 menu-container">					
							<div class="menu-header clearfix">
								<div class="menu-tel">
									<img class="e-claro img-responsive pull-left" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tel_header.jpg"; ?>" />
									<div class="pull-left clearfix"><strong>11 2061-3138</strong></div>
								</div>
								<div class="menu-op">
									<a class="menu-drop-header" href="#">RASTREAMENTO</a>
									<span class="glyphicon glyphicon-triangle-bottom"></span>
									<ul class="menu-drop">
										<li><a href="<?php echo home_url( '/' )."automovel"; ?>">Para Automóvel</a></li>
										<li><a href="<?php echo home_url( '/' )."automovel"; ?>">Para Moto</a></li>
										<li><a href="<?php echo home_url( '/' )."cargas"; ?>">Isca para Cargas</a></li>
										<li><a href="<?php echo home_url( '/' )."familia"; ?>">Proteção para Família</a></li>
									</ul>
								</div>							
								<div class="menu-op">
									<a class="menu-drop-header" href="#">PLANOS</a>
									<span class="glyphicon glyphicon-triangle-bottom"></span>
									<ul class="menu-drop">
										<li><a href="<?php echo home_url( '/' )."planos"; ?>">Motos</a></li>
										<li><a href="<?php echo home_url( '/' )."planos"; ?>">Veículos</a></li>
										<li><a href="<?php echo home_url( '/' )."planos"; ?>">Carga</a></li>
										<li><a href="<?php echo home_url( '/' )."planos"; ?>">Família</a></li>
									</ul>									
								</div>
								<div class="menu-op">
									<a class="menu-drop-header" href="<?php echo home_url( '/' )."sobre"; ?>">QUEM SOMOS</a>
									<span class="glyphicon glyphicon-triangle-bottom"></span>
									<ul class="menu-drop">
										<li><a href="<?php echo home_url( '/' )."sobre"; ?>">Institucional</a></li>
										<li><a href="<?php echo home_url( '/' )."localizacao"; ?>">Localização</a></li>
										<li><a href="<?php echo home_url( '/' )."contato"; ?>">Atendimento</a></li>
									</ul>									
								</div>
							</div>
						</div>					
					</div>
				</div>
			</div>
		</nav>
		<div class="formulario-header">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-8 col-md-4 text-left">
						<header><h2>SOLICITE UM ORÇAMENTO E FIQUE MAIS TRANQUILO.</h2></header>
						<div class="form-conteudo">
							<p>Preencha todos os campos</p>
							<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 3 ); } ?>
						</div>						
					</div>

				</div>
			</div>
		</div>
	</section>
