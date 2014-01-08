<?php
	$_LANG_ = "eng";
	
	$_SITE['wb_site_title_'.$_LANG_] = "PHP Variant"; 
	$_SITE['wb_site_href_'.$_LANG_] = "home-accueil-eng.php"; 

	//$_MENU_LOCATION__ is set in the parent config.php file
	$_SITE['wb_sitenav_file_'.$_LANG_] = $_MENU_LOCATION_ ."/prim-megamenu-eng.php";
	$_SITE['wb_sitenav_'.$_LANG_] = "Site menu"; 

	$_SITE['wb_ft1_menu_file_'.$_LANG_] = $_MENU_LOCATION_ ."/trail-1-eng.php";
	$_SITE['wb_ft1_href_'.$_LANG_] = "#";
	$_SITE['wb_ft1_text_'.$_LANG_] = "About us";

	//moved contact us menu before news in reference to issue #2517
	$_SITE['wb_ft2_menu_file_'.$_LANG_] = $_MENU_LOCATION_ ."/trail-3-eng.php";
	$_SITE['wb_ft2_href_'.$_LANG_] = "#";
	$_SITE['wb_ft2_text_'.$_LANG_] = "Contact us";

	$_SITE['wb_ft3_menu_file_'.$_LANG_] = $_MENU_LOCATION_ ."/trail-2-eng.php";
	$_SITE['wb_ft3_href_'.$_LANG_] = "#";
	$_SITE['wb_ft3_text_'.$_LANG_] = "News";

	$_SITE['wb_ft4_menu_file_'.$_LANG_] = $_MENU_LOCATION_ ."/trail-4-eng.php";
	$_SITE['wb_ft4_href_'.$_LANG_] = "#";
	$_SITE['wb_ft4_text_'.$_LANG_] = "Stay connected";
	
	$_SITE['wb_search_'.$_LANG_] = "Search"; 
	$_SITE['wb_search_label_'.$_LANG_] = "Search Web site"; 

	$_SITE['wb_bcrumb_'.$_LANG_] = "Breadcrumb trail"; 
	
	//Modify to point to a custom signin/signout application
	//Override the 'wb_signin_file_'.$_LANG_ variable in the file calling it, the default is for demos
	$_SITE['wb_signin_file_'.$_LANG_] = "application-signout-eng.php";
	$_SITE['wb_signin_text_'.$_LANG_] = "Sign in";
	
	//Modify to point to a custom signin/signout application
	//Override the 'wb_signout_file_'.$_LANG_ variable in the file calling it, the default is for demos
	$_SITE['wb_signout_file_'.$_LANG_] = "application-signin-eng.php";
	$_SITE['wb_signout_text_'.$_LANG_] = "Sign out";

	//Modify to point to a custom account settings application when using sign in/sign out button
	$_SITE['wb_sio_file_'.$_LANG_] = "#";
	$_SITE['wb_sio_text_'.$_LANG_] = "Account settings";
	$_SITE['wb_sio_heading_'.$_LANG_] = "My account";

	$_SITE['wb_meta_'.$_LANG_] = "en"; 
	$_SITE['wb_lang_text_'.$_LANG_] = "English"; 
	$_SITE['wb_sh_link_1_'.$_LANG_] = "Skip to main content"; 
	$_SITE['wb_sh_link_2_'.$_LANG_] = "Skip to secondary menu"; 
	$_SITE['wb_sh_link_3_'.$_LANG_] = "Skip to footer"; 
	$_SITE['wb_sec_'.$_LANG_] = "Secondary menu"; 
	$_SITE['wb_sup_'.$_LANG_] = "Supplemental content"; 
	$_SITE['wb_doc_dates_'.$_LANG_] = "Date modified:"; 
	$_SITE['wb_doc_version_'.$_LANG_] = "Version:"; 
	$_SITE['wb_foot_'.$_LANG_] = "Footer"; 
	$_SITE['wb_sitefooter_'.$_LANG_] = "Site footer"; 

	$_SITE['wb_archive_title_'.$_LANG_] = "ARCHIVED";
	$_SITE['wb_archive_warn_alt_'.$_LANG_] = "Warning";
	$_SITE['wb_archive_warn_title_'.$_LANG_] = $_SITE['wb_archive_warn_alt'.$_LANG_];
	$_SITE['wb_archive_warn_webuse_'.$_LANG_] = "The <a href='http://www.tbs-sct.gc.ca/pol/doc-eng.aspx?id=24227'>Standard on Web Usability</a> replaces this content. This content is archived because Common Look and Feel 2.0 Standards have been rescinded.";
	$_SITE['wb_archive_warn_head_'.$_LANG_] = "Archived Content";
	$_SITE['wb_archive_warn_msg_'.$_LANG_] = "Information identified as archived is provided for reference, research or recordkeeping purposes. It is not subject to the Government of Canada Web Standards and has not been altered or updated since it was archived. Please contact us to request a format other than those available.";
	
?>
