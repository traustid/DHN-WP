<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DHN
 */

get_header(); ?>

	<div id="primary" class="container">

		<?php if (single_tag_title('', false) != '') { ?>
			<header class="page-header">
				<h1 class="page-title">
					<?php is_post_type_archive('projects') ? single_tag_title('Project type: ') : ''; ?>
				</h1>
			</header>
		<?php } ?>

		<?php if ( is_active_sidebar( 'above-content' ) ) { ?>
			<div class="row">
				<div class="twelve columns">
					<?php dynamic_sidebar( 'above-content' ); ?>
				</div>
			</div>
		<?php } ?>

		<?php if (single_tag_title('', false) != '') { ?>
			<header class="page-header">
				<h1 class="page-title">
					<?php single_tag_title('Project type: '); ?>
				</h1>
			</header>
		<?php } ?>


		<div class="row">
			<div class="twelve columns tile-grid">

			<?php
			if ( have_posts() ) : ?>


				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</div>
		</div>
	</div>

<?php
get_sidebar();
get_footer();
