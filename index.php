<?php

ini_set("default_charset", "utf-8");
mb_internal_encoding("utf-8");

defined('ROOT_PATH') || define('ROOT_PATH', realpath(''));

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$page = array_filter(explode("/", $page));

$file = $page[0] . ".src.php";

var_dump($file);

if (file_exists("pages/$file")) {
	include "pages/$file";
} else {
	include "pages/notFound.src.php";
}

?>