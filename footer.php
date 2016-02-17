<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>
	<section id="footer-logo">
		<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo_footer.jpg"; ?>" />
	</section>
	<section id="footer">
		<div class="container">
			<div class="row"><br>
				<div class="col-md-8 text-left">
					<p><strong>RASTRUS RASTREAMENTO E MONITORAMENTO</strong></p>
					<p>A Rastrus Rastreamento e Monitoramento surgiu com o objetivo de oferecer soluções que tornem mais simples a vida da sua empresa, seja de pequeno ou grande porte.</p>
					<p>Com nossas soluções em manuseio, transporte, courier, logística reversa, impressão com dados variáveis e gestão postal, seus prazos são levados a sério. </p>
					<p>Com tecnologia, excelência no atendimento e o melhor custo-benefício, a Data Certa cuida do gerenciamento completo de toda a cadeia produtiva do seu produto do início ao destino final.</p>
				</div>
				<div class="col-md-3 col-md-offset-1 text-left">
					<strong>Receba nossas novidades</strong>
					<ul class="redes_sociais_header">
						<li class="youtube"><a target="_blank" href="#"></a></li>
						<li class="instagram"><a target="_blank" href="#"></a></li>
						<li class="twitter"><a target="_blank" href="#"></a></li>
						<li class="facebook"><a target="_blank" href="#"></a></li>
					</ul>					
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-12 text-left">
					<h3>Central de Atendimento</h3>
					<p>
						São Paulo: 11 1234-5678 <br>	
						Demais Localidades: 0800 123 4567					
					</p>					
				</div>
			</div><br/>
			<div class="row">
				<div class="col-md-7">
					<ul class="menu-footer clearfix">
						<li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">QUEM SOMOS</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' )."planos" ); ?>">PLANOS</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) )."servicos"; ?>">SERVIÇOS</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) )."rastreamento"; ?>">RASTREAMENTO</a></li>
						<li><a href="#">LOGIN</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' )."contato" ); ?>">CONTATO</a></li>
					</ul>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-6 text-left copy-text">
					&copy; Copyright <?php echo date('Y') ?> - Rastrus Monitoramento e Rastreamento
				</div>
				<div class="col-md-3 col-md-offset-3 copy-text text-left">
					<a target="_blank" href="http://agenciarino.com.br/">
						<span>Desenvolvido por</span>
						<img class="e-claro anima-rino" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/rino-bot.png"; ?>" />
					</a>
				</div>				
			</div>
		</div><!-- .container -->
	</section><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
