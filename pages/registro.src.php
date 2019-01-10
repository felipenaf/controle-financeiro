<?php

var_dump($_POST);
include ROOT_PATH . "/model/Connection.class.php";

$con = new Connection();
$con->getConnection();
var_dump($con);

include "registro.html.php";
