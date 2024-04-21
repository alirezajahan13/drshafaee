<?php
$theWholeGallery = get_field('drs_custom_mb_gallery_items');
$theFirstImage = $theWholeGallery[0]['photo'];
?>
<div data-gallery="<?php echo get_the_id(); ?>" class="portfolioItem lowRadius">
    <div class="galleryCounter">
        <div><?php echo count($theWholeGallery); ?></div>
        <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M417.2 178.5c0 18.4-15.5 33.2-34.6 33.2s-34.7-14.8-34.7-33.2 15.5-33.2 34.7-33.2 34.6 14.9 34.6 33.2Z"/><path d="M405.4 65.7c-26.3-3.4-59.9-3.4-102.4-3.4h-94.9c-42.5 0-76.1 0-102.4 3.4s-49 10.8-66.3 27.4-24.9 37.6-28.6 63.5-3.5 57.5-3.5 98.2v2.4c0 40.7 0 73 3.5 98.2s11.3 46.9 28.6 63.5 39.2 23.9 66.3 27.4 59.9 3.4 102.4 3.4H303c42.5 0 76.1 0 102.4-3.4s49-10.8 66.3-27.4 24.9-37.6 28.6-63.5 3.5-57.5 3.5-98.2v-2.4c0-40.7 0-73-3.5-98.2s-11.3-46.9-28.6-63.5-39.2-23.9-66.3-27.4ZM110.3 98.6c-23.2 3-36.6 8.6-46.4 18s-15.6 22.2-18.7 44.5c-2.6 17.8-3.1 40.1-3.2 69.3l11.7-9.8c27.9-23.4 69.9-22 96.1 3.1l99.1 95a29.7 29.7 0 0 0 37 3l6.9-4.6c33-22.2 77.7-19.7 107.7 6.2l59.8 51.6a109.1 109.1 0 0 0 5.6-24c3.2-22.7 3.3-52.7 3.3-94.9s-.1-72.2-3.3-94.9-8.9-35.1-18.7-44.5-23.2-15-46.4-18-55-3.1-99.1-3.1h-92.3c-44.1 0-75.4 0-99.1 3.1Z" fill-rule="evenodd"/></svg>
    </div>
    <img src="<?php echo $theFirstImage['url'] ?>" alt="<?php echo $theFirstImage['alt'] ?>">
    <div class="portfolioItemInfo"><?php echo get_the_title(); ?></div>
</div>