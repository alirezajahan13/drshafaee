<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package drshafaee
 */

get_header();
?>

	<main id="primary" class="site-main mainView">

		<?php if ( have_posts() ) : ?>

			<header class="page-header centeredText bottomBorder">
				<h1 class="page-title mediumWeight mediumMargined ">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'نتایج جستجو %s' , 'drshafaee' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
				<div class="archive-description">هر چیزی که باید درباره <?php printf( get_search_query() ); ?> بدانید، در اختیار شماست</div>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			echo '<div class="archiveParent">';
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
