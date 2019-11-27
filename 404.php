<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Autonomie
 * @since Autonomie 1.0.0
 */

get_header(); ?>

		<main id="primary" <?php autonomie_main_class(); ?><?php autonomie_semantics( 'main' ); ?>>

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title p-name"><?php _e( 'Generic cutesy 404 message!', 'autonomie' ); ?></h1>
				</header>

				<div class="entry-content e-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'autonomie' ); ?></p>

					<?php get_search_form(); ?>
					<p>
						Alternatively, <a href="https://en.wikipedia.org/wiki/Special:Random">why not find something you weren't looking for?</a>
					</p>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</main><!-- #content -->

<?php get_footer(); ?>
