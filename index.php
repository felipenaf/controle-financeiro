<?php

ini_set("default_charset", "utf-8");
mb_internal_encoding("utf-8");

defined('ROOT_PATH') || define('ROOT_PATH', realpath(''));

$page = isset($_GET['page']) ? $_GET['page'] : '';
if (!$page) {
	include "pages/home.html.php";
} elseif (file_exists("pages/$page.html.php")) {
	include "pages/$page.html.php";
} else {
	include "pages/notFound.html.php";
}

?>