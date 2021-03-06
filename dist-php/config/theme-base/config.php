<?php
	//set the theme folder, this could be set programaticlly, but
	//this configuration file is unfortunately differnt for each
	//theme anyway.
	$_SITE['wb_theme_folder'] = "/theme-base";

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
	$_SITE['base_cmblang_href_eng'] = $_SITE['base_cmblang_href_fra'] = $_SITE['wb_php_dist_folder'] . "/langselect/lang.php"; 

	//spanish language link used in demos
	$_SITE['base_cmblang_href_spa'] = "#";

	//Modify links to point to the main home page for the site
	$_SITE['base_fullhd_link_eng'] = "cont-eng.php";
	$_SITE['base_fullhd_link_fra'] = "cont-fra.php";
	$_SITE['base_fullhd_link_spa'] = "#";

	$_SITE['base_cmblang_title_eng'] = "Français - Version française de cette page"; 
	$_SITE['base_cmblang_title_fra'] = "English - English version of the Web page"; 

	$_SITE['base_cmblang_text_eng'] = "English"; 
	$_SITE['base_cmblang_text_fra'] = "Français"; 
	$_SITE['base_cmblang_text_spa'] = "español"; 
	
	$_SITE['base_fullhd_text_eng'] = "Full-width header area";
	$_SITE['base_mobile_hide1_text_eng'] = "id=\"base-fullhd\"";
	$_SITE['base_mobile_hide2_text_eng'] = "id=\"base-fullhd-in\"";
	$_SITE['base_mobile_hide3_text_eng'] = "id=\"base-fullft\"";
	
	$_SITE['base_sft_text_eng'] = "Site footer";
	$_SITE['base_fullft_text_eng'] = "Full-width footer area";
	$_SITE['base_fullft_in_text_eng'] = "id=\"base-fullft-in\"";
	
	$_SITE['base_fullhd_text_fra'] = "Full-width header area";
	$_SITE['base_mobile_hide1_text_fra'] = "id=\"base-fullhd\"";
	$_SITE['base_mobile_hide2_text_fra'] = "id=\"base-fullhd-in\"";
	$_SITE['base_mobile_hide3_text_fra'] = "id=\"base-fullft\"";
	
	$_SITE['base_sft_text_fra'] = "Site footer";
	$_SITE['base_fullft_text_fra'] = "Full-width footer area";
	$_SITE['base_fullft_in_text_fra'] = "id=\"base-fullft-in\""; 
?>