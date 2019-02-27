<?php
function scripts(){
	wp_enqueue_style('style', get_stylesheet_uri() );
	wp_enqueue_script('script', get_theme_file_uri('script.js') );
}

add_action('wp_enqueue_scripts', 'scripts');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
  add_theme_support( 'post-thumbnails' );
}
add_action( 'init', 'register_my_menus' );

function bytravel_customize_register( $wp_customize ) {
	
	//start side brand--------------------------------------
	$wp_customize->add_section( 'bytravel_site_brand' , array(
    'title'      => __( 'Site brand', 'bytravel' ),
    'priority'   => 30,
     ) );
     
	$wp_customize->add_setting( 'bytravel_set_site_brand' , array(
	'default'    => '',
	'transport'  => 'refresh'
	) );
	
	$wp_customize->add_control('bytravel_label_site_brand', array(
    	'label'      => __('Site brand:', 'bytravel'),
    	'section'    => 'bytravel_site_brand',
    	'settings'   => 'bytravel_set_site_brand'
	));
	//end site brand----------------------------------------
	//start social------------------------------------------
	$wp_customize->add_section( 'bytravel_social_links' , array(
    'title'      => __( 'Social links', 'bytravel' ),
    'priority'   => 30,
     ) );
     
	$wp_customize->add_setting( 'bytravel_set_fb' , array(
	'default'    => '',
	'transport'  => 'refresh'
	) );
	
	$wp_customize->add_setting( 'bytravel_set_i' , array(
	'default'    => '',
	'transport'  => 'refresh'
	) );
	
	$wp_customize->add_setting( 'bytravel_set_twitter' , array(
	'default'    => '',
	'transport'  => 'refresh'
	) );
	
	$wp_customize->add_setting( 'bytravel_set_google' , array(
	'default'    => '',
	'transport'  => 'refresh'
	) );
	
	$wp_customize->add_setting( 'bytravel_set_youtube' , array(
	'default'    => '',
	'transport'  => 'refresh'
	) );
	
	$wp_customize->add_control('bytravel_label_fb', array(
    	'label'      => __('Facebook link:', 'bytravel'),
    	'section'    => 'bytravel_social_links',
    	'settings'   => 'bytravel_set_fb'
	));
	
	$wp_customize->add_control('bytravel_label_i', array(
    	'label'      => __('Instagram link:', 'bytravel'),
    	'section'    => 'bytravel_social_links',
    	'settings'   => 'bytravel_set_i'
	));
	
	$wp_customize->add_control('bytravel_label_twitter', array(
    	'label'      => __('Twitter link:', 'bytravel'),
    	'section'    => 'bytravel_social_links',
    	'settings'   => 'bytravel_set_twitter'
	));
	
	$wp_customize->add_control('bytravel_label_google', array(
    	'label'      => __('Google+ link:', 'bytravel'),
    	'section'    => 'bytravel_social_links',
    	'settings'   => 'bytravel_set_google'
	));
	
	$wp_customize->add_control('bytravel_label_youtube', array(
    	'label'      => __('Youtube link:', 'bytravel'),
    	'section'    => 'bytravel_social_links',
    	'settings'   => 'bytravel_set_youtube'
	));
	//end social-------------------------------------------
	//start slider-----------------------------------------
	$wp_customize->add_section( 'bytravel_slider', array(
    'title'      => __( 'Slider', 'bytravel' )
     ) );
     
    $wp_customize->add_setting( 'bytravel_set_slider1' , array(
		'default'    => '',
		'transport'  => 'refresh'
	) );
	
	$wp_customize->add_setting( 'bytravel_set_slider2' , array(
		'default'    => '',
		'transport'  => 'refresh'
	) );
	
	$wp_customize->add_setting( 'bytravel_set_slider3' , array(
		'default'    => '',
		'transport'  => 'refresh'
	) );
	
	$wp_customize->add_setting( 'bytravel_set_slider4' , array(
		'default'    => '',
		'transport'  => 'refresh'
	) );
	
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'img1',
           array(
               'label'      => __( 'Upload image 1', 'bytravel' ),
               'section'    => 'bytravel_slider',
               'settings'   => 'bytravel_set_slider1'
           )
       )
   );
   
   $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'img2',
           array(
               'label'      => __( 'Upload image 2', 'bytravel' ),
               'section'    => 'bytravel_slider',
               'settings'   => 'bytravel_set_slider2'
           )
       )
   );
   
   $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'img3',
           array(
               'label'      => __( 'Upload image 3', 'bytravel' ),
               'section'    => 'bytravel_slider',
               'settings'   => 'bytravel_set_slider3'
           )
       )
   );
   
   $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'img4',
           array(
               'label'      => __( 'Upload image 4', 'bytravel' ),
               'section'    => 'bytravel_slider',
               'settings'   => 'bytravel_set_slider4'
           )
       )
   );//end slider------------------------------------------------
   //facebook sidebar--------------------------------------------
   $wp_customize->add_section( 'bytravel_fb_sidebar', array(
    'title'      => __( 'Facebook sidebar', 'bytravel' )
   ) );
   
   $wp_customize->add_setting( 'bytravel_set_fb_sidebar' , array(
	'default'    => '',
	'transport'  => 'refresh'
	) );
	
	$wp_customize->add_control('bytravel_label_fb_aside', array(
    	'label'      => __('Facebook Page link:', 'bytravel'),
    	'section'    => 'bytravel_fb_sidebar',
    	'settings'   => 'bytravel_set_fb_sidebar'
	));
	
	$wp_customize->add_setting( 'bytravel_set_fb_title' , array(
	'default'    => '',
	'transport'  => 'refresh'
	) );
	
	$wp_customize->add_control('bytravel_label_fb_title', array(
    	'label'      => __('Facebook Page title:', 'bytravel'),
    	'section'    => 'bytravel_fb_sidebar',
    	'settings'   => 'bytravel_set_fb_title'
	));//end facebook sidebar--------------------------------
	
	//sidebar img--------------------------------------------
	
	$wp_customize->add_section( 'bytravel_sidebar_img', array(
    'title'      => __( 'Sidebar image', 'bytravel' )
     ) );
     
    $wp_customize->add_setting( 'bytravel_set_sidebar_img' , array(
		'default'    => '',
		'transport'  => 'refresh'
	) );
	
	$wp_customize->add_setting( 'bytravel_set_sidebar_img_link' , array(
		'default'    => '',
		'transport'  => 'refresh'
	) );
	
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'sidebar_img',
           array(
               'label'      => __( 'Upload sidebar image', 'bytravel' ),
               'section'    => 'bytravel_sidebar_img',
               'settings'   => 'bytravel_set_sidebar_img'
           )
       )
   );
   
   $wp_customize->add_control('bytravel_sidebar_img', array(
    	'label'      => __('Sidebar image link:', 'bytravel'),
    	'section'    => 'bytravel_sidebar_img',
    	'settings'   => 'bytravel_set_sidebar_img_link'
	));
   //end sidebar img--------------------------------------------
   //start colors-----------------------------------------------
   $wp_customize->add_section( 'bytravel_colors', array(
    'title'      => __( 'Colors', 'bytravel' )
     ) );
     
    $wp_customize->add_setting( 'bytravel_set_upper_topbar' , array(
		'default'    => '',
		'transport'  => 'refresh'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'upper_topbar', array(
		'label'      => __( 'Upper Topbar', 'bytravel' ),
		'section'    => 'bytravel_colors',
		'settings'   => 'bytravel_set_upper_topbar',
	) ) );
	
	$wp_customize->add_setting( 'bytravel_set_lower_topbar' , array(
		'default'    => '',
		'transport'  => 'refresh'
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lower_topbar', array(
		'label'      => __( 'Lower Topbar', 'bytravel' ),
		'section'    => 'bytravel_colors',
		'settings'   => 'bytravel_set_lower_topbar',
	) ) );
   //end colorr-------------------------------------------------
}
add_action( 'customize_register', 'bytravel_customize_register' );


function bytravel_add_social_links() {
    ?>
    <span id="social-links">
      <?php if(get_theme_mod('bytravel_set_fb')): ?>
        <a class="social-link fab fa-facebook-square" href=<?php echo get_theme_mod('bytravel_set_fb'); ?> target=_blank></a>
      <?php endif ?>
      <?php if(get_theme_mod('bytravel_set_i')): ?>
        <a class="social-link fab fa-instagram" href=<?php echo get_theme_mod('bytravel_set_i'); ?> target=_blank></a>
      <?php endif ?>
      <?php if(get_theme_mod('bytravel_set_twitter')): ?>
        <a class="social-link fab fa-twitter-square" href=<?php echo get_theme_mod('bytravel_set_twitter'); ?> target=_blank></a>
      <?php endif ?>
      <?php if(get_theme_mod('bytravel_set_google')): ?>
        <a class="social-link fab fa-google-plus-square" href=<?php echo get_theme_mod('bytravel_set_google'); ?> target=_blank></a>
      <?php endif ?>
      <?php if(get_theme_mod('bytravel_set_youtube')): ?>
        <a class="social-link fab fa-youtube-square" href=<?php echo get_theme_mod('bytravel_set_youtube'); ?> target=_blank></a>
      <?php endif ?>
    </span>
    <?php
}

function bytravel_add_slider() {
	?>
	  <?php if(get_theme_mod('bytravel_set_slider1')){?>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  		<ol class="carousel-indicators">
    		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    		<?php if(get_theme_mod('bytravel_set_slider2')){?>
    			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    		<?php } ?>
    		<?php if(get_theme_mod('bytravel_set_slider3')){?>
    			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    		<?php } ?>	
    		<?php if(get_theme_mod('bytravel_set_slider4')){?>
    			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    		<?php } ?>
    		
  		</ol>
  		<div class="carousel-inner">
    		<div class="carousel-item active">
      			<img class="d-block" src="<?php echo get_theme_mod('bytravel_set_slider1')?>" alt="First slide">
    		</div>
    		<?php if(get_theme_mod('bytravel_set_slider2')){?>
    			<div class="carousel-item">
      				<img class="d-block w-100" src="<?php echo get_theme_mod('bytravel_set_slider2')?>" alt="Second slide">
    			</div>
    		<?php } ?>
    		<?php if(get_theme_mod('bytravel_set_slider3')){?>
    		<div class="carousel-item">
      			<img class="d-block w-100" src="<?php echo get_theme_mod('bytravel_set_slider3')?>" alt="Third slide">
    		</div>
    		<?php } ?>
    		</div>
    		<?php if(get_theme_mod('bytravel_set_slider4')){?>
    		<div class="carousel-item">
      			<img class="d-block w-100" src="<?php echo get_theme_mod('bytravel_set_slider4')?>" alt="Third slide">
    		</div>
    		<?php } ?>
  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
		</div>
	  <?php } ?>
	<?php
}
function bytravel_get_fb_link() {
	
	echo get_theme_mod('bytravel_set_fb_sidebar');
	
}

function bytravel_get_fb_title() {
	
	echo get_theme_mod('bytravel_set_fb_title');
	
}
function bytravel_add_sidebar_img() {
	?>
		<a id="sidebar-image-link" href="<?php echo get_theme_mod('bytravel_set_sidebar_img_link')?>" target=_blank><img id="sidebar-image" src="<?php echo get_theme_mod('bytravel_set_sidebar_img')?>"></a>
	<?php
}

function bytravel_get_site_brand() {
	?>
		<span id="name"><?php echo get_theme_mod('bytravel_set_site_brand')?></span>
	<?php
}

function bytravel_customize_css() {
    ?>
         <style type="text/css">
             #topbar { background-color: <?php echo get_theme_mod('bytravel_set_upper_topbar', '#FF1400'); ?>; }
             .navbar,.navbar-nav { background-color: <?php echo get_theme_mod('bytravel_set_lower_topbar', 'black'); ?> !important; }
         </style>
    <?php
}
add_action( 'wp_head', 'bytravel_customize_css');
?>
