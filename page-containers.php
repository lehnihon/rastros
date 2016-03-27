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
			<?php putRevSlider( "banner-containers" ) ?>		
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

<section id="descricao-solucoes">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Rastreamento de Containers</h3>
				<p>
					Com as soluções de rastreamento e monitoramento da Rastrus, você pode monitorar 
					em tempo real os containers através de redes de comunicação baseadas em satélite 
					e cobertura celular de baixa e média largura de banda.
				</p><br>
				<h3>Localize o container e proteja sua carga</h3>
				<p>
					Com as soluções da Rastrus para monitoramento de containers, você evita o roubo de 
					cargas e garante a segurança das mercadorias, ao coletar dados provenientes dos 
					sensores de porta, da carga. <br/>
					Rastreie a localização de um container ou carreta na eventualidade de roubo 
					usando informações de localização via GPS. <br/>
					Comunique a localização em tempo real de carregamentos e calcule tempos 
					estimados de chegada com maior precisão.
				</p>
			</div>
			<div class="col-md-6">
				<h3>Localize o container e proteja sua carga</h3>
				<p>
					Com as soluções da Rastrus, você aumente a segurança, evite o roubo de 
					cargas, localize produtos furtados e melhora a qualidade da logística.
				</p><br>
				<h3>Vantagens do rastreador</h3>
				<p>
					- Acesso via internet ao portal de rastreamento <br/>
					- Auto-Monitoramento 24 horas <br/>
					- Central de Atendimento 24 horas <br/>
					- Acesso ilimitado ao portal de rastreamento via Internet <br/>
					- Login e Senha individualizados  <br/>
					- Cobertura (GPS) e transmissão via GPRS/GSM <br/> 
					- Posição em tempo real do container <br/>
					- Central de atendimento 24h em caso de furto ou roubo
				</p>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-4">
				<a href="<?php echo home_url( '/' )."cargas"; ?>" class="btn-azul-claro">SOLUÇÕES PARA CARGAS - ÍSCAS</a>
			</div>
			<div class="col-md-4">
				<a href="<?php echo home_url( '/' )."empresa"; ?>" class="btn-azul-claro">SOLUÇÕES PARA SUA FROTA</a>
			</div>
			<div class="col-md-4">
				<a href="#" class="btn-azul">SOLICITAR ORÇAMENTO</a>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>
