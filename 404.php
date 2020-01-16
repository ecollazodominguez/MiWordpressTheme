<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

					<h1 class="page-title" style="color:red;font-size:70px"><?php _e( 'Uooooooooooo.', 'twentyseventeen' ); ?></h1>


					<p style="color:red;font-size:50px"><?php _e( 'Vaya, parece que te has perdido', 'twentyseventeen' ); ?></p></br>

					<p style="color:black;font-size:20px"><b></b> ¿Necesita ayuda? Solo tendrá que pulsar este botón y le atenderemos</b></p></br>
					
					<input type="button" value="Ayuda">
					

			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer("404");
