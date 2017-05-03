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
			<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Rastrus Proteção para Carros e Motos 1.jpg"; ?>" />
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
				<h3>Perfeito para você.</h3>
				<p>
					Com o rastreador da Rastrus instalado no seu carro ou moto, você tem total 
					controle e segurança do seu veículo. <br>
					A solução de rastreamento das Rastrus é indispensável para a sua proteção e 
					a segurança de sua família, diminuindo os riscos de roubo.
				</p><br>
				<h3>Como funciona?</h3>
				<p>
					O equipamento de rastreamento da Rastrus recebe as informações como endereço 
					e velocidade  diretamente dos satélites (GPS) e transmite essas informações e 
					outros dados de telemetria via (GPRS) para os nossos servidores. <br>
					Os localizadores são discretos, podendo atender a necessidade específica de cada 
					cliente, sem deixar indícios de instalação e compatível com todos os tipos de 
					automóveis e motos.
				</p><br>
				<h3>A facilidade que você estava precisando</h3>
				<p>
					Com o objetivo de facilitar a sua vida, através de um computador com acesso à 
					internet, é possível realizar a configuração e o monitoramento do seu automóvel ou
					moto. <br>
					Essa é a facilidade que você estava precisando.							
				</p>
			</div>
			<div class="col-md-6">
				<h3>Monitoramento em tempo real</h3>
				<p>
					A solução de restreamento da Rastrus permite que a qualquer momento seja
					possível obter informações de localização do seu automóvel, com possibilidade
					de exibição do trajeto percorrido. <br>
					O rastreamento pode ser obtido consultando diretamente um de nossos 
					atendentes ou acompanhando as informações atualizadas disponíveis em nosso
					site.
				</p><br>
				<h3>Vantagens do rastreador</h3>
				<p>
					- Acesso via internet ao portal de rastreamento <br>
					- Auto-Monitoramento 24 horas <br>
					- Central de Atendimento 24 horas<br>
					- Rastreamento em tempo real com o motor ligado ou desligado<br>
					- Alertas por e-mail <br>
					- Controle de Rotas <br>
					- Relatórios de locais percorridos<br>
					- Relatórios de velocidade<br>
					- Assistência técnica permanente<br>
					- Abrangência do sistema em todo território nacional<br>
					- Transmissão via GPS/GPRS		<br>			
				</p>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-4 text-right">
				<a href="<?php echo home_url( '/' )."familia"; ?>" class="btn-azul-claro">PROTEÇÃO PARA FAMÍLIA</a>
			</div>
			<div class="col-md-4 text-center">
				<a href="<?php echo home_url( '/' )."cargas"; ?>" class="btn-azul-claro">ISCAS PARA CARGAS</a>
			</div>
			<div class="col-md-4 text-left">
				<a href="#" class="btn-azul">SOLICITAR ORÇAMENTO</a>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>
