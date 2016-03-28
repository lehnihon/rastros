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
			<?php putRevSlider( "banner-sobre" ) ?>		
		</div>
	</div>
</section>

<section id="form-responsivo">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-8 col-md-4 text-left">
				<header><h2>SOLICITE UM ORÇAMENTO E FIQUE MAIS TRANQUILO.</h2></header>
				<div class="form-conteudo">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 17 ); } ?>
				</div>						
			</div>

		</div>
	</div>
</section>

<section id="descricao-solucoes">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Institucional</h3>
				<p>
					Oferecemos as melhores soluções em rastreamento e monitoramento para carros, 
					motos, caminhões, cargas, frotas, barcos e containers. 
				</p>
				<p>
					Atuamos nesse segmento há X anos, sempre colocando em prioridade a segurança 
					e a tranquilidade dos nossos clientes. <br/>
					Os rastreadores e bloqueadores oferecidos pela Rastrus são de cobertura nacional, 
					utilizando tecnologia GSM e GPRS, dessa forma impossibilita que ladrões desativem.					
				</p>
				<p>
					Com a crescente violência urbana, não basta ter apenas um seguro para o veículo, 
					pois com ele podemos recuperar o valor do bem, mas infelizmente em casos de 
					assaltos, sequestros ou roubo de cargas a maior vítima pode ser qualquer um de nós. 
				</p>
			</div>
			<div class="col-md-6">
				<p>
					A Rastrus pensando no mercado doméstico e corporativo, criou pacotes de 
					soluções para auxiliar a segurança do condutor e da carga, com um sistema que
					utiliza rastreador, localizador e bloqueador via satélite, é possível o simples 
					monitoramento de rota e velocidade do veículo, o rastreamento das cargas e até 
					mesmo o travamento de portas e baús de caminhões.
				</p>
				<p>
					Nossa equipe trabalha de forma sinérgica e integrada para que todos os processos, 
					desde o primeiro contato realizado até a instalação e monitoramento, tragam 
					resultados significativos para você e sua empresa.
				</p>
				<p>Implante nosso sistema e comprove!</p>
			</div>
		</div>
		
	</div>
</section>



<?php get_footer(); ?>
