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
			<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Rastrus Protecao para Familia 2.jpg"; ?>" />
		</div>
	</div>
</section>

<section id="form-responsivo">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header><h2>SOLICITE UM ORÇAMENTO E FIQUE MAIS TRANQUILO.</h2></header>
				<div class="form-conteudo">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 3 ); } ?>
				</div>						
			</div>

		</div>
	</div>
</section>

<section id="descricao-solucoes">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Proteção para sua família</h3>
				<p>
					A Rastrus traz para o mercado uma solução direcionada a proteção familiar, com
					rastreadores pequenos e discretos, com transmissao GPRS/GPS, à prova d’água, 
					bateria com longa duração, mais preciso e poderoso e atualizado com muitos 
					recursos de rastreamento e monitoramento.

				</p><br>
				<h3>Segurança</h3>
				<p>
					Basta abrir o mapa de Proteção para Família Rastrus e ver onde os membros da sua
				família estão, 24 horas por dia, 7 dias por semana e 365 dias por ano.<br>
				Desde que sua família esteja com o rastreador, a localização é precisa e será exibida 
				no sistema de monitoramento.
				Você também pode carregar o rastreador nos veículos, bolsas, mochilas e malas.

				</p>
			</div>
			<div class="col-md-6">
				<p>
					Com a proteção da Rastrus, você pode rastrear em tempo real em nosso 
				sistema de monitoramento ou através do seu celular onde cada membra da sua 
				família está, assim você fica mais tranquilo ao saber que seus filhos estão em 
				um local seguro, chegando a um destino predeterminado ou em casa.<br> 
				Isso significa mais proteção e tranquilidade.
				</p>
				<h3>Vantagens do rastreador</h3>
				<p>
					- Rastreadores pequenos e discretos<br>
					- Carregados em bolsas, mochilas, malas e nos veículos<br>
					- Monitoramento em tempo real através do sistema Rastrus ou Aplicativo<br>
					- Localização precisa do familiar rastreado<br>
					- Proteção para sua família
				</p>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-4 text-right">
				<a href="<?php echo home_url( '/' )."cargas"; ?>" class="btn-azul-claro">ISCAS PARA CARGAS</a>
			</div>
			<div class="col-md-4 text-center">
				<a href="<?php echo home_url( '/' )."automovel"; ?>" class="btn-azul-claro">SOLUÇÕES PARA AUTOMÓVEL E MOTO</a>
			</div>
			<div class="col-md-4 text-left">
				<a href="#" class="btn-azul">SOLICITAR ORÇAMENTO</a>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>
