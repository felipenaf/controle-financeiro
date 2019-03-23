<?php

session_start();
ini_set('display_errors', false);
ini_set("default_charset", "utf-8");
mb_internal_encoding("utf-8");
defined('ROOT_PATH') || define("ROOT_PATH", realpath(''));
require_once "vendor/autoload.php";

$page = array();
if (isset($_GET['page']) && $_GET['page'] != 'home') {
	$page = $_GET['page'];
	$page = array_filter(explode("/", $page));
	if ($page[1]) {
		$file = $page[0] . "/" . $page[1] . ".src.php";
	} else {
		$file = $page[0] . ".src.php";
	}
} else {
	if (empty($_SESSION['usuario'])) {
		$page[] = 'autenticacao/login';
		$file = $page[0] . ".src.php";
	} else {
		$page[] = 'home';
		$file = $page[0] . ".src.php";
	}
}

if ($file != "autenticacao/login.src.php") {
	if (empty($_SESSION['usuario'])) {
		header("location: /autenticacao/login&erro=1");
	} elseif (file_exists("pages/$file")) {
		include "pages/$file";
	} else {
		include "pages/notFound.src.php";
	}
} elseif (file_exists("pages/$file")) {
	include "pages/$file";
} else {
	include "pages/notFound.src.php";
}