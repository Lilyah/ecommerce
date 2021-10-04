<?php

/* \ or / depending on what system you are
*/
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

/* Defining paths for frontt and back
*/
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

/* The ROOT of the Ecommerce 
*/
echo __DIR__;


?>