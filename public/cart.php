<?php 

require_once("../resources/config.php");

if(isset($_GET['add'])){
    $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['add']) . "");
    confirm($query);

    while($row = fetch_array($query)){
        if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]){ /* If there is no quantity of the product in the DB */
            $_SESSION['product_' . $_GET['add']] +=1; /* Adding to the cart one more */
            redirect("checkout");
        } else {
            set_message("We only have " . $row['product_quantity'] . " available of this product.");
            redirect("checkout");
        }
    }
}

?>


  