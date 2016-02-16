<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

get_header(); ?>

<section id="banner">
	<div class="container-fluid">
		<div class="row">		
			<?php putRevSlider( "banner-index" ) ?>		
		</div>
	</div>
</section>

<section id="form-responsivo">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-8 col-md-4">
				<header><h2>SOLICITE UM ORÇAMENTO E FIQUE MAIS TRANQUILO.</h2></header>
				<div class="form-conteudo">
					formulario
				</div>						
			</div>

		</div>
	</div>
</section>

<section id="home-vantagens">
	<div class="container">
		<div class="row">
			<h1 class="titulo-linha">Vantagens do rastreamento Rastrus</h1>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<p>
					<strong>Confira quais são as vantagens de ter um plano de rastreamento e monitoramento da Rastrus.</strong>
				</p>			
			</div>
		</div><br><br>
		<div class="row vantagens-imagens">
			<div class="col-md-2 col-md-offset-1">
				<img class="e-claro img-responsive vantagens1" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens4b.jpg"; ?>" />				
			</div>
			<div class="col-md-2">
				<img class="e-claro img-responsive vantagens2" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens4a.jpg"; ?>" />				
			</div>
			<div class="col-md-2">
				<img class="e-claro img-responsive vantagens3" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens4a.jpg"; ?>" />				
			</div>
			<div class="col-md-2">
				<img class="e-claro img-responsive vantagens4" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens4a.jpg"; ?>" />				
			</div>
			<div class="col-md-2">
				<img class="e-claro img-responsive vantagens5" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens4a.jpg"; ?>" />				
			</div>
		</div>	
	</div>
</section>

<section id="home-vantagens-detalhes">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-offset-1">
				<div class="vantagensdetalhes1">
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens_detalhes4.jpg"; ?>" />		
				</div>
				<div class="vantagensdetalhes2">
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens_detalhes4.jpg"; ?>" />		
				</div>
				<div class="vantagensdetalhes3">
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens_detalhes4.jpg"; ?>" />		
				</div>
				<div class="vantagensdetalhes4">
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens_detalhes4.jpg"; ?>" />		
				</div>
				<div class="vantagensdetalhes5">
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens_detalhes4.jpg"; ?>" />		
				</div>	
			</div>
		</div>	
	</div>
</section>

<?php get_footer(); ?>
