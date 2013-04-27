<?php
	$_COL_LAYOUT = "";
	$_NAV_LINK = "";
	$_PAGE['is_left_gauche'] = isset($_PAGE['left_gauche_menu_'.$_PAGE['lang1']]) && 
		$_PAGE['left_gauche_menu_'.$_PAGE['lang1']] != "";
		
	// if no left side is uesed then use a single column layout
	// and skip to navigation points to the footer. 
	// Otherwise use a two column layout and skip to the left side menu
	if(  $_PAGE['is_left_gauche'] == "1" ) {
		$_COL_LAYOUT = "wb-body-sec";
		$_NAV_LINK = "wb_sh_link_2_";
	} else {
		$_COL_LAYOUT = "wb-body";
		$_NAV_LINK = "wb_sh_link_3_";
	}

	$_SKIP_1_NAV_TEXT = $_SITE['wb_sh_link_1_' . $_PAGE['lang1']];
	$_SKIP_2_NAV_TEXT = $_SITE[$_NAV_LINK . $_PAGE['lang1']];
?>
</head>

<body><div id="<?php echo $_COL_LAYOUT; ?>">
<?php 
//if this is a server page the skip navigation isn't required
if( $_PAGE['isserv'] != "1" ) {?>
<div id="wb-skip">
<ul id="wb-tphp">
<li id="wb-skip1"><a href="#wb-cont"><?php echo $_SKIP_1_NAV_TEXT ?></a></li>
<li id="wb-skip2"><a href="#wb-nav"><?php echo $_SKIP_2_NAV_TEXT ?></a></li>
</ul>
</div>
<?php } ?>

<div id="wb-head"><div id="wb-head-in"><header>

<?php
	$_THEME_HEAD_NAV_FILE = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . $_SITE['wb_theme_folder'] . "/head-nav.php"; 
	if( file_exists($_THEME_HEAD_NAV_FILE) ) {
		include_once $_THEME_HEAD_NAV_FILE;
	}
?>

</header></div></div>
<div id="wb-core"><div id="wb-core-in" class="equalize">
<div id="wb-main" role="main"><div id="wb-main-in">
<!-- MainContentStart -->
<?php
	if( $_PAGE['signin'] == "1" || $_PAGE['signout'] == "1") {
		//one of the two buttons is going to be displayed
		//determine if it's the signin or signout button
		$_SIO_ = ($_PAGE['signin']=="1"?"signin":"signout");
		
		$_LINK_ = $_SITE['wb_'.$_SIO_.'_file_' . $_PAGE['lang1']];
		$_BUTTON_ = $_SITE['wb_'.$_SIO_.'_text_' . $_PAGE['lang1']];

		$_HEADING_ = $_SITE['wb_sio_heading_' . $_PAGE['lang1']];
		$_ACCOUNT_TEXT_ = $_SITE['wb_sio_text_' . $_PAGE['lang1']];
		$_ACCOUNT_FILE = $_SITE['wb_sio_file_' . $_PAGE['lang1']];

		echo '<div id="wb-session"><aside>' ."\n";
		echo '<h2 class="wb-invisible">'.$_HEADING_.'</h2>' ."\n";
		echo '<ul class="button-group">' ."\n";
		if( $_PAGE['signout'] == "1" ) {
			echo '<li class="settings"><a class="button" href="'.$_ACCOUNT_FILE.'">';
				echo $_ACCOUNT_TEXT_.'</a></li>';
		}
		echo '<li class="session">';
		echo '<a class="button" href="'.$_LINK_.'">';
			echo $_BUTTON_.'</a></li>' ."\n";
		echo '</ul>' ."\n";
		echo '</aside></div>' ."\n";
	}
	
	$_HEAD_END_ = $_SERVER['DOCUMENT_ROOT'] .$_SITE['wb_php_dist_folder'] .$_SITE['wb_theme_folder'] ."/head-end.php";
	if( file_exists($_HEAD_END_) ) {
		include_once $_HEAD_END_;
	}
?>