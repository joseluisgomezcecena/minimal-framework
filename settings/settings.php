<?php
/*
App Settings for project
*/

ob_start();

date_default_timezone_set("America/Tijuana");

if(isset($_GET['page']))
    $page = $_GET['page'];
else
    $page = "";
    
//require_once("functions/users/users.php");


?>