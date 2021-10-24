<?php

require_once("../../config.php");

if(isset($_GET['id'])){

    /* Deleting the file from the upload folder 
    */
    /* First we are pulling the file name */
    $pull_title_query = query("SELECT user_photo FROM users WHERE user_id = " . escape_string($_GET['id']) . " ");
    confirm($pull_title_query);

    /* Second we are finding the file and deleting it with unlink */
    $row = fetch_array($pull_title_query);
    $path_to_file = UPLOAD_DIRECTORY . DS . $row['user_photo'];
    unlink($path_to_file);

    /* Deleting the record from the DB */
    $query = query("DELETE FROM users WHERE user_id = " . escape_string($_GET['id']) . " ");
    confirm($query);

    set_message("User deleted successfully");
    redirect("../../../public/admin/index?users");

} else {
    redirect("../../../public/admin/index?users");
}

?>