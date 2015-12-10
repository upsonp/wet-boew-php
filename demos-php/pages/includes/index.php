<div class="col-md-12">
<?php
    if (!empty($_PAGE['title_'.$_PAGE['lang1']])){
        echo '<h1 class="wb-inv">';
        echo $_PAGE['title_'.$_PAGE['lang1']];
    }
    if (!empty($_PAGE['title_'.$_PAGE['lang2']])) {
        echo '/ <span lang="' . $_PAGE['lang2'] .'">' . $_PAGE['title_'.$_PAGE['lang2']] . '</span>';
    }
    if (!empty($_PAGE['title_'.$_PAGE['lang1']])) {
        echo '</h1>';
    }
?>

<section class="col-md-<?php echo empty($_PAGE['lang2']) ? "12" : "6"; ?>">
<h2 class="h3 text-center"><?php echo $_PAGE['sub_title_'.$_PAGE['lang1']]; ?></h2>
<ul class="list-unstyled">
<li><a class="btn btn-lg btn-primary btn-block" href="<?php echo $_SITE['wb_site_href_'.$_PAGE['lang1']]; ?>"><?php echo $_SITE['wb_lang_text_'.$_PAGE['lang1']]; ?></a></li>
<li><a class="btn btn-lg btn-default btn-block" href="<?php echo $_SITE['wb_terms_href_'.$_PAGE['lang1']]; ?>" rel="license"><?php echo $_SITE['wb_terms_'.$_PAGE['lang1']]; ?></a></li>
</ul>
</section>
<?php if (!empty($_PAGE['lang2'])) { ?>
    <section class="col-md-6" lang="<?php echo $_PAGE['lang2']; ?>">
	<h2 class="h3 text-center"><?php echo $_PAGE['sub_title_'.$_PAGE['lang2']]; ?></h2>
	<ul class="list-unstyled">
	<li><a class="btn btn-lg btn-primary btn-block" href="<?php echo $_SITE['wb_site_href_'.$_PAGE['lang2']]; ?>"><?php echo $_SITE['wb_lang_text_'.$_PAGE['lang2']]; ?></a></li>
	<li><a class="btn btn-lg btn-default btn-block" href="<?php echo $_SITE['wb_terms_href_'.$_PAGE['lang2']]; ?>" rel="license"><?php echo $_SITE['wb_terms_'.$_PAGE['lang2']]; ?></a></li>
	</ul>
    </section>
<?php } ?>
</div>  
