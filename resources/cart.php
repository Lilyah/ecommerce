<?php 

require_once("config.php");

/* Adding one quantity to the cart 
*/
if(isset($_GET['add'])){
    $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['add']) . "");
    confirm($query);

    while($row = fetch_array($query)){
        if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]){ /* If there is no quantity of the product in the DB */
            $_SESSION['product_' . $_GET['add']] +=1; /* Adding to the cart one more */
            redirect("../public/checkout");
        } else {
            set_message("We only have " . $row['product_quantity'] . " available of this product.");
            redirect("../public/checkout");
        }
    }
}

/* Removing one from the cart 
*/
if(isset($_GET['remove'])){
    $_SESSION['product_' . $_GET['remove']] --; 
    unset($_SESSION['item_quantity']);
    unset($_SESSION['item_total']);
    redirect("../public/checkout");    
}

/* Deleting the record from the cart 
*/
if(isset($_GET['delete'])){
    $_SESSION['product_' . $_GET['delete']] = '0'; 
    unset($_SESSION['item_quantity']);
    unset($_SESSION['item_total']);
    redirect("../public/checkout");    
}

/* Displaying items in cart
*/
function cart(){

    $item_quantity = 0;
    $total = 0;

    /* Default values for PayPal
    */
    $item_name = 1;
    $item_number = 1;
    $amount = 1;
    $quantity = 1;

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
                            <a class="btn btn-success" href="../resources/cart.php?add={$row['product_id']}"><span class="glyphicon glyphicon-plus"></span></a>
                            <a class="btn btn-warning" href="../resources/cart.php?remove={$row['product_id']}"><span class="glyphicon glyphicon-minus"></span></a>
                            <a class="btn btn-danger" href="../resources/cart.php?delete={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a>
                        </td>
                    </tr>
 
                    <input type="hidden" name="item_name_{$item_name}" value="{$row['product_title']}">
                    <input type="hidden" name="item_number_{$item_number}" value="{$row['product_id']}">
                    <input type="hidden" name="amount_{$amount}" value="{$row['product_price']}">
                    <input type="hidden" name="quantity_{$quantity}" value="{$value}">
                DELIMETER;
    
                echo $product;

                $item_name++;
                $item_number++;
                $amount++;
                $quantity++;

                $_SESSION['item_quantity'] = $item_quantity;
                $_SESSION['item_total'] = $total += $subtotal;
                }
            }
        }
    }
}


function show_paypal_button(){
    if(isset($_SESSION['item_quantity'])){

    $paypal_button = <<<DELIMETER
        <input type="image" name="upload"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
        alt="PayPal - The safer, easier way to pay online">
    DELIMETER;

    echo $paypal_button;
    } 
}


/* Displaying items in cart
*/
function proccess_transaction(){

    /* Thank you page will display only if the transaction was successful
    */
    if(isset($_GET['tx'])){
        $amount = $_GET['amt'];
        $currency = $_GET['cc'];
        $transasction = $_GET['tx'];
        $status = $_GET['st'];

        $item_quantity = 0;
        $total = 0;

        // If the $_SESSION is "product_"
        foreach($_SESSION as $name => $value){

            /* Not showing products if they are not added to the cart */
            if($value > 0){

                if(substr($name, 0, 8) == "product_"){

                    $lenght = strlen($name) - 8;
                    $id = substr($name, 8, $lenght);

                    $send_order = query("INSERT INTO orders (order_amount, order_transaction, order_status, order_currency) VALUES ('{$amount}', '{$transasction}', '{$status}', '{$currency}')");

                    $last_id = last_id();
                    confirm($send_order);

                    $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id) . " ");
                    confirm($query);

                    while($row = fetch_array($query)){
                        $product_price = $row['product_price'];
                        $product_title = $row['product_title'];
                        $subtotal = $row['product_price']*$value;
                        $item_quantity += $value;

                        $insert_report = query("INSERT INTO reports (order_id, product_id, product_title, product_price, product_quantity) VALUES ('{$last_id}', '{$id}', '{$product_title}', '{$product_price}', '{$value}')");
                        confirm($insert_report);
                    }

                    $total += $subtotal;
                
                }
            }
        }

        session_destroy();

    } else {
        redirect("index");
    }
}

?>


  