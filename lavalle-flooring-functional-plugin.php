<?php
/*
 * @wordpress-plugin
 * Plugin Name:       Lavalle Flooring Functionality
 * Plugin URI:        https://lavalleflooring.com
 * Description:       Custom functionality plugin for lavalleflooring.com (Reviews.io, Gravity Forms)
 * Version:           1.0.2
 * Author:            The Mighty Mo! WordPress Design
 * Author URI:        https://www.themightymo.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:
 * Domain Path:       /languages
*/


if ( ! function_exists( 'custom_taxonomy_manufacturer' ) ) {

	// Register Custom Taxonomy
	function custom_taxonomy_manufacturer() {
	
		$labels = array(
			'name'                       => _x( 'Manufacturers', 'Taxonomy General Name', 'lavalle' ),
			'singular_name'              => _x( 'Manufacturer', 'Taxonomy Singular Name', 'lavalle' ),
			'menu_name'                  => __( 'Manufacturers', 'lavalle' ),
			'all_items'                  => __( 'All Manufacturers', 'lavalle' ),
			'parent_item'                => __( 'Parent Manufacturer', 'lavalle' ),
			'parent_item_colon'          => __( 'Parent Manufacturer:', 'lavalle' ),
			'new_item_name'              => __( 'New Manufacturer Name', 'lavalle' ),
			'add_new_item'               => __( 'Add New Manufacturer', 'lavalle' ),
			'edit_item'                  => __( 'Edit Manufacturer', 'lavalle' ),
			'update_item'                => __( 'Update Manufacturer', 'lavalle' ),
			'view_item'                  => __( 'View Manufacturer', 'lavalle' ),
			'separate_items_with_commas' => __( 'Separate Manufacturers with commas', 'lavalle' ),
			'add_or_remove_items'        => __( 'Add or remove Manufacturers', 'lavalle' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'lavalle' ),
			'popular_items'              => __( 'Popular Manufacturers', 'lavalle' ),
			'search_items'               => __( 'Search Manufacturers', 'lavalle' ),
			'not_found'                  => __( 'Not Found', 'lavalle' ),
			'no_terms'                   => __( 'No Manufacturers', 'lavalle' ),
			'items_list'                 => __( 'Manufacturers list', 'lavalle' ),
			'items_list_navigation'      => __( 'Manufacturers list navigation', 'lavalle' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'manufacturer', array( 'product' ), $args );
	
	}
	add_action( 'init', 'custom_taxonomy_manufacturer', 0 );

}

if ( ! function_exists( 'custom_taxonomy_style' ) ) {

	// Register Custom Taxonomy
	function custom_taxonomy_style() {
	
		$labels = array(
			'name'                       => _x( 'Styles', 'Taxonomy General Name', 'lavalle' ),
			'singular_name'              => _x( 'Style', 'Taxonomy Singular Name', 'lavalle' ),
			'menu_name'                  => __( 'Styles', 'lavalle' ),
			'all_items'                  => __( 'All Styles', 'lavalle' ),
			'parent_item'                => __( 'Parent Style', 'lavalle' ),
			'parent_item_colon'          => __( 'Parent Style:', 'lavalle' ),
			'new_item_name'              => __( 'New Style Name', 'lavalle' ),
			'add_new_item'               => __( 'Add New Style', 'lavalle' ),
			'edit_item'                  => __( 'Edit Style', 'lavalle' ),
			'update_item'                => __( 'Update Style', 'lavalle' ),
			'view_item'                  => __( 'View Style', 'lavalle' ),
			'separate_items_with_commas' => __( 'Separate Styles with commas', 'lavalle' ),
			'add_or_remove_items'        => __( 'Add or remove Styles', 'lavalle' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'lavalle' ),
			'popular_items'              => __( 'Popular Styles', 'lavalle' ),
			'search_items'               => __( 'Search Styles', 'lavalle' ),
			'not_found'                  => __( 'Not Found', 'lavalle' ),
			'no_terms'                   => __( 'No Styles', 'lavalle' ),
			'items_list'                 => __( 'Styles list', 'lavalle' ),
			'items_list_navigation'      => __( 'Styles list navigation', 'lavalle' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'style', array( 'product' ), $args );
	
	}
	add_action( 'init', 'custom_taxonomy_style', 0 );

}



if ( ! function_exists( 'custom_taxonomy_color' ) ) {

	// Register Custom Taxonomy
	function custom_taxonomy_Color() {
	
		$labels = array(
			'name'                       => _x( 'Colors', 'Taxonomy General Name', 'lavalle' ),
			'singular_name'              => _x( 'Color', 'Taxonomy Singular Name', 'lavalle' ),
			'menu_name'                  => __( 'Colors', 'lavalle' ),
			'all_items'                  => __( 'All Colors', 'lavalle' ),
			'parent_item'                => __( 'Parent Color', 'lavalle' ),
			'parent_item_colon'          => __( 'Parent Color:', 'lavalle' ),
			'new_item_name'              => __( 'New Color Name', 'lavalle' ),
			'add_new_item'               => __( 'Add New Color', 'lavalle' ),
			'edit_item'                  => __( 'Edit Color', 'lavalle' ),
			'update_item'                => __( 'Update Color', 'lavalle' ),
			'view_item'                  => __( 'View Color', 'lavalle' ),
			'separate_items_with_commas' => __( 'Separate Colors with commas', 'lavalle' ),
			'add_or_remove_items'        => __( 'Add or remove Colors', 'lavalle' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'lavalle' ),
			'popular_items'              => __( 'Popular Colors', 'lavalle' ),
			'search_items'               => __( 'Search Colors', 'lavalle' ),
			'not_found'                  => __( 'Not Found', 'lavalle' ),
			'no_terms'                   => __( 'No Colors', 'lavalle' ),
			'items_list'                 => __( 'Colors list', 'lavalle' ),
			'items_list_navigation'      => __( 'Colors list navigation', 'lavalle' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'color', array( 'product' ), $args );
	
	}
	add_action( 'init', 'custom_taxonomy_color', 0 );

}



if ( ! function_exists( 'custom_taxonomy_product_type' ) ) {

	// Register Custom Taxonomy
	function custom_taxonomy_product_type() {
	
		$labels = array(
			'name'                       => _x( 'Product Types', 'Taxonomy General Name', 'lavalle' ),
			'singular_name'              => _x( 'Product Type', 'Taxonomy Singular Name', 'lavalle' ),
			'menu_name'                  => __( 'Product Types', 'lavalle' ),
			'all_items'                  => __( 'All Product Types', 'lavalle' ),
			'parent_item'                => __( 'Parent Product Type', 'lavalle' ),
			'parent_item_colon'          => __( 'Parent Product Type:', 'lavalle' ),
			'new_item_name'              => __( 'New Product Type Name', 'lavalle' ),
			'add_new_item'               => __( 'Add New Product Type', 'lavalle' ),
			'edit_item'                  => __( 'Edit Product Type', 'lavalle' ),
			'update_item'                => __( 'Update Product Type', 'lavalle' ),
			'view_item'                  => __( 'View Product Type', 'lavalle' ),
			'separate_items_with_commas' => __( 'Separate Product Types with commas', 'lavalle' ),
			'add_or_remove_items'        => __( 'Add or remove Product Types', 'lavalle' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'lavalle' ),
			'popular_items'              => __( 'Popular Product Types', 'lavalle' ),
			'search_items'               => __( 'Search Product Types', 'lavalle' ),
			'not_found'                  => __( 'Not Found', 'lavalle' ),
			'no_terms'                   => __( 'No Product Types', 'lavalle' ),
			'items_list'                 => __( 'Product Types list', 'lavalle' ),
			'items_list_navigation'      => __( 'Product Types list navigation', 'lavalle' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'lf_product_type', array( 'product' ), $args );
	
	}
	add_action( 'init', 'custom_taxonomy_product_type', 0 );

}


add_action( 'wp_head', 'pinterest_pixel', 100 );
function pinterest_pixel () {?>
<!-- BEGIN Pinterest Pixel Code --><meta name="p:domain_verify" content="88fbbdf7dbdbd4bba77a59cedbb9e71f"/><!-- End Pinterest Pixel Code --><?php
}

/*
add_action( 'wp_head', 'facebook_pixel', 100 );
function facebook_pixel () {?>
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '618574308724397'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=618574308724397&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code --><?php
}*/


add_action( 'wp_footer', 'reviews_io', 100 );
function reviews_io (){
  ?>
  <!-- BEGIN Reviews.io Floating Widget V.3 (Desktop) -->
	<link rel="stylesheet" type="text/css" href="https://widget.reviews.io/floating-metrics-widget/css/dist.css"><script src="https://widget.reviews.io/floating-metrics-widget/dist.js" type="text/javascript"></script>
	<script>
	window.onload = function() {
	    floatingMetricsWidget({
	        store: "lavalleflooringinc-com",
	        primaryClr: "#f47e27",
	        buttonClr: "#12cf6c",
	        widgetName: "floating-metrics-widget",
	        floatPosition: "left",
	        showMerchantMetrics: true,
	        logoColors: false,
	        compound: "houzz;bbb;google local;facebook;yelp",
	    });
	};
	</script>
	<!-- END Reviews.io Floating Widget V.3 (Desktop) -->
		
	<?php
	// If we want to display the reviews.io star rating on the bottom of the page
	global $post;
	$add_star_rating_to_bottom_of_page = get_field('add_star_rating_to_bottom_of_page');
	if(  $add_star_rating_to_bottom_of_page && in_array('yes', $add_star_rating_to_bottom_of_page)  ) { ?>
		
		<!-- BEGIN Reviews.io Text Banner (Mobile Friendly) -->
		<script src="https://widget.reviews.io/rich-snippet-reviews-widgets/dist.js" type="text/javascript"></script>
		<div id="text-banner-widget"></div>
		
		<script>
		    richSnippetReviewsWidgets("text-banner-widget", {
		        store: "lavalleflooringinc-com",
		        starsClr: "#f47e27",
		        textClr: "#313131",
		        logoClr: "#12cf6c",
		        widgetName: "text-banner"
		    });
		</script>
		<!-- END Reviews.io Text Banner (Mobile Friendly) -->
	

		<!-- BEGIN Reviews.io Flooring Stars Script -->
		<link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/40686/revsglobal-pr-mod/style-cf.css?-c0avz5">
		<script src="https://widget.reviews.io/combined/dist.js?v1"></script>
		<link rel="stylesheet" href="https://widget.reviews.io/combined/style.css?v1">
		<script>
	    new ReviewsWidget('#ReviewsWidget', {
	        store: 'lavalleflooringinc-com',
	        widget: 'combined-widget',
	        options: {
	            types: 'store_review,product_review,questions', // store_review,product_review,questions (choose what content you prefer to show in this widget)
	            per_page: 20, // Any number (set how many reviews/questions you want to show per page)
	
	            /* Company Reviews Settings */
	            store_review:{
	                enable_social_sharing:true,
	                enable_helpful:true,
	                enable_smart_filters:true,
	                enable_rating_filters:true,
	                enable_featured_review_photos:true,
	                enable_featured_social_photos:true,
	                enable_toggle_filters:true,
	                enable_list_summary:true,
	                show_mention_text:true,
	                show_dates:true,
	                show_replies:true,
	                show_avatars:true,
	                show_photos:true,
	                show_verify_status:true
	            },
	
	            /* Product Reviews Settings */
	            product_review: {
	                sku:'<?php echo (get_field('reviews_products_sku') ?: '0001'); ?>',
	                enable_write_review:true,
	                enable_smart_filters:true,
	                enable_rating_filters:true,
	                enable_toggle_filters:true,
	                enable_social_sharing:false,
	                enable_helpful:false,
	                enable_featured_review_photos:true,
	                enable_featured_social_photos:true,
	                show_mention_text:true,
	                show_dates:true,
	                show_replies:true,
	                show_avatars:true,
	                show_photos:true,
	                show_verify_status:true
	
	            },
	
	            /* Questions & Answers Settings */
	            questions:{
	                enable_ask_question:true,
	                show_dates:false,
	                grouping:'9516'
	            }
	        },
	
	        /* Customise Colours & Fonts */
	        styles: {
	            starColor:'#f47e27',
	            textColor:'#333333',
	            primaryColor:'#333333',
	            textColor:'#666666',
	            neutralColor:'#ececec',
	            backgroundColor:'#ffffff',
	            formColor:'#dcdcdc',
	            baseTextSize:'14px',
	            header_style:''
	        },
	
	        /* Customise Buttons */
	        buttons:{
	            smart_filter:'solid',
	            write_review:'solid',
	            selected_page:'outline'
	        },
	
	        /* Avatar Settings */
	        avatars:{
	            enable_gravatar:true,
	            gravatar_fallback:'identicon'
	        },
	
	        /* Other Options*/
	        reviewsLogo:{
	            show_logo:true,
	            style:'black'
	        }
	
	    });
	</script>
		<!-- END Reviews.io Flooring Stars Script -->
	<?php 
	}
	  
}


add_action( 'wp_footer', 'reviews_io_carousel', 100 );
function reviews_io_carousel (){
	if( is_page( 5545 ) ) {?>
		<link rel="stylesheet" href="https://widget.reviews.io/combined/style.css?RUKcarousel" test="TOBYTEST">
		<script src="https://widget.reviews.io/combined/dist.js?RUKcarousel"></script>
		<script>
	
	    new ReviewsWidget('#ReviewsWidget', {
	
	                store: 'lavalleflooringinc-com',
	                widget: 'prestige-card-carousel',
	                maxReviews: 21,
	
	                contentMode: 'third-party;product;company;',
	                sku: 'all-product-reviews',
	
	                structuredData: {
	                    product: "",
	                    company: ""
	                },
	
	                richSnippets: {
	                    product: true,
	                    company: true,
	                },
	
	                carouselOptions: {
	                    transitionSpeed: 320,
	                    draggableOnDesktop: true,
	                    showSliderArrows: true,
	                    autoScroll: false,
	                    autoScrollTime: 15,
	                    showTitle: true,
	                    titleText: "Our Customers Love Us",
	                    showSubTitle: true,
	                    starsInSubTitle: true,
	                    starsAfterName: false,
	                    hideDates: false,
	                    hideThirdParty: true
	                },
	
	                styles: {
	                    starColor:'#ffffff',
	                    primaryColor:'#4f4f4f',
	                    textColor: '#ffffff',
	                    neutralColor: '#6b6b6b',
	                    borderRadius: "0px",
	                    boxShadow: "0 10px 10px rgba(173,173,173,0.04), 0 6px 6px rgba(173,173,173,0.07) ",
	                    logoColor: "#000",
	                },
	    });</script>
	<?php
	}
}



// After submission, jump to the Gravity Form confirmation message
add_filter( 'gform_confirmation_anchor', '__return_true' );


// include custom jQuery
function custom_js () {
	wp_enqueue_script( 'custom-js', plugin_dir_url( __FILE__ ) . 'themightymo-functional-plugin.js', array( 'jquery' ), '1.0.0', true );
}
//add_action('wp_enqueue_scripts', 'custom_js');



/**
 *	This will hide the Divi "Project" post type.
 *	Thanks to georgiee (https://gist.github.com/EngageWP/062edef103469b1177bc#gistcomment-1801080) for his improved solution.
 */
add_filter( 'et_project_posttype_args', 'mytheme_et_project_posttype_args', 10, 1 );
function mytheme_et_project_posttype_args( $args ) {
	return array_merge( $args, array(
		'public'              => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => false,
		'show_in_nav_menus'   => false,
		'show_ui'             => false
	));
}

// Shortcode for 360 image
function full_image_shortcode() { 
    if( get_field('360_image_url') ):
        $imgurl = get_field('360_image_url',false,false);
        $finalurl = '<a href ="' . $imgurl . '" target="_blank"><img alt="360 Image" src="https://lavalleflooring.com/wp-content/uploads/2020/08/360image.png" width="50" height="50"></a>';
        return $finalurl;
    endif;
} 
// End Shortcode
add_shortcode('360image', 'full_image_shortcode'); 
