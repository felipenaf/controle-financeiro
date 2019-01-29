<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/GrupoController.class.php";

$url = explode("/", $_GET['page']);

GrupoController::deleteGrupo($url[2]);
