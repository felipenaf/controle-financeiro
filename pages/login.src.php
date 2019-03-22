<?php
include_once 'login/home.src.php';
if ($_GET['erro'] == "1") {
	echo "<h1>Usuário ou senha incorreto !!</h1>";
}