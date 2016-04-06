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
			<?php putRevSlider( "banner-embarcacoes" ) ?>		
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
				<h3>Rastreamento de Embarcações</h3>
				<p>
					A Rastrus traz para o mercado náutico uma solução direcionada a embarcações de 
					pequeno, médio e grande porte, através de módulos de alta tecnologia com 
					transmissão GPRS/GPS à prova d'água e de maresia.
				</p><br>
				<h3>Segurança</h3>
				<p>
					Rastreie seu barco, jet ski, lancha ou embarcação e tenha certeza que seu patrimônio 
					está em segurança. <br/>
					Proporcionamos um gerenciamento e controle total da embarcação, seja ela particular, 
					passeio, turismo ou pesqueiras, para posicionamento em local de pesca, controles em 
					áreas de arrastos, controle da carga, para que não haja desvio de rota para outros 
					portos.

				</p>
			</div>
			<div class="col-md-6">
				<p>
					As soluções da Rastrus são otimizadas para rastrear embarcações e permitir 
					que frotas marítimas de qualquer tamanho mantenham comunicação de dados 
					vitais com os portos de origem, onde quer que estejam. <br/>
					Os sistemas de rastreamento de embarcações também melhoram a segurança 
					das embarcações e dos membros da tripulação.

				</p><br>
				<h3>Vantagens do rastreador</h3>
				<p>
					- Identifique emergências marítimas e oriente as operações de resgate com 
					base nos dados de localização via GPS. <br/>
					- Melhore a segurança da tripulação com o uso de botões de emergência 
					ligados aos sistemas em terra. <br/>
					- Agiliza as operações e reduz o consumo de combustível.
				</p>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-4 col-md-offset-2 text-right">
				<a href="<?php echo home_url( '/' )."automovel"; ?>" class="btn-azul-claro">SOLUÇÕES PARA AUTOMÓVEL E MOTO</a>
			</div>
			<div class="col-md-4 text-left">
				<a href="#" class="btn-azul">SOLICITAR ORÇAMENTO</a>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>
