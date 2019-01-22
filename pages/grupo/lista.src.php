<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controller/GrupoController.class.php";

$grupos = GrupoController::getGrupos();
include "lista.html.php";
