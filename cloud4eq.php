<?php

/*
Plugin Name: Smart PNG ,GIF and JPEG compression and manipulation in the cloud + CDN 4eq 
Description:speed up your site by Upload images to the cloud, deliver optimized via a fast CDN. Perform smart resizing and apply effects.
Author: saeed mohammadi
Version: 0.2
*/ 
add_action('admin_menu', 'cloud_4eq_setup_menu');

function cloud_4eq_setup_menu(){
add_menu_page( 'cloud 4eq Page', 'cloud 4eq', 'manage_options', 'cloud-4eq', 'cloud_4eq_init' );
}

function cloud_4eq_init(){

echo "<h1>Cloud 4eq </h1>
<h3>supercharges your images! Upload images to the cloud,for free and unlimited, deliver via a lightning-fast CDN, optimized and using industry best 

practices. Perform smart resizing,and much more without leaving your WordPress console or installing any software.</h3>

<h4>To start uploading photos to Cloud 4eq and set image from  Cloud 4eq to your post select :start uploading photos to Cloud 4eq and set to your post 

;</h4>

<form method='post' id='myForm_Cloud_4eq'>
   <!-- some inputs here ... -->";
 wp_nonce_field( 'name_of_my_action', 'name_of_nonce_field' );
echo"
<select id='country' name='uploading_photos_to_Cloud_4eq'onchange='onchange_Cloud_4eq()'>
        <option value='1'>start uploading photos to Cloud 4eq and set to your post</option>
        <option value='2'>return</option>
</select>
<input type='submit'>

</form>";



if ( 
    ! isset( $_POST['name_of_nonce_field'] ) 
    || ! wp_verify_nonce( $_POST['name_of_nonce_field'], 'name_of_my_action' ) 
) {
 
   print 'Sorry, your nonce did not verify.';
   exit;
 
} else {
 

   // process form data


if($_POST['uploading_photos_to_Cloud_4eq']<=1){



////////start uploading photos to Cloud 4eq and set to your post


$url='src="'.get_site_url();
$inurl='src="http://img.4eq.ir/301/index.php?img='.get_site_url();
 global $wpdb;
$sql2="UPDATE wp_posts SET post_content = replace(post_content, '".$url."', '".$inurl."')";
 $wpdb->query($sql2);

}else{
////////return

$url='src="'.get_site_url();
$inurl='src="http://img.4eq.ir/301/index.php?img='.get_site_url();
 global $wpdb;
$sql2="UPDATE wp_posts SET post_content = replace(post_content, '".$inurl."','".$url."')";
 $wpdb->query($sql2);


}

}

}


 function cloud_4eq_addform( $atts ) {
// code
}
add_shortcode( 'cloud4eqaddform', 'cloud_4eq_addform' );






wp_enqueue_script('my-script-scmc4', get_stylesheet_directory_uri() . '/tinymce-custom-class.js');
wp_localize_script('my-script-scmc4', 'myScript', array(
    'pluginsUrl' => plugin_dir_url( __FILE__ ),
));
	function add_my_media_button_spgjcmc4( $buttons ) {
    echo '<a href="#" id="insert-my-media-scmc4" class="button">Add my media via 4eq</a>'; 
		
	} 

function include_media_button_js_file_spgjcmc4() {
    wp_enqueue_script('media_buttons',plugin_dir_url( __FILE__ ) . 'tinymce-custom-class.js', array('jquery'), '1.0', true);
	wp_enqueue_script('media_buttons',plugin_dir_url( __FILE__ ) . 'other/script.js', array('jquery'), '1.0', true);
}





class TinyMCE_Custom_scmc4_Class {
 
    /**
    * Constructor. Called when the plugin is initialised.
    */
    function __construct() {
 
 		if ( is_admin() ) {
		    add_action( 'init', array( &$this, 'setup_tinymce_scmc4_plugin' ) );
		}

    }

    /**
	* Check if the current user can edit Posts or Pages, and is using the Visual Editor
	* If so, add some filters so we can register our plugin
	*/
	function setup_tinymce_scmc4_plugin() {
	 
	    // Check if the logged in WordPress User can edit Posts or Pages
	    // If not, don't register our TinyMCE plugin
	    if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
	        return;
	    }
	 
	    // Check if the logged in WordPress User has the Visual Editor enabled
	    // If not, don't register our TinyMCE plugin
	    if ( get_user_option( 'rich_editing' ) !== 'true' ) {
	        return;
	    }
	 
	    // Setup some filters
	    add_action('media_buttons', 'add_my_media_button_spgjcmc4');
        add_action('wp_enqueue_media', 'include_media_button_js_file_spgjcmc4');	 
	}
 
}
 
$TinyMCE_Custom_scmc4_Class = new TinyMCE_Custom_scmc4_Class;
?>