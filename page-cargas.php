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
			<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/carga.jpg"; ?>" />

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
				<h3>A segurança que seus produtos precisavam</h3>
				<p>
					Com o rastreador da Rastrus instalado em cada veículo da sua frota, você tem 
					total controle e segurança. <br>
					A solução de rastreamento das Rastrus é ideal para locadoras de veículos, 
					associações ou cooperativas, frotas, transportadoras e empresas que atuam com
					transportes em geral.
				</p><br>
				<h3>Como funciona a Isca de Carga?</h3>
				<p>
					A Isca de Carga é um rastreador discreto com dimensões bem reduzidas implantadas
					dentro de embalagens, caixas ou de qualquer produto que seja transportada. <br>
					Pelas suas características, com a Isca de Carga é possível fazer o monitoraramento
					da carga em tempo real, dessa maneira você tem a localização exata da mercadoria
					que venha a sofrer furto, roubo ou desvio. <br>
					Mesmo em situações extremas é possível recuperar a carga.					
				</p><br>
				<h3>Principal motivo para uso das Iscas de Carga</h3>
				<p>
					O principal motivo para o uso de um rastreador de carga é reforçar a segurança no 
					transporte da carga, com o objetivo de minimizar os prejuízos em caso de roubo, furto
					ou desaparecimento das cargas.								
				</p>
			</div>
			<div class="col-md-6">
				<h3>Monitoramento em tempo real da sua carga</h3>
				<p>
					O rastreador de cargas - Iscas de Carga da Rastrus permite que a qualquer 
					momento seja possível obter informações da sua frota, com possibilidade de 
					exibição do trajeto percorrido. <br>
					O rastreamento pode ser obtido consultando diretamente um de nossos 
					atendentes ou acompanhando as informações atualizadas disponíveis em nosso
					site.
				</p><br>
				<h3>Características das Iscas de Carga</h3>
				<p>
					- Tamanho reduzido, podendo ser escondido em qualquer tipo de carga <br> 
					- Portátil, sem fio e com bateria recarregável <br>
					- Imune a bloqueadores <br>
					- Pode ser utilizado em cargas de baixas temperaturas <br>
					- Permite rastreamento mesmo no interior de veículos blindados <br>
					- Pode ser ocultada em malotes de valores <br>
					- Tecnologia RF, radio frequência <br>
					- Permite rastreamento e localização em locais remotos <br>
					- Atende todo o território nacional. <br>								
				</p>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-4 text-right">
				<a href="<?php echo home_url( '/' )."familia"; ?>" class="btn-azul-claro">PROTEÇÃO PARA FAMÍLIA</a>
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
