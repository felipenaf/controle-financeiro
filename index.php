<?php

$page = isset($_GET['page']) ? $_GET['page'] : '';
if (!$page) {
	include "pages/home.html.php";
} elseif (file_exists("pages/$page.html.php")) {
	include "pages/$page.html.php";
} else {
	include "pages/notFound.html.php";
}

?>