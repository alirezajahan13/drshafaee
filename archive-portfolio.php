<?php
get_header();
$portfolioCatTerms = get_terms(array(
    'taxonomy' => 'portfolio-cat',
    'hide_empty' => false,
));
?>
<div class="generalHeading bigHeading highMargined centeredText">
    <h1>نمونه‌کارها</h1>
    <span>نمونه عمل‌های زیبایی، پلاستیک و ترمیمی انجام شده توسط دکتر شفائی</span>
</div>
<div class="portfolioSectionBack">
    <div class="portfolioSection mainView">
        <div class="hashtagParent highMargined">
            <?php foreach($portfolioCatTerms as $term){ ?>
                <div data-termid="<?php echo $term->term_id; ?>" class="hashtagItem"><?php echo $term->name; ?></div>
                <!-- <div class="hashtagItem">جراحی بینی</div>
                <div class="hashtagItem">جراحی بینی</div>
                <div class="hashtagItem">جراحی بینی</div>
                <div class="hashtagItem">جراحی بینی</div>
                <div class="hashtagItem">جراحی بینی</div>
                <div class="hashtagItem">جراحی بینی</div> -->
            <?php } ?>
        </div>
        <div class="portfolioItemParent">
            <?php /*
            <div class="portfolioItem lowRadius">
                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.jpg" alt="">
                <div class="portfolioItemInfo">5 تصویر</div>
            </div>
            <div class="portfolioItem lowRadius">
                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.jpg" alt="">
                <div class="portfolioItemInfo">5 تصویر</div>
            </div>
            <div class="portfolioItem lowRadius">
                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.jpg" alt="">
                <div class="portfolioItemInfo">5 تصویر</div>
            </div>
            <div class="portfolioItem lowRadius">
                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/4.jpg" alt="">
                <div class="portfolioItemInfo">5 تصویر</div>
            </div>
            */ ?>
        </div>
    </div>
    <div class="lightGalleryItemsLoader" id="lightgallery">
        <?php /*
        <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.jpg" alt=""></a>
        <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.jpg" alt=""></a>
        <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.jpg" alt=""></a>
        <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio/4.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/4.jpg" alt=""></a>
        <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio/5.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/5.jpg" alt=""></a>
        */ ?>
    </div>
</div>





<?php
get_footer();