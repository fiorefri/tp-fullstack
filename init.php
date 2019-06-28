<?php
//Incluímos todas las clases necesarias para operar y las instancias iniciales que necesite el proyecto.
include "clases/usuario.php";
include "clases/db.php";
include "clases/dbMysql.php";
include "clases/dbJson.php";
include "clases/validador.php";
include "clases/auth.php";

$dbAll = new DbMysql; //En caso de usar json cambiar por new DbJson
$auth = new Auth;
