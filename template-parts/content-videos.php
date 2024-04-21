<a href="<?php echo get_the_permalink()?>" id="post-<?php the_ID()?>"  class="videoArchiveBoxContainer lowRadius lightBorder">
    <span class="iconPlayBack">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="22" height="22"><path d="M7 6.134v11.732c0 .895 1.03 1.438 1.822.951l9.628-5.866c.733-.441.733-1.46 0-1.914L8.822 5.183C8.029 4.696 7 5.239 7 6.134" fill="#FBFBFC"/></svg>
    </span>
    <div class="videoArchiveImg"><?php the_post_thumbnail();?></div>
    <h4 class="videoArchiveTitle"><?php echo get_the_title();?></h4>
    <div class="videoCard">
        <div class="categoryPostParent">
            <?php
                $categories = get_the_terms(get_the_ID(), 'video-cat');
                if ($categories && !is_wp_error($categories)) {
                    $primary_category_id = yoast_get_primary_term_id('video-cat', get_the_ID());
                    if ($primary_category_id) {
                        $primary_category = get_term($primary_category_id, 'video-cat');
                        echo '<span class="categoryItem gradient3" href="' . esc_url(get_term_link($primary_category->term_id, 'video-cat')) . '">' . esc_html($primary_category->name) . '</span>';
                    } elseif (count($categories) > 0) {
                        $first_category = reset($categories);
                        echo '<span class="categoryItem gradient3" href="' . esc_url(get_term_link($first_category->term_id, 'video-cat')) . '">' . esc_html($first_category->name) . '</span>';
                    }
                }
            ?>
        </div>
        <div class="numViewCount">
            <span><?php display_post_views(); ?></span>
            <span>بازدید</span>
        </div>
    </div>
</a>