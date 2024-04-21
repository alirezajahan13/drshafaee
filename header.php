<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drshafaee
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="google-site-verification" content="nSx1R29rPzwy9f-LT1IprIkH8XNINF0R1VtQx_QOcIc" />

	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-03HGVBZ88N"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-03HGVBZ88N');
</script>
	<?php wp_head(); ?>
</head>
<div class="mainSiteOverlay"></div>
<div class="mobileMenyParent gradient3">
	<div class="mobileMenuHeader mediumPadding mediumMargined">
		<a href="#" class="mobileMenuClose">
			<svg width="20" height="20" viewBox="4 4 16 16" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.293 5.293a1 1 0 0 1 1.414 0L12 10.586l5.293-5.293a1 1 0 1 1 1.414 1.414L13.414 12l5.293 5.293a1 1 0 0 1-1.414 1.414L12 13.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L10.586 12 5.293 6.707a1 1 0 0 1 0-1.414Z"/></svg>
		</a>
	</div>
	<?php wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'container_class'=>'mobileMenu'
			)
		);
	?>
</div>
<div class="searchContainer highRadius mediumPadding mediumMargined">
    <form action="/" method="get">
        <button class="searchSubmitBtn" type="submit"><svg stroke="#777" width="25px" height="25px" xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><circle cx="11.854" cy="11.854" r="9" fill="none" stroke-miterlimit="10" stroke-width="2"/><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M18.451 18.451l7.695 7.695"/></svg></button>
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="دنبال چه می‌گردید؟" />
		<div class="searchButtonContainer">
			<button  type="submit" class="generalButton" fdprocessedid="x887ac">جستجو</button>
			<a class="generalButton outlineButton noArrowButton closeSearchBtn">بستن</a>
		</div>
    </form>

</div>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="mainHeaderBack">
		<div class="mainHeader mainView">
			<a href="https://www.drshafaee.com" class="logoSection">
			<?php require 'svg/logosvg.php'; ?>
			</a>
			<div class="menuSection">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container_class'=>'mainMenu'
						)
					);
				?>
			</div>
			<div class="headericons">
				<a class="mobileMenuSection">
					<svg width="20" height="20" stroke="#28416e" stroke-width="2.2" stroke-linecap="round" viewBox="2 10 20 3" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
				</a>
				<a class="searchIcon"><svg viewBox="0 0 512 512"><path d="M405.1 80.9c-89.4-89.4-234.8-89.4-324.2 0s-89.4 234.8 0 324.2c82.7 82.7 213.2 88.9 303.1 18.7l66.1 66.1a28.1 28.1 0 0 0 39.8-39.8L423.8 384c70.2-89.9 64-220.4-18.7-303.1Zm-39.8 284.4c-67.4 67.5-177.2 67.5-244.6 0s-67.5-177.2 0-244.6 177.2-67.5 244.6 0 67.5 177.2 0 244.6Z"/></svg></a>
				<!-- <form action="/" method="get">
					<input placeholder="جست‌وجو در وبسایت..." type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
					<button><svg viewBox="0 0 512 512"><path d="M405.1 80.9c-89.4-89.4-234.8-89.4-324.2 0s-89.4 234.8 0 324.2c82.7 82.7 213.2 88.9 303.1 18.7l66.1 66.1a28.1 28.1 0 0 0 39.8-39.8L423.8 384c70.2-89.9 64-220.4-18.7-303.1Zm-39.8 284.4c-67.4 67.5-177.2 67.5-244.6 0s-67.5-177.2 0-244.6 177.2-67.5 244.6 0 67.5 177.2 0 244.6Z"/></svg></button>
				</form> -->
			</div>
			<a class="generalButton outlineButton CounselingBtn" href="https://www.drshafaee.com/book-appointment/">رزرو نوبت</a>
		</div>
	</div>




	<div class="stickyHeaderParent">
		<div class="mainHeaderBack">
			<div class="mainHeader mainView">
				<a href="https://www.drshafaee.com" class="logoSection">
					<?php require 'svg/logosvg.php'; ?>
				</a>
				<div class="menuSection">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'container_class'=>'mainMenu'
							)
						);
					?>
				</div>
				<div class="headericons">
					<a href="#" class="mobileMenuSection">
						<svg width="20" height="20" stroke="#28416e" stroke-width="2.2" stroke-linecap="round" viewBox="2 10 20 3" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
					</a>
					<a href="#" class="searchIcon"><svg viewBox="0 0 512 512"><path d="M405.1 80.9c-89.4-89.4-234.8-89.4-324.2 0s-89.4 234.8 0 324.2c82.7 82.7 213.2 88.9 303.1 18.7l66.1 66.1a28.1 28.1 0 0 0 39.8-39.8L423.8 384c70.2-89.9 64-220.4-18.7-303.1Zm-39.8 284.4c-67.4 67.5-177.2 67.5-244.6 0s-67.5-177.2 0-244.6 177.2-67.5 244.6 0 67.5 177.2 0 244.6Z"/></svg></a>
					<!-- <form action="/" method="get">
						<input placeholder="جست‌وجو در وبسایت..." type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
						<button><svg viewBox="0 0 512 512"><path d="M405.1 80.9c-89.4-89.4-234.8-89.4-324.2 0s-89.4 234.8 0 324.2c82.7 82.7 213.2 88.9 303.1 18.7l66.1 66.1a28.1 28.1 0 0 0 39.8-39.8L423.8 384c70.2-89.9 64-220.4-18.7-303.1Zm-39.8 284.4c-67.4 67.5-177.2 67.5-244.6 0s-67.5-177.2 0-244.6 177.2-67.5 244.6 0 67.5 177.2 0 244.6Z"/></svg></button>
					</form> -->
				</div>
				<a class="generalButton outlineButton CounselingBtn" href="https://www.drshafaee.com/book-appointment/">رزرو نوبت</a>
			</div>
		</div>
	</div>
	<div class="stickyPhoneIcon">
		<a href="tel://09927270343" class="phoneNumberSticky">
			<span class="textAnimation">رزرو نوبت</span>
			<svg class="svgAnimation" width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 287.32 287.32" style="enable-background:new 0 0 287.32 287.32" xml:space="preserve"><path d="M267.749 191.076c-14.595-11.729-27.983-17.431-40.93-17.431-18.729 0-32.214 11.914-44.423 24.119-1.404 1.405-3.104 2.06-5.349 2.06-10.288.001-28.387-12.883-53.794-38.293-29.89-29.892-41.191-48.904-33.592-56.506 20.6-20.593 27.031-41.237-4.509-80.462C73.861 10.51 62.814 3.68 51.38 3.68c-15.42 0-27.142 12.326-37.484 23.202-1.788 1.88-3.477 3.656-5.133 5.312-11.689 11.688-11.683 37.182.017 68.2 12.837 34.033 38.183 71.055 71.37 104.247 25.665 25.663 53.59 46.403 80.758 60.328 23.719 12.158 46.726 18.672 64.783 18.672h.007c11.3 0 20.479-2.465 26.541-7.478 12.314-10.181 35.234-29.039 35.081-51.439-.084-12.014-6.667-23.273-19.571-33.648z"></path></svg>
		</a>
	</div>
	
	