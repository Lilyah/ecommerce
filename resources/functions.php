<?php

/* Custom function for redirect
*/
function redirect($location){
    header("Location: $location");
}

/* Custom function for query
*/
function query($sql){
    global $connection;
    return mysqli_query($connection, $sql);
}


/* Custom function confirming connection to the db
*/
function confirm($result){
    global $connection;
    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }
}


/* Custom function for fetch data from db
*/
function fetch_array($result){
    return mysqli_fetch_array($result);
}


/* Custom function for preventing sql injections
*/
function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}


/* Custom function for appearance of message
*/
function set_message($msg){
    if(!empty($msg)){
        $_SESSION['message'] = $msg;
    } else {
        $msg = "";
    }
}


/* Custom function for display of message
*/
function display_message(){
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']); /* Whe refresh the page the message wil dissapear */
    }
}



/* Custom function for fetching all products from the db
*/
function get_products(){
    $query = query("SELECT * FROM products");
    confirm($query);

    while($row = fetch_array($query)){
        $product = <<<DELIMETER
        
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
                <div class="caption">
                    <h4 class="pull-right">&#36;{$row['product_price']}</h4>
                    <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                    </h4>
                    <p>{$row['product_description']}</p>
                    <a class="btn btn-primary" target="_blank" href="../resources/cart.php?add={$row['product_id']}">Add to cart</a>
                </div>
            </div>
        </div>

        DELIMETER;

        echo $product;
    }
}


/* Custom function for fetching all categories from the db
*/
function get_categories(){
    $query = query("SELECT * FROM categories");
    confirm($query);

    while($row = fetch_array($query)){
        $category = <<<DELIMETER

        <a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>

        DELIMETER;

        echo $category;
    };
}


/* Custom function for fetching cpesific category
*/
function get_category(){
    $query = query("SELECT * FROM categories WHERE cat_id=" . escape_string($_GET['id']) . " ");
    confirm($query);    

    while($row = fetch_array($query)){
        $category = <<<DELIMETER

        <header class="jumbotron hero-spacer">
            <h1>Some title here</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <p><a class="btn btn-primary btn-large">Call to action!</a>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>{$row['cat_title']}</h3>
            </div>
        </div>
        <!-- /.row -->

        DELIMETER;

        echo $category;
    };

}


/* Custom function for fetching all products from specific category
*/
function get_products_in_cat_page(){
    $query = query("SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)){
        $products = <<<DELIMETER

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="{$row['product_image']}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="item.php?id={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>
        
        DELIMETER;

        echo $products;
    }

}
/* Custom function for fetching all products from specific category
*/
function get_products_in_shop_page(){
    $query = query("SELECT * FROM products");
    confirm($query);

    while($row = fetch_array($query)){
        $products = <<<DELIMETER

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="{$row['product_image']}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="item.php?id={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </ p>
                    </div>
                </div>
            </div>
        
        DELIMETER;

        echo $products;
    }
}


/* Custom function for login user
*/
function login_user(){
    if(isset($_POST['submit'])){ /* Check for the submit button */
       $username = escape_string($_POST['username']);
       $user_password = escape_string($_POST['user_password']);

       $query = query("SELECT * FROM users WHERE username = '{$username}' AND user_password = '{$user_password}' ");
       confirm($query);

       if(mysqli_num_rows($query) == 0){
           set_message("Your password or username are wrong");
           redirect("login");
       } else {
           $_SESSION['username'] = $username; // start a session for login users
           redirect("admin/index");
           set_message("Welcome to admin, {$username}!");
       }
    }
}


/* Custom function for sending message from contact form
/* The purpose of this function is FAKE functionality
*/
function send_message(){
    if(isset($_POST['submit'])){
        $to = "reciever_email@fakedomain.com";
        $from_name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $headers = "From: {$from_name} {$email}";

        $result = mail($to, $subject, $message, $headers);

        if(!$result){
            set_message("Your message has not been send");
            redirect("contact");
        } else {
            set_message("Your message has been send");
            redirect("contact");
        }
    }
}


/* Will give the last inserted id
*/
function last_id(){
    global $connection;
    return mysqli_insert_id($connection);
}


/* Display orders in admin
*/
function display_orders(){
    $query = query("SELECT * FROM orders");
    confirm($query);

    while($row = fetch_array($query)){
        $orders = <<<DELIMETER

            <tr>
                <td>{$row['order_id']}</td>
                <td>{$row['order_amount']}</td>
                <td>{$row['order_transaction']}</td>
                <td>{$row['order_currency']}</td>
                <td>{$row['order_status']}</td>
                <td>
                    <a class="btn btn-danger" href="../../resources/templates/back/delete_order.php?id={$row['order_id']}"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
            </tr>
        
        DELIMETER;

        echo $orders;
    }
}


?>