<?php
get_header();
?>
<main id="primary" class="site-main mainView">
		<div class="mainIntroSectionParent">
			<h1>بیمارستان ها</h1>
			<div class="categoryVideosButtonMob">
				<svg width="20" height="20" fill="#424242" viewBox="0 0 0.6 0.6" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)"><path fill-rule="evenodd" d="M.55.425v.05H.2v-.05zm0-.15v.05H.2v-.05zm0-.15v.05H.2v-.05zM.1.5a.05.05 0 1 1 0-.1.05.05 0 0 1 0 .1m0-.15a.05.05 0 1 1 0-.1.05.05 0 0 1 0 .1M.1.2a.05.05 0 1 1 0-.1.05.05 0 0 1 0 .1"></path></svg>
				<span>محدوده ها</span>
			</div>
			<div class="categorySecParentMob">
				<div class="catMenuSectionUp bottomBorder">
					<h3 class="">دسته بندی ها</h3>
					<svg id="closeCatMenu" width="25" height="25" viewBox="0 0 15 15" fill="#28416e" xmlns="http://www.w3.org/2000/svg" style="display: inline;"><path d="M2.64 1.27 7.5 6.13l4.84-4.84A.92.92 0 0 1 13 1a1 1 0 0 1 1 1 .9.9 0 0 1-.27.66L8.84 7.5l4.89 4.89A.9.9 0 0 1 14 13a1 1 0 0 1-1 1 .92.92 0 0 1-.69-.27L7.5 8.87l-4.85 4.85A.92.92 0 0 1 2 14a1 1 0 0 1-1-1 .9.9 0 0 1 .27-.66L6.16 7.5 1.27 2.61A.9.9 0 0 1 1 2a1 1 0 0 1 1-1c.24.003.47.1.64.27z"></path></svg>
				</div>
					<a class="categoryItem" href="https://drshafaee.com/hospital/">همه بیمارستان ها</a>
					<?php
						$categories = get_terms( array(
							'taxonomy' => 'hospital-location',
							'hide_empty' => true,
							'exclude'=>array('1')
						) );
						foreach($categories as $category) {
						echo '<a class="categoryItem" href="'  . get_category_link($category->term_id) . '"> '  . $category -> name . '</a>';
						}
					?>
			</div>
			<div class="IntroSectionParent">
				<div class="categorySecParent highMargined">
					<h3>محدوده ها</h3>
					<a class="categoryItem" href="https://drshafaee.com/hospital/">همه بیمارستان ها</a>
					<?php
						$categories = get_terms( array(
							'taxonomy' => 'hospital-location',
							'hide_empty' => true,
							'exclude'=>array('1')
						) );
						foreach($categories as $category) {
						echo '<a class="categoryItem" href="'  . get_category_link($category->term_id) . '"> '  . $category -> name . '</a>';
						}
					?>
				</div>
				<?php if ( have_posts() ) : ?>
					<!-- <header class="page-header"> -->
					<?php
					// the_archive_title( '<h1 class="page-title">', '</h1>' );
					// the_archive_description( '<div class="archive-description">', '</div>' );
					?>
					<!-- </header>.page-header -->
					<div class="mainArchiveGridWrapper">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
					the_post();
					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', 'hospitals' );
					endwhile;
					the_posts_navigation();
					else :
					get_template_part( 'template-parts/content', 'none' );
					endif;
				?>
			</div>
		</div>
		<div class="archivePagination">
			<?php pagination_bar(); ?>
    	</div>
	</div>
	</main><!-- #main -->
<?php
get_footer();
?>