<?php

require_once "include/security.php";
require_once "include/common.php";

if(!html_head_secure("Jukebox for Source - Music Streaming System")) {
	html_foot();
	exit();
}

$menu_targets = array(
		array("Browse Library", "browse.php", 0),
		array("Add New Tracks", "upload.php", 1)
	);

print("<TABLE ALIGN=\"center\">\n");
foreach($menu_targets as $menu_item) {
	if(!$menu_item[2] || $session->isAdmin()) {
		print("\t<TR><TD ALIGN=\"center\">\n");
		print("\t\t<A HREF=\"" . $menu_item[1] . "\">" . $menu_item[0] . "</A>\n");
		print("\t</TD></TR>\n");
	}
}
print("</TABLE>\n");

html_foot();

?>