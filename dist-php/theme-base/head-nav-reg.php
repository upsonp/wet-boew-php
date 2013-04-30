<!-- HeaderStart -->
<section><div id="base-fullhd"><h2><?php echo $_SITE['base_fullhd_text_'.$_PAGE['lang1']]; ?></h2>
<p class="mobile-hide"><?php echo $_SITE['base_mobile_hide1_text_'.$_PAGE['lang1']]; ?></p>
<div id="base-fullhd-in">
<p class="mobile-hide"><?php echo $_SITE['base_mobile_hide2_text_'.$_PAGE['lang1']]; ?></p>
<ul>
<?php
if( $_PAGE['nolang'] != "1" ) {
	for($i=2; isset($_PAGE['lang'.$i]); $i++ ) {
		echo '<li id="base-fullhd-lang';
		if( $i-1 >= 2 ) {
			echo "-" .($i-1);
		}
		echo '">';
		echo '<a href="' .$_SITE['base_cmblang_href_' . $_PAGE['lang'.$i]];
		echo '" lang="' .$_SITE['base_langalt_' . $_PAGE['lang'.$i]];
		echo '">' . $_SITE['base_cmblang_text_' . $_PAGE['lang'.$i]]; 
		echo '</a></li>';
	}
}
?>
</ul>
</div>
</div></section>

<div id="base-bnr" role="banner"><div id="base-bnr-in">
<div id="base-title"><p id="base-title-in"><a<?php echo $_TARGET_; ?> href="<?php echo $_SITE['wb_site_href_' . $_PAGE['lang1']]; ?>"><?php echo $_SITE['wb_site_title_' . $_PAGE['lang1']]; ?></a></p></div>

<?php
if( $_PAGE['nosearch'] != "1" ) {
	echo '<section role="search"><div id="base-srchbx"><h2>'.$_SITE['wb_search_' . $_PAGE['lang1']].'</h2>';
    include $_SITE['wb_search_file']; 
	echo '</div></section>';
}
?>
</div></div>

<?php
//Handle the mega menu and bread crumb trail
if ($_PAGE['nositemenu'] != '1' || $_PAGE['bcrumb_hide'] != '1') { 

	echo '<nav role="navigation">' ."\n";
	if ($_PAGE['nositemenu'] != '1') {
		echo '<div id="base-psnb"><h2>' . $_SITE['wb_sitenav_' . $_PAGE["lang1"]] .'</h2><div id="base-psnb-in">';
	
		include $_SITE['wb_sitenav_file_' . $_PAGE['lang1'] ];
	
		echo '</div></div>' ."\n";
	}
	
	if ($_PAGE['bcrumb_hide'] != '1') {
		echo '<div id="base-bc"><h2>'.$_SITE['wb_bcrumb_' .$_PAGE['lang1'] ].'</h2><div id="base-bc-in">' ."\n";
		echo "<ol>\n";
		include $_SITE['wb_bcrumb_file'];
	
		echo "</ol>\n";
		echo "</div></div>";
	}
	echo "</nav>";
}
?>
<!-- HeaderEnd -->