<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DHN
 */

get_header(); ?>

	<div id="primary" class="container">

		<?php if ( is_active_sidebar( 'above-content' ) ) { ?>
			<div class="row">
				<div class="twelve columns">
					<?php dynamic_sidebar( 'above-content' ); ?>
				</div>
			</div>
		<?php } ?>

		<div class="row">
			<div class="twelve columns">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div>
		</div>

		<?php if ( is_active_sidebar( 'after-content' ) ) { ?>
			<div class="row">
				<div class="twelve columns">
					<?php dynamic_sidebar( 'after-content' ); ?>
				</div>
			</div>
		<?php } ?>
	</div>

<?php
get_sidebar();
get_footer();
