<?php

$page = isset($_GET['page']) ? $_GET['page'] : '';
if (!$page) {
	include "pages/home.php";
} elseif (file_exists("pages/$page.php")) {
	include "pages/$page.php";
} else {
	include "pages/notFound.php";
}

?>