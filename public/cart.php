<?php 

require_once("../resources/config.php");

/* Adding one quantity to the cart 
*/
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

/* Removing one from the cart 
*/
if(isset($_GET['remove'])){
    $_SESSION['product_' . $_GET['remove']] --; 
    redirect("checkout");    
}

/* Deleting the record from the cart 
*/
if(isset($_GET['delete'])){
    $_SESSION['product_' . $_GET['delete']] = '0'; 
    redirect("checkout");    
}


?>


  