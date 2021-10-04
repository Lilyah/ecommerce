<?php

ob_start();

session_start();

/* \ or / depending on what system you are
*/
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

/* Defining paths for front and back
*/
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

/* DB definitions
*/
defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASSWORD") ? null : define("DB_PASSWORD", "");
defined("DB_NAME") ? null : define("DB_NAME", "ecommerce_db");

/* Connect to the DB
*/
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


require_once("funtions.php");

?>