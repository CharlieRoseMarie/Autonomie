<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Autonomie
 * @since Autonomie 1.0.0
 */

get_header(); ?>

			<main id="primary" <?php autonomie_main_class(); ?><?php autonomie_semantics( 'main' ); ?>>
			
				<?php while ( have_posts() ) : the_post(); ?>
				<?php if(in_category("deleted")): ?>
				<?php status_header( 410, 'deleted' ) ?>
				<div class="entry-content e-content" itemprop="description articleBody">
				<div class="h-entry">
					<time class="dt-updated" datetime="<?php echo get_the_modified_date(); ?>">Removed on: <?php echo get_the_modified_date(); ?></time>
					<p class="p-name p-content">
						There was a post here. It's gone now.
					</p>
				</div>
				</div>
			<?php else: ?>
					<?php get_template_part( 'templates/content', get_post_format() ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) {
						comments_template( '', true );
					}
					?>
			<?php endif; ?>

				<?php endwhile; // end of the loop. ?>
			</main><!-- #content -->

			<?php autonomie_content_nav( 'nav-below' ); ?>

<?php get_footer(); ?>
