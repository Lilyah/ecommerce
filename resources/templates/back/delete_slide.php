<?php

require_once("../../config.php");

if(isset($_GET['id'])){

    /* Deleting the file from the folder 
    */
    /* First we are pulling the file name */
    $pull_title_query = query("SELECT slide_image FROM slides WHERE slide_id = " . escape_string($_GET['id']) . " ");
    confirm($pull_title_query);

    /* Second we are finding the file and deleting it with unlink */
    $row = fetch_array($pull_title_query);
    $path_to_file = UPLOAD_DIRECTORY . DS . $row['slide_image'];
    unlink($path_to_file);

    /* Deleting the record from the DB */
    $delete_query = query("DELETE FROM slides WHERE slide_id = " . escape_string($_GET['id']) . " ");
    confirm($delete_query);


    set_message("Banner deleted successfully");
    redirect("../../../public/admin/index?slides");

} else {
    redirect("../../../public/admin/index?slides");
}

?>