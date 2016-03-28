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
					<p>Oferecemos as melhores soluções em rastreamento e monitoramento para carros, motos, caminhões, cargas, frotas, 
barcos e containers. Sempre colocando em prioridade a segurança e a tranquilidade dos nossos clientes.</p>
					<p>Os rastreadores e bloqueadores oferecidos pela Rastrus são de cobertura nacional, utilizando tecnologia GSM e GPRS, 
dessa forma impossibilita que ladrões desativem.</p>
					<p>Nossa equipe trabalha de forma sinérgica e integrada para que todos os processos, desde o primeiro contato realizado 
até a instalação e monitoramento, tragam resultados significativos para você e sua empresa.</p>
				</div>
				<div class="col-md-3 col-md-offset-1 text-left">
					<strong>Receba nossas novidades</strong><br><br>
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 20 ); } ?> 
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
					<p class="destaque-footer">
						São Paulo: <br>11 3467-5186   |   11 2061-3138 						
					</p>					
				</div>
			</div><br/>
			<div class="row">
				<div class="col-md-12">
					<ul class="menu-footer clearfix">
						<li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">QUEM SOMOS</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' )."planos" ); ?>">PLANOS</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) )."automovel"; ?>">AUTOMÓVEL</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) )."automovel"; ?>">MOTO</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) )."containers"; ?>">CONTAINERS</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) )."empresa"; ?>">FROTAS</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) )."cargas"; ?>">CARGAS</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) )."embarcacoes"; ?>">MARÍTIMO</a></li>
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
