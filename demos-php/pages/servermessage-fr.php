<?php
// Always set the page language options first.
// Set 'lang1' to 'en' for English pages, 'fr' for French pages.
$_PAGE['lang1'] = "fr";

require_once __DIR__ . "/config/config.php";

// These are the required variables for this page.
$_PAGE['title_fr'] = "Titre du message - Thème de la facilité d’emploi Web du gouvernement du Canada";
$_PAGE['short_title_fr'] = "Titre du message";

$_PAGE['err_msg_fr'] = "Texte modèle. Texte modèle. Texte modèle. Texte modèle. Texte modèle. Texte modèle. Texte modèle.";

$_PAGE['isserv'] = "1";

include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php";
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php";
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php";
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php";
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php";
?>