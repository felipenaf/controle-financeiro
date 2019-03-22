<?php

unset($_SESSION['usuario']);
unset($_SESSION['id_usuario']);

header("location: ../login");
