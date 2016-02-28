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

<section id="descricao-solucoes">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>A segurança que sua empresa precisava</h3>
				<p>
					Com o rastreador da Rastrus instalado em cada veículo da sua frota, você tem 
					total controle e segurança. <br>
					A solução de rastreamento das Rastrus é ideal para locadoras de veículos, 
					associações ou cooperativas, frotas, transportadoras e empresas que atuam com
					transportes em geral.
				</p><br>
				<h3>Como funciona o rastreamento de frota?</h3>
				<p>
					O equipamento de rastreamento da Rastrus recebe as informações como endereço 
					e velocidade  diretamente dos satélites (GPS) e transmite essas informações e 
					outros dados de telemetria via (GPRS) para os nossos servidores. <br>
					Os localizadores são discretos, podendo atender a necessidade específica de cada 
					empresa, sem deixar indícios de instalação e compatível com todos os tipos de 
					automóveis da sua frota.
				</p><br>
				<h3>Acesso fácil ao portal de rastreamento</h3>
				<p>
					Com o objetivo de facilitar a sua vida, através de um computador com acesso à 
					internet, é possível realizar a configuração e o monitoramento de toda sua frota. <br>
					Com um login e senha individualizado ou por grupo de veículos, é possível visualizar
					toda a frota em uma única tela e em tempo real. <br>
					Por mais que o veículo esteja desligado, você consegue fazer o monitoramento em
					tempo real.								
				</p>
			</div>
			<div class="col-md-6">
				<h3>Monitoramento em tempo real da sua frota</h3>
				<p>
					A solução de restreamento da Rastrus permite que a qualquer momento seja
					possível obter informações da sua frota, com possibilidade de exibição do trajeto 
					percorrido. <br>
					O rastreamento pode ser obtido consultando diretamente um de nossos 
					atendentes ou acompanhando as informações atualizadas disponíveis em nosso
					site.
				</p><br>
				<h3>Vantagens do rastreador para sua empresa</h3>
				<p>
					- Acesso via internet ao portal de rastreamento <br>
					- Auto-Monitoramento 24 horas <br>
					- Central de Atendimento 24 horas <br>
					- Acesso ilimitado ao portal de rastreamento via Internet <br>
					- Login e Senha individualizados ou por grupo de veículo<br>
					- Cobertura (GPS) e transmissão via GPRS/GSM<br> 
					- Visualização de toda a frota em uma única tela e em tempo real<br>
					- Posição em tempo real da ignição, ligada ou desligada<br>
					- Informação e registro de chegada em locais pré-definidos<br>
					- Criação de Cercas Eletrônicas<br>
					- Relatórios das ruas percorridas pelo veículo <br>
					- Relatórios com históricos dos veículos por data ou período<br>
					- Relatório de deslocamentos e Paradas<br>
					- Central de atendimento 24h em caso de furto ou roubo	<br>							
				</p>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-4">
				<a href="<?php echo home_url( '/' )."containers"; ?>" class="btn-azul-claro">RASTREAMENTO DE CONTAINERS</a>
			</div>
			<div class="col-md-4">
				<a href="<?php echo home_url( '/' )."cargas"; ?>" class="btn-azul-claro">SOLUÇÕES PARA CARGAS - ÍSCAS</a>
			</div>
			<div class="col-md-4">
				<a href="#" class="btn-azul">SOLICITAR ORÇAMENTO</a>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>
