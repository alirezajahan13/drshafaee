<?php
get_header();
?>
<main id="primary" class="site-main mainView">
		<div class=" highMargined centeredText bottomBorder">
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<h1 class="archive-description">', '</h1>' );
			?>
		</div><!-- .page-header -->
		<div class="categoryVideosButtonMob">
			<svg width="20" height="20" fill="#187dbb" viewBox="0 0 0.6 0.6" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)"><path fill-rule="evenodd" d="M.55.425v.05H.2v-.05zm0-.15v.05H.2v-.05zm0-.15v.05H.2v-.05zM.1.5a.05.05 0 1 1 0-.1.05.05 0 0 1 0 .1m0-.15a.05.05 0 1 1 0-.1.05.05 0 0 1 0 .1M.1.2a.05.05 0 1 1 0-.1.05.05 0 0 1 0 .1"/></svg>
			<span>دسته بندی ها</span>
		</div>
		<div class="categorySecParentMob">
			<div class="catMenuSectionUp bottomBorder">
				<h3 class="">دسته بندی ها</h3>
				<svg id="closeCatMenu" width="25" height="25" viewBox="0 0 15 15" fill="#28416e" xmlns="http://www.w3.org/2000/svg" style="display: inline;"><path d="M2.64 1.27 7.5 6.13l4.84-4.84A.92.92 0 0 1 13 1a1 1 0 0 1 1 1 .9.9 0 0 1-.27.66L8.84 7.5l4.89 4.89A.9.9 0 0 1 14 13a1 1 0 0 1-1 1 .92.92 0 0 1-.69-.27L7.5 8.87l-4.85 4.85A.92.92 0 0 1 2 14a1 1 0 0 1-1-1 .9.9 0 0 1 .27-.66L6.16 7.5 1.27 2.61A.9.9 0 0 1 1 2a1 1 0 0 1 1-1c.24.003.47.1.64.27z"></path></svg>
			</div>
			<div class="categoryItemsParent">
					<svg width="20" height="20" viewBox="0 0 0.6 0.6" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0.6 0v0.6H0V0zM0.315 0.581l0 0 -0.002 0.001 -0.001 0 0 0 -0.002 -0.001q0 0 -0.001 0l0 0 0 0.011 0 0.001 0 0 0.003 0.002 0 0 0 0 0.003 -0.002 0 0 0 0 0 -0.011q0 0 0 0m0.007 -0.003 0 0 -0.005 0.002 0 0 0 0 0 0.011 0 0 0 0 0.005 0.002q0 0 0.001 0l0 0 -0.001 -0.015q0 0 -0.001 -0.001m-0.018 0a0.001 0.001 0 0 0 -0.001 0l0 0 -0.001 0.015q0 0 0 0.001l0 0 0.005 -0.002 0 0 0 0 0 -0.011 0 0 0 0z"/><path d="M0.5 0.075a0.05 0.05 0 0 1 0.05 0.046L0.55 0.125v0.35a0.05 0.05 0 0 1 -0.046 0.05L0.5 0.525H0.1a0.05 0.05 0 0 1 -0.05 -0.046L0.05 0.475V0.125a0.05 0.05 0 0 1 0.046 -0.05L0.1 0.075zm0 0.05H0.1v0.35h0.4zm-0.242 0.066 0.013 0.006 0.008 0.004 0.01 0.005 0.011 0.005 0.012 0.006 0.013 0.007 0.007 0.004 0.013 0.008 0.012 0.007 0.011 0.007 0.01 0.006 0.012 0.008 0.009 0.007 0.002 0.002a0.031 0.031 0 0 1 0 0.05l-0.008 0.006 -0.011 0.008 -0.009 0.006 -0.01 0.007 -0.011 0.007 -0.012 0.007 -0.013 0.008 -0.013 0.007 -0.012 0.006 -0.011 0.006 -0.01 0.005 -0.016 0.007 -0.006 0.003a0.031 0.031 0 0 1 -0.043 -0.025l-0.001 -0.014 -0.001 -0.009 -0.001 -0.017 -0.001 -0.013 0 -0.014 0 -0.007 0 -0.008q0 -0.008 0 -0.015l0 -0.014 0.001 -0.013 0.001 -0.011 0.001 -0.01 0.002 -0.019a0.031 0.031 0 0 1 0.043 -0.025m0.015 0.063 -0.011 -0.005 -0.001 0.012 -0.001 0.014 0 0.015 0 0.008 0 0.008 0 0.015 0 0.007 0.001 0.013 0 0.006 0.011 -0.005 0.012 -0.006 0.013 -0.007 0.007 -0.004 0.014 -0.008 0.012 -0.008 0.011 -0.007 0.005 -0.003 -0.01 -0.007 -0.012 -0.007a0.75 0.75 0 0 0 -0.02 -0.012l-0.007 -0.004 -0.013 -0.007z" fill="#187dbb"/></g></svg>
					<a class="categoryItem" href="https://karenmed.ir/video">همه ویدیو ها</a>
			</div>
			<?php
			$categories = get_terms( array(
				'taxonomy' => 'video-cat',
				'hide_empty' => true,
				'exclude'=>array('1')
			) );
			foreach($categories as $category) {
			echo '<div class="categoryItemsParent">';
			echo get_field('category_mb_icon_svg','product_cat_'.$category->term_id);
			echo '<a class="categoryItem" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
			echo '</div>';
			}
			?>
		</div>
		<div class="archiveVideoPageParent highMargined">
			<div class="categorySecParent lowRadius">
				<h3>دسته بندی ها</h3>
				<div class="categoryItemsParent">
					<svg width="20" height="20" viewBox="0 0 0.6 0.6" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0.6 0v0.6H0V0zM0.315 0.581l0 0 -0.002 0.001 -0.001 0 0 0 -0.002 -0.001q0 0 -0.001 0l0 0 0 0.011 0 0.001 0 0 0.003 0.002 0 0 0 0 0.003 -0.002 0 0 0 0 0 -0.011q0 0 0 0m0.007 -0.003 0 0 -0.005 0.002 0 0 0 0 0 0.011 0 0 0 0 0.005 0.002q0 0 0.001 0l0 0 -0.001 -0.015q0 0 -0.001 -0.001m-0.018 0a0.001 0.001 0 0 0 -0.001 0l0 0 -0.001 0.015q0 0 0 0.001l0 0 0.005 -0.002 0 0 0 0 0 -0.011 0 0 0 0z"/><path d="M0.5 0.075a0.05 0.05 0 0 1 0.05 0.046L0.55 0.125v0.35a0.05 0.05 0 0 1 -0.046 0.05L0.5 0.525H0.1a0.05 0.05 0 0 1 -0.05 -0.046L0.05 0.475V0.125a0.05 0.05 0 0 1 0.046 -0.05L0.1 0.075zm0 0.05H0.1v0.35h0.4zm-0.242 0.066 0.013 0.006 0.008 0.004 0.01 0.005 0.011 0.005 0.012 0.006 0.013 0.007 0.007 0.004 0.013 0.008 0.012 0.007 0.011 0.007 0.01 0.006 0.012 0.008 0.009 0.007 0.002 0.002a0.031 0.031 0 0 1 0 0.05l-0.008 0.006 -0.011 0.008 -0.009 0.006 -0.01 0.007 -0.011 0.007 -0.012 0.007 -0.013 0.008 -0.013 0.007 -0.012 0.006 -0.011 0.006 -0.01 0.005 -0.016 0.007 -0.006 0.003a0.031 0.031 0 0 1 -0.043 -0.025l-0.001 -0.014 -0.001 -0.009 -0.001 -0.017 -0.001 -0.013 0 -0.014 0 -0.007 0 -0.008q0 -0.008 0 -0.015l0 -0.014 0.001 -0.013 0.001 -0.011 0.001 -0.01 0.002 -0.019a0.031 0.031 0 0 1 0.043 -0.025m0.015 0.063 -0.011 -0.005 -0.001 0.012 -0.001 0.014 0 0.015 0 0.008 0 0.008 0 0.015 0 0.007 0.001 0.013 0 0.006 0.011 -0.005 0.012 -0.006 0.013 -0.007 0.007 -0.004 0.014 -0.008 0.012 -0.008 0.011 -0.007 0.005 -0.003 -0.01 -0.007 -0.012 -0.007a0.75 0.75 0 0 0 -0.02 -0.012l-0.007 -0.004 -0.013 -0.007z" fill="#187dbb"/></g></svg>
					<a class="categoryItem" href="https://karenmed.ir/video">همه ویدیو ها</a>
				</div>
				<?php
				$categories = get_terms( array(
					'taxonomy' => 'video-cat',
					'hide_empty' => true,
					'exclude'=>array('1')
				) );
				foreach($categories as $category) {
				echo '<div class="categoryItemsParent">';
				echo get_field('category_mb_icon_svg','product_cat_'.$category->term_id);
				echo '<a class="categoryItem" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
				echo '</div>';
				}
				?>
			</div>
			<div class="archiveVideoParent">
				<?php if ( have_posts() ) : ?>
					<!-- <header class="page-header"> -->
						<?php
						// the_archive_title( '<h1 class="page-title">', '</h1>' );
						// the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					<!-- </header>.page-header -->
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', 'videos' );
						endwhile;
						// the_posts_navigation();
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
			</div>
		</div>
		<div class="archivePagination">
			<?php pagination_bar(); ?>
		</div>
</main><!-- #main -->
<?php
get_footer();
?>