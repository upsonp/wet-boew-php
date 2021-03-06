<?php
	//set the theme folder, this could be set programaticlly, but
	//this configuration file is unfortunately differnt for each
	//theme anyway.
	$_SITE['wb_theme_folder'] = "/theme-wet-boew";

	/*
	 * Path to the distribution /inc/config.php file containing the common
	 * in the demo this is programatically defined demonstrating one method
	 * of including the configuration file. This could also be hardcoded
	 */
	$_INC_CONFIG = realpath(dirname(__FILE__));

	//if this is a windows machine use the backslash, otherwise use forwardslash
	$_SLASH_ = (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN')?"\\":"/";
	$_INC_CONFIG = substr($_INC_CONFIG, 0, strrpos($_INC_CONFIG, $_SLASH_)) ."/config.php";

	require $_INC_CONFIG;

	//Modify the language selection link to point to whatever script suits your site.
	$_SITE['wet_cmblang_href_eng'] = $_SITE['wet_cmblang_href_fra'] = $_SITE['wb_php_dist_folder'] . "/langselect/lang.php"; 

	$_SITE['wet_sig_image'] = "logo";
	$_SITE['wet_sig_eng'] = "";
	$_SITE['wet_sig_fra'] = "";
	
	$_SITE['wet_fullhd_text_eng'] = "Full-width header area";
	$_SITE['wet_fullhd_text_fra'] = "Secteur d'en-tête de plein-largeur";

	$_SITE['wet_cmblang_text_fra'] = "Français"; 
	$_SITE['wet_cmblang_text_eng'] = "English"; 
	
	$_SITE['wet_fullft_text_eng'] = "Full-width footer area";
	$_SITE['wet_fullft_text_fra'] = "Secteur de pied de page de plein-largeur";
	
?>