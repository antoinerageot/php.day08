<?php
setcookie("name");
$name = NULL;
if (!isset($_COOKIE["name"])
	$_COOKIE["name"] = "platypus";
if (isset $_GET["name"])) {
	$name = $_GET["name"];
	if ($name != NULL) {
		setcookie("name");
	}
}
	echo "Hello ".$_COOKIE["name"];
?>
