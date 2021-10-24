<?php

require_once("../../config.php");

if(isset($_GET['id'])){
    $query = query("DELETE FROM slides WHERE slide_id = " . escape_string($_GET['id']) . " ");
    confirm($query);

    set_message("Banner deleted successfully");
    redirect("../../../public/admin/index?slides");

} else {
    redirect("../../../public/admin/index?slides");
}

?>