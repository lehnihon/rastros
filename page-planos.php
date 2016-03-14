<?php
get_header('sembanner'); ?>

<section id="planos">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1>Planos de Monitoramento e Rastreamento</h1>
				<h5><strong>Conheça todos os nossos planos de monitoramento e rastreamento e veja qual deles se encaixa no seu perfil.</strong></h5>
			</div>
		</div><br><br><br>
		<div class="row">
			<div class="col-md-4">
				<div class="plano-op">
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
			<div class="col-md-4">
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
			<div class="col-md-4">
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

<section id="entre-contato">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-right">
				Não pode ser atendido pelos planos acima? <br>
				<strong>Gostaríamos de entender as suas necessidades!</strong>
			</div>
			<div class="col-md-6 text-left"><a class="btn-azul-q" href="#">ENTRE EM CONTATO</a></div>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/modal'); ?>

<?php get_footer(); ?>
