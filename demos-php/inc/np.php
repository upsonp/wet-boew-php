<?php if ($_SERVER['DOCUMENT_URI'] == $_NAVPATH['link_eng'] || $_SERVER['DOCUMENT_URI'] == $_NAVPATH['link_fra']) { } else { ?><li><a<?php if ($_PAGE['isapp'] == '1') { ?> <?php if ($_NAVPATH['html5'] == '1') { ?>target="_blank"<?php } else { ?>class="wet-newwindow"<?php } } ?> href="<?php echo $_NAVPATH['link_' . $_PAGE['lang1']]; ?>"><?php echo $_NAVPATH['title_' . $_PAGE['lang1']]; ?></a><?php if ($_UNKNOWN['gcwu_hidebtarrow'] == '1') { } else { ?>&#160;&gt;<?php } ?></li><?php } ?>