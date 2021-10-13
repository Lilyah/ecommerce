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
    unset($_SESSION['item_quantity']);
    unset($_SESSION['item_total']);
    redirect("checkout");    
}

/* Deleting the record from the cart 
*/
if(isset($_GET['delete'])){
    $_SESSION['product_' . $_GET['delete']] = '0'; 
    unset($_SESSION['item_quantity']);
    unset($_SESSION['item_total']);
    redirect("checkout");    
}

/* Displaying items in cart
*/
function cart(){

    $item_quantity = 0;
    $total = 0;

    // If the $_SESSION is "product_"
    foreach($_SESSION as $name => $value){

        /* Not showing products if they are not added to the cart */
        if($value > 0){

            if(substr($name, 0, 8) == "product_"){

                $lenght = strlen($name) - 8;
                $id = substr($name, 8, $lenght);

                $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id) . " ");
                confirm($query);

                while($row = fetch_array($query)){
                    $subtotal = $row['product_price']*$value;
                    $item_quantity += $value;
                    $product = <<<DELIMETER
                    <tr>
                        <td>{$row['product_title']}</td>
                        <td>&#36;{$row['product_price']}</td>
                        <td>{$value}</td>
                        <td>&#36;{$subtotal}</td>
                        <td>
                            <a class="btn btn-success" href="cart?add={$row['product_id']}"><span class="glyphicon glyphicon-plus"></span></a>
                            <a class="btn btn-warning" href="cart?remove={$row['product_id']}"><span class="glyphicon glyphicon-minus"></span></a>
                            <a class="btn btn-danger" href="cart?delete={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a>
                        </td>
                    </tr>
                DELIMETER;
    
                echo $product;

                $_SESSION['item_quantity'] = $item_quantity;
                $_SESSION['item_total'] = $total += $subtotal;
                }
            }
        }
    }
}


?>


  