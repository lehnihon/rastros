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
			<div class="col-md-12">
				<header><h2>SOLICITE UM ORÇAMENTO E FIQUE MAIS TRANQUILO.</h2></header>
				<div class="form-conteudo">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 17 ); } ?>
				</div>						
			</div>

		</div>
	</div>
</section>

<section id="home-vantagens">
	<div class="container">
		<div class="row anima-a">
			<h1 class="titulo-linha">Vantagens do rastreamento Rastrus</h1>
		</div>
		<div class="row anima-a">
			<div class="col-md-6 col-md-offset-3">
				<p>
					<strong>Confira quais são as vantagens de ter um plano de rastreamento e monitoramento da Rastrus.</strong>
				</p>			
			</div>
		</div><br><br>
		<div class="row vantagens-imagens">
			<div class="col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1 anima-b">
				<img class="e-claro img-responsive vantagens1" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens1b.jpg"; ?>" />				
			</div>
			<div class="col-md-2 col-xs-2">
				<img class="e-claro img-responsive vantagens2 anima-c" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens2a.jpg"; ?>" />				
			</div>
			<div class="col-md-2 col-xs-2">
				<img class="e-claro img-responsive vantagens3 anima-f" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens3a.jpg"; ?>" />				
			</div>
			<div class="col-md-2 col-xs-2">
				<img class="e-claro img-responsive vantagens4 anima-e" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens4a.jpg"; ?>" />				
			</div>
			<div class="col-md-2 col-xs-2">
				<img class="e-claro img-responsive vantagens5 anima-d" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens5a.jpg"; ?>" />				
			</div>
		</div>	
	</div>
</section>

<section id="home-vantagens-detalhes">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-offset-1">
				<div class="row vantagensdetalhes1">
					<div class="col-md-4">
						<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens1.jpg"; ?>" />
					</div>
					<div class="col-md-7 col-md-offset-1 text-left">
						<h2>Menor custo do mercado</h2>
						<p>
							O serviço de rastreamento e monitoramento da Rastrus
							tem o menor preço do mercado. <br>
							É mais simples de contratar, você economiza e fica tranquilo.
						</p><br>
						<a href="#" class="btn-azul-claro">SOLICITE UM ORÇAMENTO</a>
					</div>		
				</div>
				
				<div class="vantagensdetalhes2" style="display:none">
					<div class="col-md-4">
						<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens2.jpg"; ?>" />
					</div>
					<div class="col-md-7 col-md-offset-1 text-left">
						<h2>Mais segurança para você!</h2>
						<p>
							A Rastrus realiza a instalação do rastreador. <br>
							Essa é a certeza de mais segurança para você e 
							sua família.
						</p><br>
						<a href="#" class="btn-azul-claro">SOLICITE UM ORÇAMENTO</a>
					</div>			
				</div>
				<div class="vantagensdetalhes3" style="display:none">
					<div class="col-md-4">
						<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens3.jpg"; ?>" />
					</div>
					<div class="col-md-7 col-md-offset-1 text-left">
						<h2>Soluções para você</h2>
						<p>
							A Rastrus tem a solução perfeito para você. <br>
							Com nosso rastreador no seu veículo, você tem total
							controle e segurança, confira as vantagens: <br>
							- Rastreamento em tempo real, <br> 
							- Auto-monitoramente 24 horas por dia, <br>
							- Controle de rotas, <br>	
							- Garantia do serviço de entrega. 
						</p><br>
						<a href="#" class="btn-azul-claro">SOLICITE UM ORÇAMENTO</a>
					</div>		
				</div>
				<div class="vantagensdetalhes4" style="display:none">
					<div class="col-md-4">
						<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens4.jpg"; ?>" />
					</div>
					<div class="col-md-7 col-md-offset-1 text-left">
						<h2>Soluções para sua empresa e frota</h2>
						<p>
							A Rastrus também tem a solução perfeita para sua empresa e frota. <br>
							Ideal para: <br>
							- Locadora de veículos <br>
							- Associações e cooperativas, <br>
							- Frotas, <br>
							- Transportadoras e empresas que atuam com transporte em geral, <br>
							- Proteja seus produtos com nossas Iscas de Carga.
						</p><br>
						<a href="#" class="btn-azul-claro">SOLICITE UM ORÇAMENTO</a>
					</div>		
				</div>
				<div class="vantagensdetalhes5" style="display:none">
					<div class="col-md-4">
						<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vantagens5.jpg"; ?>" />
					</div>
					<div class="col-md-7 col-md-offset-1 text-left">
						<h2>Abrangência Nacional</h2>
						<p>
							A Rastrus tem cobertura garantida em todo o território 
							nacional. <br>
							Assim você fica protegido e mais tranquilo aonde estiver. 
						</p><br>
						<a href="#" class="btn-azul-claro">SOLICITE UM ORÇAMENTO</a>
					</div>			
				</div>	
			</div>
		</div>	
	</div>
</section>

<section id="home-solucoesv">
	<div class="container">
		<div class="row anima-g">
			<h2>Soluções para você</h1>
		</div>
		<div class="row anima-g">
			<div class="col-md-12">
				<p>
					<strong>Soluções de rastreamento e monitoramento para você.</strong>
				</p>			
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-4 anima-h">
				<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoesv_03.jpg"; ?>" /><br>
				<a href="<?php echo home_url( '/' )."embarcacoes"; ?>" class="btn-azul-claro">TRANSPORTE MARÍTIMO</a>				
			</div>
			<div class="col-md-4 anima-i">
				<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoesv_01.jpg"; ?>" /><br>
				<a href="<?php echo home_url( '/' )."automovel"; ?>" class="btn-azul-claro">PARA SEU AUTOMÓVEL</a>				
			</div>
			<div class="col-md-4 anima-j">
				<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoesv_02.jpg"; ?>" /><br>
				<a href="<?php echo home_url( '/' )."automovel"; ?>" class="btn-azul-claro">PARA SUA MOTO</a>				
			</div>			
		</div>	
	</div>
</section>

<section id="home-solucoesf">
	<div class="container">
		<div class="row anima-k">
			<h2>Soluções para sua empresa e frota</h1>
		</div>
		<div class="row anima-k">
			<div class="col-md-12">
				<p>
					<strong>Soluções inteligentes de rastreamento e monitoramento para sua empresa e frota.</strong>
				</p>			
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-4 anima-l">
				<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoesf_03.jpg"; ?>" /><br>
				<a href="<?php echo home_url( '/' )."containers"; ?>" class="btn-azul">CONTAINERS</a>				
			</div>
			<div class="col-md-4 anima-n">
				<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoesf_01.jpg"; ?>" /><br>
				<a href="<?php echo home_url( '/' )."cargas"; ?>" class="btn-azul">SOLUÇÕES PARA CARGAS</a>				
			</div>
			<div class="col-md-4 anima-m">
				<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/solucoesf_02.jpg"; ?>" /><br>
				<a href="<?php echo home_url( '/' )."empresa"; ?>" class="btn-azul">SOLUÇÕES PARA FROTAS</a>				
			</div>			
		</div>	
	</div>
</section>

<section id="planos">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 anima-o">
				<h1>Planos de Monitoramento e Rastreamento</h1>
				<h5><strong>Conheça todos os nossos planos de monitoramento e rastreamento e veja qual deles se encaixa no seu perfil.</strong></h5>
			</div>
		</div><br><br><br>
		<div class="row">
			<div class="col-md-4">
				<div class="plano-op anima-p">
					<header>
						<div class="titulo"><h5>PLANO 1</h5></div>
						<div class="preco clearfix">
							<div class="cifrao pos">R$</div> 
							<div class="valor pos">79</div>
							<div class="decimal pos">,90</div>
							<div class="periodo pos">/ MÊS</div> 
						</div>
						<p>MÍNIMO DE 12 MESES</p>
						<a class="btn-amarelo-q" href="#" data-toggle="modal" data-target="#myModala">ASSINE JÁ</a>
					</header>
					<div class="vantagens">
						<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/seta_planos.jpg"; ?>" />
						<p>COBERTURA NACIONAL</p>
						<p>CENTRAL DE ATENDIMENTO 24 HORAS</p>
						<p>INSTALAÇÃO EM DOMICÍLIO</p>
						<p>HISTÓRICO DE POSIÇÕES</p>
						<p>MONITORAMENTO VIA APLICATIVO OU WEB</p>
						<a class="btn-azul-claro-q" href="#" data-toggle="modal" data-target="#myModala">CONTRATAR</a>
					</div>					
				</div>
			</div>
			<div class="col-md-4 anima-r">
				<div class="plano-op">
					<header>
						<div class="titulo"><h5>PLANO 2</h5></div>
						<div class="preco clearfix">
							<div class="cifrao pos">R$</div> 
							<div class="valor pos">49</div>
							<div class="decimal pos">,90</div>
							<div class="periodo pos">/ MÊS</div> 
						</div>
						<p>+$300,00 pelo custo do rastreador</p>
						<a class="btn-amarelo-q" href="#" data-toggle="modal" data-target="#myModalb">ASSINE JÁ</a>
					</header>
					<div class="vantagens">
						<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/seta_planos.jpg"; ?>" />
						<p>COBERTURA NACIONAL</p>
						<p>CENTRAL DE ATENDIMENTO 24 HORAS</p>
						<p>INSTALAÇÃO EM DOMICÍLIO</p>
						<p>HISTÓRICO DE POSIÇÕES</p>
						<p>MONITORAMENTO VIA APLICATIVO OU WEB</p>
						<a class="btn-azul-claro-q" href="#" data-toggle="modal" data-target="#myModala">CONTRATAR</a>
					</div>					
				</div>
			</div>
			<div class="col-md-4 anima-q">
				<div class="plano-op">
					<header>
						<div class="titulo"><h5>PLANO 3 - ISCA OU MOTO</h5></div>
						<div class="preco clearfix">
							<div class="cifrao pos">R$</div> 
							<div class="valor pos">49</div>
							<div class="decimal pos">,90</div>
							<div class="periodo pos">/ MÊS</div> 
						</div>
						<p>+R$500 pelo custo do rastreador</p>
						<a class="btn-amarelo-q" href="#" data-toggle="modal" data-target="#myModalc">ASSINE JÁ</a>
					</header>
					<div class="vantagens">
						<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/seta_planos.jpg"; ?>" />
						<p>COBERTURA NACIONAL</p>
						<p>CENTRAL DE ATENDIMENTO 24 HORAS</p>
						<p>INSTALAÇÃO EM DOMICÍLIO</p>
						<p>HISTÓRICO DE POSIÇÕES</p>
						<p>MONITORAMENTO VIA APLICATIVO OU WEB</p>
						<a class="btn-azul-claro-q" href="#" data-toggle="modal" data-target="#myModala">CONTRATAR</a>
					</div>					
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/modal'); ?>

<?php get_footer(); ?>
