<?php
function show_portfolio() {
//   $filterData = $_POST['filterData'];
    $requestData = $_POST['requestData'];
    ob_start();
    $getGalleryArgs = array(
    'post_type'=>'portfolio',
    'posts_per_page'=>-1,
    );
    $getGalleryQuery = new WP_Query($getGalleryArgs);
    while($getGalleryQuery->have_posts()): $getGalleryQuery->the_post();

        get_template_part('template-parts/content', 'gallery');

    endwhile;
    wp_reset_postdata();
//   echo '<div>some test</div>';
  /*
  $testtest =  array(
    'relation' => 'AND',
     array(
       'taxonomy' => 'image_tag',
       'field'    => 'term_id',
       'terms'    => 25,
       'operator' => 'IN',
     ),
     array(
       'taxonomy' => 'image_tag',
       'field'    => 'term_id',
       'terms'    => array(42,25),
       'operator' => 'IN',
     )
    );
  $taxArray = array(
    'relation' => 'AND',
  );
  foreach($filterData as $key1=>$val1){
    if($key1!='corp_page'){
      $taxArray[]=array(
        'taxonomy'=>$key1,
        'field'=>'term_id',
        'operator'=>'IN',
        'terms'=>$val1
      );
    }
    
  }
  if(!isset($filterData['corp_service']) && !isset($filterData['corp_origin']) && !isset($filterData['corp_destination']) && !isset($filterData['corp_location'])){
    $taxArray = array();
  }
  $ajaxCorpsArgs = array(
    'search_tax_query' => true,
    'post_type'=>'corp',
    'posts_per_page'=>12,
    's'=>$filterData['corp_search'][0],
    'paged'=>$filterData['corp_page'][0],
    'tax_query' => $taxArray,
    'meta_key' => 'corp_custom_mb_rating_stars',
    'orderby' => array(
      'meta_value_num'=>'DESC',
      'modified'=>'DESC'
    ),
		// 'orderby' => 'meta_val_num',
		// 'order' => 'ASC',
    'meta_query'=>array(
      array(
        'key'=>'corp_custom_mb_active_status',
        'value'=>'1',
      ),
    ),
  );
  $ajaxCorpsPosts = new WP_Query($ajaxCorpsArgs);
  // class WP_Query_Taxonomy_Search {
  //   public function __construct() {
  //       add_action( 'pre_get_posts', array( $this, 'pre_get_posts' ) );
  //   }
  
  //   public function pre_get_posts( $q ) {
  //       if ( is_admin() ) return;
  
  //       $wp_query_search_tax_query = filter_var( 
  //           $q->get( 'search_tax_query' ), 
  //           FILTER_VALIDATE_BOOLEAN 
  //       );
  
  //       // WP_Query has 'tax_query', 's' and custom 'search_tax_query' argument passed
  //       if ( $wp_query_search_tax_query && $q->get( 'tax_query' ) && $q->get( 's' ) ) {
  //           add_filter( 'posts_groupby', array( $this, 'posts_groupby' ), 10, 1 );
  //       }
  //   }
  
  //   public function posts_groupby( $groupby ) {
  //       return '';
  //   }
  // }
  // new WP_Query_Taxonomy_Search();
  if($ajaxCorpsPosts->have_posts()){
    while($ajaxCorpsPosts->have_posts()): $ajaxCorpsPosts->the_post();
      get_template_part('template-parts/content','corps');
    endwhile;
    wp_reset_postdata();
    ?>
    <?php if(!isset($filterData['corp_page'][0])){ $filterData['corp_page'][0]=1; } ?>
    <div class="archivePaginationParent">
      <div class="pageIndicator">صفحه <span class="currentCorpPage"></span> از <?php echo $ajaxCorpsPosts->max_num_pages ?></div>
      <div class="archivePagination">
        <?php 
          $loopTwice = false;
          if($ajaxCorpsPosts->max_num_pages>5){
            $loopTwice = true;
            $loopDots = 'left';
            if($filterData['corp_page'][0]>3 && $filterData['corp_page'][0]<=$ajaxCorpsPosts->max_num_pages-3){
              $loopDots = 'both';
            }
            elseif($filterData['corp_page'][0]>3 && $filterData['corp_page'][0]>$ajaxCorpsPosts->max_num_pages-3){
              $loopDots = 'right';
            }
          }
        ?>
        <?php
        if($loopTwice==true){
          if($loopDots == 'left'){
            for($i=1;$i<=4;$i++){
              if($filterData['corp_page'][0]>1 && $i==1){
                echo '<a class="prev page-numbers" href=""><span class="rightArrow"></span></a>';
              }
              if($i == $filterData['corp_page'][0]){
                echo '<a data-page="'.$i.'" class="current page-numerals page-numbers" href="">'.$i.'</a>';
              }
              else{
                echo '<a data-page="'.$i.'" class="page-numerals page-numbers" href="">'.$i.'</a>';
              }
              // if($i==$ajaxCorpsPosts->max_num_pages && $filterData['corp_page'][0]!=$ajaxCorpsPosts->max_num_pages){
              //   echo '<a class="next page-numbers" href=""><span class="leftArrow"></span></a>';
              // }
            }
            echo '<a class="page-numerals page-numbers">...</a>';
            echo '<a data-page="'.$ajaxCorpsPosts->max_num_pages.'" class="page-numerals page-numbers" href="">'.$ajaxCorpsPosts->max_num_pages.'</a>';
            echo '<a class="next page-numbers" href=""><span class="leftArrow"></span></a>';
          }
          elseif($loopDots == 'right'){
            echo '<a class="prev page-numbers" href=""><span class="rightArrow"></span></a>';
            echo '<a data-page="1" class="page-numerals page-numbers" href="">1</a>';
            echo '<a class="page-numerals page-numbers">...</a>';
            for($i=$ajaxCorpsPosts->max_num_pages-3;$i<=$ajaxCorpsPosts->max_num_pages;$i++){
              // if($filterData['corp_page'][0]>1 && $i==1){
              //   echo '<a class="prev page-numbers" href=""><span class="rightArrow"></span></a>';
              // }
              if($i == $filterData['corp_page'][0]){
                echo '<a data-page="'.$i.'" class="current page-numerals page-numbers" href="">'.$i.'</a>';
              }
              else{
                echo '<a data-page="'.$i.'" class="page-numerals page-numbers" href="">'.$i.'</a>';
              }
              if($i==$ajaxCorpsPosts->max_num_pages && $filterData['corp_page'][0]!=$ajaxCorpsPosts->max_num_pages){
                echo '<a class="next page-numbers" href=""><span class="leftArrow"></span></a>';
              }
            }
            
          }
          elseif($loopDots == 'both'){
            echo '<a class="prev page-numbers" href=""><span class="rightArrow"></span></a>';
            echo '<a data-page="1" class="page-numerals page-numbers" href="">1</a>';
            echo '<a class="page-numerals page-numbers">...</a>';
            for($i=$filterData['corp_page'][0]-1;$i<=$filterData['corp_page'][0]+1;$i++){
              // if($filterData['corp_page'][0]>1 && $i==1){
              //   echo '<a class="prev page-numbers" href=""><span class="rightArrow"></span></a>';
              // }
              if($i == $filterData['corp_page'][0]){
                echo '<a data-page="'.$i.'" class="current page-numerals page-numbers" href="">'.$i.'</a>';
              }
              else{
                echo '<a data-page="'.$i.'" class="page-numerals page-numbers" href="">'.$i.'</a>';
              }
              // if($i==$ajaxCorpsPosts->max_num_pages && $filterData['corp_page'][0]!=$ajaxCorpsPosts->max_num_pages){
              //   echo '<a class="next page-numbers" href=""><span class="leftArrow"></span></a>';
              // }
            }
            echo '<a class="page-numerals page-numbers">...</a>';
            echo '<a data-page="'.$ajaxCorpsPosts->max_num_pages.'" class="page-numerals page-numbers" href="">'.$ajaxCorpsPosts->max_num_pages.'</a>';
            echo '<a class="next page-numbers" href=""><span class="leftArrow"></span></a>';
          }
        }
        else{
          for($i=1;$i<=$ajaxCorpsPosts->max_num_pages;$i++){
            if($filterData['corp_page'][0]>1 && $i==1){
              echo '<a class="prev page-numbers" href=""><span class="rightArrow"></span></a>';
            }
            if($i == $filterData['corp_page'][0]){
              echo '<a data-page="'.$i.'" class="current page-numerals page-numbers" href="">'.$i.'</a>';
            }
            else{
              echo '<a data-page="'.$i.'" class="page-numerals page-numbers" href="">'.$i.'</a>';
            }
            if($i==$ajaxCorpsPosts->max_num_pages && $filterData['corp_page'][0]!=$ajaxCorpsPosts->max_num_pages){
              echo '<a class="next page-numbers" href=""><span class="leftArrow"></span></a>';
            }
          }
        }
        
        ?>
      </div>
		</div>
    <?php
  }
  else{
    echo '<div class="corpNotFound"><h3>نتیجه‌ای یافت نشد</h3><p>متاسفانه نتیجه‌ای مطابق با فیلترهای اعمال شده یافت نشد. لطفا گزینه‌های دیگری را امتحان کنید</p></div>';
  }
  // echo '<pre>';
  // print_r($taxArray);
  // echo '</pre>';
  // echo '<pre>';
  // print_r($testtest);
  // echo '</pre>';
  */
  $data = ob_get_clean();
  echo $data;
  wp_die();
}
add_action('wp_ajax_show_portfolio', 'show_portfolio');
add_action('wp_ajax_nopriv_show_portfolio', 'show_portfolio');




function show_portfolio_items() {
//   $filterData = $_POST['filterData'];
    $requestData = $_POST['requestData'];
    // ob_start();
    // $theGalleryItems = get_field('drs_custom_mb_gallery_items' , $requestData);
    return $requestData->selected;
    // foreach($theGalleryItems as $gItems){
    //     echo '<a href="'.$gItems['url'].'"><img src="'.$gItems['url'].'" alt=""></a>';
    // }
//   echo '<div>some test</div>';
  /*
  $testtest =  array(
    'relation' => 'AND',
     array(
       'taxonomy' => 'image_tag',
       'field'    => 'term_id',
       'terms'    => 25,
       'operator' => 'IN',
     ),
     array(
       'taxonomy' => 'image_tag',
       'field'    => 'term_id',
       'terms'    => array(42,25),
       'operator' => 'IN',
     )
    );
  $taxArray = array(
    'relation' => 'AND',
  );
  foreach($filterData as $key1=>$val1){
    if($key1!='corp_page'){
      $taxArray[]=array(
        'taxonomy'=>$key1,
        'field'=>'term_id',
        'operator'=>'IN',
        'terms'=>$val1
      );
    }
    
  }
  if(!isset($filterData['corp_service']) && !isset($filterData['corp_origin']) && !isset($filterData['corp_destination']) && !isset($filterData['corp_location'])){
    $taxArray = array();
  }
  $ajaxCorpsArgs = array(
    'search_tax_query' => true,
    'post_type'=>'corp',
    'posts_per_page'=>12,
    's'=>$filterData['corp_search'][0],
    'paged'=>$filterData['corp_page'][0],
    'tax_query' => $taxArray,
    'meta_key' => 'corp_custom_mb_rating_stars',
    'orderby' => array(
      'meta_value_num'=>'DESC',
      'modified'=>'DESC'
    ),
		// 'orderby' => 'meta_val_num',
		// 'order' => 'ASC',
    'meta_query'=>array(
      array(
        'key'=>'corp_custom_mb_active_status',
        'value'=>'1',
      ),
    ),
  );
  $ajaxCorpsPosts = new WP_Query($ajaxCorpsArgs);
  // class WP_Query_Taxonomy_Search {
  //   public function __construct() {
  //       add_action( 'pre_get_posts', array( $this, 'pre_get_posts' ) );
  //   }
  
  //   public function pre_get_posts( $q ) {
  //       if ( is_admin() ) return;
  
  //       $wp_query_search_tax_query = filter_var( 
  //           $q->get( 'search_tax_query' ), 
  //           FILTER_VALIDATE_BOOLEAN 
  //       );
  
  //       // WP_Query has 'tax_query', 's' and custom 'search_tax_query' argument passed
  //       if ( $wp_query_search_tax_query && $q->get( 'tax_query' ) && $q->get( 's' ) ) {
  //           add_filter( 'posts_groupby', array( $this, 'posts_groupby' ), 10, 1 );
  //       }
  //   }
  
  //   public function posts_groupby( $groupby ) {
  //       return '';
  //   }
  // }
  // new WP_Query_Taxonomy_Search();
  if($ajaxCorpsPosts->have_posts()){
    while($ajaxCorpsPosts->have_posts()): $ajaxCorpsPosts->the_post();
      get_template_part('template-parts/content','corps');
    endwhile;
    wp_reset_postdata();
    ?>
    <?php if(!isset($filterData['corp_page'][0])){ $filterData['corp_page'][0]=1; } ?>
    <div class="archivePaginationParent">
      <div class="pageIndicator">صفحه <span class="currentCorpPage"></span> از <?php echo $ajaxCorpsPosts->max_num_pages ?></div>
      <div class="archivePagination">
        <?php 
          $loopTwice = false;
          if($ajaxCorpsPosts->max_num_pages>5){
            $loopTwice = true;
            $loopDots = 'left';
            if($filterData['corp_page'][0]>3 && $filterData['corp_page'][0]<=$ajaxCorpsPosts->max_num_pages-3){
              $loopDots = 'both';
            }
            elseif($filterData['corp_page'][0]>3 && $filterData['corp_page'][0]>$ajaxCorpsPosts->max_num_pages-3){
              $loopDots = 'right';
            }
          }
        ?>
        <?php
        if($loopTwice==true){
          if($loopDots == 'left'){
            for($i=1;$i<=4;$i++){
              if($filterData['corp_page'][0]>1 && $i==1){
                echo '<a class="prev page-numbers" href=""><span class="rightArrow"></span></a>';
              }
              if($i == $filterData['corp_page'][0]){
                echo '<a data-page="'.$i.'" class="current page-numerals page-numbers" href="">'.$i.'</a>';
              }
              else{
                echo '<a data-page="'.$i.'" class="page-numerals page-numbers" href="">'.$i.'</a>';
              }
              // if($i==$ajaxCorpsPosts->max_num_pages && $filterData['corp_page'][0]!=$ajaxCorpsPosts->max_num_pages){
              //   echo '<a class="next page-numbers" href=""><span class="leftArrow"></span></a>';
              // }
            }
            echo '<a class="page-numerals page-numbers">...</a>';
            echo '<a data-page="'.$ajaxCorpsPosts->max_num_pages.'" class="page-numerals page-numbers" href="">'.$ajaxCorpsPosts->max_num_pages.'</a>';
            echo '<a class="next page-numbers" href=""><span class="leftArrow"></span></a>';
          }
          elseif($loopDots == 'right'){
            echo '<a class="prev page-numbers" href=""><span class="rightArrow"></span></a>';
            echo '<a data-page="1" class="page-numerals page-numbers" href="">1</a>';
            echo '<a class="page-numerals page-numbers">...</a>';
            for($i=$ajaxCorpsPosts->max_num_pages-3;$i<=$ajaxCorpsPosts->max_num_pages;$i++){
              // if($filterData['corp_page'][0]>1 && $i==1){
              //   echo '<a class="prev page-numbers" href=""><span class="rightArrow"></span></a>';
              // }
              if($i == $filterData['corp_page'][0]){
                echo '<a data-page="'.$i.'" class="current page-numerals page-numbers" href="">'.$i.'</a>';
              }
              else{
                echo '<a data-page="'.$i.'" class="page-numerals page-numbers" href="">'.$i.'</a>';
              }
              if($i==$ajaxCorpsPosts->max_num_pages && $filterData['corp_page'][0]!=$ajaxCorpsPosts->max_num_pages){
                echo '<a class="next page-numbers" href=""><span class="leftArrow"></span></a>';
              }
            }
            
          }
          elseif($loopDots == 'both'){
            echo '<a class="prev page-numbers" href=""><span class="rightArrow"></span></a>';
            echo '<a data-page="1" class="page-numerals page-numbers" href="">1</a>';
            echo '<a class="page-numerals page-numbers">...</a>';
            for($i=$filterData['corp_page'][0]-1;$i<=$filterData['corp_page'][0]+1;$i++){
              // if($filterData['corp_page'][0]>1 && $i==1){
              //   echo '<a class="prev page-numbers" href=""><span class="rightArrow"></span></a>';
              // }
              if($i == $filterData['corp_page'][0]){
                echo '<a data-page="'.$i.'" class="current page-numerals page-numbers" href="">'.$i.'</a>';
              }
              else{
                echo '<a data-page="'.$i.'" class="page-numerals page-numbers" href="">'.$i.'</a>';
              }
              // if($i==$ajaxCorpsPosts->max_num_pages && $filterData['corp_page'][0]!=$ajaxCorpsPosts->max_num_pages){
              //   echo '<a class="next page-numbers" href=""><span class="leftArrow"></span></a>';
              // }
            }
            echo '<a class="page-numerals page-numbers">...</a>';
            echo '<a data-page="'.$ajaxCorpsPosts->max_num_pages.'" class="page-numerals page-numbers" href="">'.$ajaxCorpsPosts->max_num_pages.'</a>';
            echo '<a class="next page-numbers" href=""><span class="leftArrow"></span></a>';
          }
        }
        else{
          for($i=1;$i<=$ajaxCorpsPosts->max_num_pages;$i++){
            if($filterData['corp_page'][0]>1 && $i==1){
              echo '<a class="prev page-numbers" href=""><span class="rightArrow"></span></a>';
            }
            if($i == $filterData['corp_page'][0]){
              echo '<a data-page="'.$i.'" class="current page-numerals page-numbers" href="">'.$i.'</a>';
            }
            else{
              echo '<a data-page="'.$i.'" class="page-numerals page-numbers" href="">'.$i.'</a>';
            }
            if($i==$ajaxCorpsPosts->max_num_pages && $filterData['corp_page'][0]!=$ajaxCorpsPosts->max_num_pages){
              echo '<a class="next page-numbers" href=""><span class="leftArrow"></span></a>';
            }
          }
        }
        
        ?>
      </div>
		</div>
    <?php
  }
  else{
    echo '<div class="corpNotFound"><h3>نتیجه‌ای یافت نشد</h3><p>متاسفانه نتیجه‌ای مطابق با فیلترهای اعمال شده یافت نشد. لطفا گزینه‌های دیگری را امتحان کنید</p></div>';
  }
  // echo '<pre>';
  // print_r($taxArray);
  // echo '</pre>';
  // echo '<pre>';
  // print_r($testtest);
  // echo '</pre>';
  */
//   $data = ob_get_clean();
//   echo $data;
//   wp_die();
}
add_action('wp_ajax_show_portfolio_items', 'show_portfolio_items');
add_action('wp_ajax_nopriv_show_portfolio_items', 'show_portfolio_items');