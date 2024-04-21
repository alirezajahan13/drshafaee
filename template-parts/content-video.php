<div class="singleVideoPageParent generalSinglePostStyle singleBox lightBorder highRadius mediumPadding mediumMargined">
    <h1><?php echo get_the_title();?></h1>
    <div class="videoSingle">
        <div class="introSectionImg"> 
            <?php echo get_field('single_video') ?>
        </div>			
	</div>
    <div class="singleVideoDetail">
        <div class="categoryPostParent">
            <?php
                $categories = get_the_terms(get_the_ID(), 'video-cat');
                if ($categories && !is_wp_error($categories)) {
                    foreach ($categories as $category) {
                        echo '<a class="categoryItem gradient3" href="' . esc_url(get_term_link($category->term_id, 'video-cat')) . '"> ' . esc_html($category->name) . '</a>';
                    }
                }
            ?>
        </div>
        <div class="numViewCount">
            <span class="lighterText"><?php display_post_views(); ?></span>
            <span class="lighterText">بازدید</span>
        </div>
    </div>
    <p><?php echo get_field('single_text') ?></p>
</div>
    