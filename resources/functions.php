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
    $query = query("SELECT * FROM products WHERE product_quantity >= 1");
    confirm($query);

    /* Developing pagination
    */
    /* Counting the number of products in the DB */
    $rows = mysqli_num_rows($query);
    if(isset($_GET['page'])){
        $page = preg_replace('#[^0-9]#', '', $_GET['page']);
    } else {
        $page = 1;
    }

    $perPage = 6; // Products per page
    $lastPage = ceil($rows / $perPage); // Calculating witch is the last page

    if($page < 1){
        $page = 1;
    } elseif($page > $lastPage){
        $page = $lastPage;
    };

    /* The middle numbers in pagination system */
    $middleNumbers = '';
    $subtracting1 = $page - 1;
    $subtracting2 = $page - 2;
    $addition1    = $page + 1;
    $addition2    = $page + 2;

    if($page == 1){
        $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$addition1.'">' .$addition1. '</a></li>';
    } elseif ($page == $lastPage){
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$subtracting1.'">' .$subtracting1. '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
    } elseif ($page > 2 && $page < ($lastPage - 1)){
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$subtracting2.'">' .$subtracting2. '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$subtracting1.'">' .$subtracting1. '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$addition1.'">' .$addition1. '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$addition2.'">' .$addition2. '</a></li>';
    } elseif ($page > 1 && $page < $lastPage){
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$subtracting1.'">' .$subtracting1. '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$addition1.'">' .$addition1. '</a></li>';
    }

    /* The following code limit the showing product per page at 6s
    /* and at the same time it says "start from 6, 12, 18 etc... 
    */
    $limit = 'LIMIT ' . ($page-1)*$perPage . ',' . $perPage;
    $query2 = query("SELECT * FROM products $limit");
    confirm($query2);

    $outputPagination = "";

    // Displaying the "Back" btn
    if($page != 1){
        $prev = $page -1;
        $outputPagination .='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$prev.'">Back</a></li>';
    }

    // Displaying the middle numbers
    $outputPagination .= $middleNumbers;

    // Displaying the "Next" btn
    if($page != $lastPage){
        $next = $page +1;
        $outputPagination .='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$next.'">Next</a></li>';
    }

    while($row = fetch_array($query2)){
        $product_image = display_picture($row['product_image']);
        $product = <<<DELIMETER
        
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <a href="item.php?id={$row['product_id']}"><img style="height:180px" src="../resources/{$product_image}" alt=""></a>
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
   
    echo "<div class='text-center'><ul class='pagination'>{$outputPagination}</ul></div>";

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


/* Custom function for fetching all categories from the db and displaying them into admin/categories
*/
function get_categories_in_admin(){
    $query = query("SELECT * FROM categories");
    confirm($query);

    while($row = fetch_array($query)){
        $category = <<<DELIMETER

        <tr>
            <td>{$row['cat_id']}</td>
            <td>{$row['cat_title']}</td>
            <td>
                <a class="btn btn-danger" href="../../resources/templates/back/delete_category.php?id={$row['cat_id']}">Delete</a>
            </td>
        </tr>

        DELIMETER;

        echo $category;
    };
}


/* Custom function for inserting new category in to the db
*/
function add_category(){
    if(isset($_POST['add_category']) && trim($_POST['cat_title'])){ /* Check for the submit button */
       $cat_title = escape_string($_POST['cat_title']);

       $query = query("INSERT INTO categories (cat_title) VALUES ('{$cat_title}') ");
       $last_id = last_id();
       confirm($query);
       set_message("New category was added: ID {$last_id}");
    }
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
    $query = query("SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id']) . " AND product_quantity >=1");
    confirm($query);

    while($row = fetch_array($query)){
        $product_image = display_picture($row['product_image']);
        $products = <<<DELIMETER

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../resources/{$product_image}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
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
    $query = query("SELECT * FROM products WHERE product_quantity >=1");
    confirm($query);

    while($row = fetch_array($query)){
        $product_image = display_picture($row['product_image']);
        $products = <<<DELIMETER

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../resources/$product_image" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
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


/* Display products in admin
*/
function get_products_in_admin(){

    $query = query("SELECT * FROM products ORDER BY product_id DESC");
    confirm($query);

    while($row = fetch_array($query)){
        $category = show_product_category($row['product_category_id']);
        $product_image = display_picture($row['product_image']);
        $products = <<<DELIMETER
            <tr>
                <td>{$row['product_id']}</td>
                <td>{$row['product_title']}</td>
                <td><a href="index.php?edit_product&id={$row['product_id']}"><img width='100' src="../../resources/{$product_image}" alt=""></а></td>
                <td>{$category}</td>
                <td>{$row['product_price']}</td>
                <td>{$row['product_quantity']}</td>
                <td>
                    <a class="btn btn-warning" href="index.php?edit_product&id={$row['product_id']}">Edit</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="../../resources/templates/back/delete_product.php?id={$row['product_id']}">Delete</a>
                </td>
            </tr>

        DELIMETER;

        echo $products;
    }

}


/* Adding products in admin
*/
function add_product(){
    if(isset($_POST['publish'])){
        $product_title          = escape_string($_POST['product_title']);
        $product_category_id    = escape_string($_POST['product_category_id']);
        $product_price          = escape_string($_POST['product_price']);
        $product_quantity       = escape_string($_POST['product_quantity']);
        $product_description    = escape_string($_POST['product_description']);
        $product_image          = escape_string($_FILES['file']['name']);
        $product_image_tmp      = escape_string($_FILES['file']['tmp_name']); // temporary file location
        $product_short_desc     = escape_string($_POST['short_desc']);

        move_uploaded_file($product_image_tmp, UPLOAD_DIRECTORY . DS . $product_image);

        $query = query("INSERT INTO products (product_title, product_category_id, product_price, product_quantity, product_description, product_image, short_desc) VALUES ('{$product_title}', '{$product_category_id}', '{$product_price}', '{$product_quantity}', '{$product_description}', '{$product_image}', '{$product_short_desc}')");
        $last_id = last_id();
        confirm($query);
        set_message("New product was added: ID {$last_id}");
        redirect("index.php?products");
    }
}


/* Editing products in admin
*/
function update_product(){
    if(isset($_POST['update'])){
        $product_title          = escape_string($_POST['product_title']);
        $product_category_id    = escape_string($_POST['product_category_id']);
        $product_price          = escape_string($_POST['product_price']);
        $product_quantity       = escape_string($_POST['product_quantity']);
        $product_description    = escape_string($_POST['product_description']);
        $product_short_desc     = escape_string($_POST['short_desc']);
        $product_image          = escape_string($_FILES['file']['name']);
        $product_image_tmp      = escape_string($_FILES['file']['tmp_name']); // temporary file location

        if(empty($product_image)){
            $get_picture = query("SELECT product_image FROM products WHERE product_id =" . escape_string($_GET['id']) . "");
            confirm($get_picture);

            while($picture = fetch_array($get_picture)){
                $product_image = $picture['product_image'];
            }
        }

        move_uploaded_file($product_image_tmp, UPLOAD_DIRECTORY . DS . $product_image);


        $query = "UPDATE products SET ";
        $query .= "product_title        = '{$product_title}', ";
        $query .= "product_category_id  = '{$product_category_id}', ";
        $query .= "product_price        = '{$product_price}', ";
        $query .= "product_quantity     = '{$product_quantity}', ";
        $query .= "product_description  = '{$product_description}', ";
        $query .= "product_image        = '{$product_image}', ";
        $query .= "short_desc           = '{$product_short_desc}' ";
        $query .= "WHERE product_id =" . escape_string($_GET['id']);
        $query = query($query);
        confirm($query);
        set_message("Product has been updated");
        redirect("index.php?products");
    }
}


/* Category from the database will be on top of the <option> list 
/* and does not show again later in the list
*/
function show_categories_update_product()
{
    global $product_category_id;
 
    $query = query("SELECT * FROM categories");
    confirm($query);
 
    while($row = fetch_array($query)){
        if ($product_category_id != $row['cat_id']){
            $category_options = <<<HTML
 
                <option value="{$row['cat_id']}">{$row['cat_title']}</option>
 
            HTML;
        }
        else{
            $category_options = "";
        }
 
        echo $category_options;
    }
}


/* Custom function for fetching all categories from the db
*/
function show_categories_add_product_page(){
    $query = query("SELECT * FROM categories");
    confirm($query);

    while($row = fetch_array($query)){
    $category_options = <<<DELIMETER

        <option value="{$row['cat_id']}">{$row['cat_title']}</option>

    DELIMETER;

    echo $category_options;
    };
}


/* Showing category names in admin View products page based on its ID
*/
function show_product_category($product_category_id){
    $category_query = query("SELECT * FROM categories WHERE cat_id = '{$product_category_id}' ");
    confirm($category_query);

    while($category_row = fetch_array($category_query)){
        return $category_row['cat_title'];
    }
}


/* Displaying product image in Home
/* "uploads" is the directory
*/
function display_picture($picture){
    return "uploads" . DS . $picture;
}


/* Display all users in admin panel
/* admin/users
*/ 
function display_users(){
    $query = query("SELECT * FROM users");
    confirm($query);

    while($row = fetch_array($query)){
        $user_photo = display_picture($row['user_photo']);
        $category = <<<DELIMETER

            <tr>
                <td>{$row['user_id']}</td>
                <td><img width='30' src="../../resources/{$user_photo}" alt=""></td>
                <td>{$row['username']}</td>
                <td>{$row['user_email']}</td>
                <td>{$row['user_password']}</td>
                <td><a class="btn btn-danger" href="../../resources/templates/back/delete_user.php?id={$row['user_id']}">Delete</a></td>
            </tr>  

        DELIMETER;

        echo $category;
    };
}


/* Adding users in admin
*/
function add_user(){
    if(isset($_POST['add_user'])){
        $username         = escape_string($_POST['username']);
        $user_email       = escape_string($_POST['user_email']);
        $user_password    = escape_string($_POST['user_password']);
        $user_photo       = escape_string($_FILES['file']['name']);
        $user_photo_tmp   = escape_string($_FILES['file']['tmp_name']); // temporary file location

        move_uploaded_file($user_photo_tmp, UPLOAD_DIRECTORY . DS . $user_photo);

        $query = query("INSERT INTO users (username, user_email, user_password, user_photo) VALUES ('{$username}', '{$user_email}', '{$user_password}', '{$user_photo}')");
        $last_id = last_id();
        confirm($query);
        set_message("New user was added: ID {$last_id}");
        redirect("index.php?users");
    }
}


/* Displaying reports in admin
/* admin/reports
*/
function get_reports(){

    $query = query("SELECT * FROM reports ORDER BY report_id DESC");
    confirm($query);

    while($row = fetch_array($query)){
        $reports = <<<DELIMETER
            <tr>
                <td>{$row['report_id']}</td>
                <td>{$row['order_id']}</td>
                <td>{$row['product_id']}</td>
                <td>{$row['product_title']}</td>
                <td>{$row['product_price']}</td>
                <td>{$row['product_quantity']}</td>
                <td>
                    <a class="btn btn-danger" href="../../resources/templates/back/delete_report.php?id={$row['report_id']}">Delete</a>
                </td>
            </tr>

        DELIMETER;

        echo $reports;
    }
}


/* Adding banners from admin panem
/* admin/slides
*/
function add_slides(){

    if(isset($_POST['add_slide']) && trim($_POST['slide_title']) && $_FILES['file']['name'] != "" ){
        $slide_title        = escape_string($_POST['slide_title']);
        $slide_image        = escape_string($_FILES['file']['name']);
        $slide_image_tmp    = escape_string($_FILES['file']['tmp_name']);

        move_uploaded_file($slide_image_tmp, UPLOAD_DIRECTORY . DS . $slide_image);

        $query = query("INSERT INTO slides (slide_title, slide_image) VALUES ('{$slide_title}', '{$slide_image}')");
        confirm($query);
        set_message("New banner was added");

    }
}


/* Displaying the last uploadet banner in admin panel
/* admin/slides
*/
function get_current_slide_in_admin(){
    $query = query("SELECT * FROM slides ORDER BY slide_id DESC LIMIT 1");
    confirm($query);

    while($row = fetch_array($query)){
        $slide_image = display_picture($row['slide_image']);
        $slide_current = <<<DELIMETER

        <div class="col-xs-8">
            <img class="img-responsive" src="../../resources/{$slide_image}" alt="">
        </div>

        DELIMETER;

        echo $slide_current;
    }
}


/* Displaying all slides becides the active one (the first one) on front slider
/* public/index
*/
function get_slides(){
    $query = query("SELECT * FROM slides");
    confirm($query);

    while($row = fetch_array($query)){
        $slide_image = display_picture($row['slide_image']);
        $slides = <<<DELIMETER

        <div class="item">
            <img class="slide-image" src="../resources/{$slide_image}" alt="">
        </div>

        DELIMETER;

        echo $slides;
    }
}


/* Displaying the active slide on front slider
/* public/index
*/
function get_active_slide(){
    $query = query("SELECT * FROM slides ORDER BY slide_id DESC LIMIT 1");
    confirm($query);

    while($row = fetch_array($query)){
        $slide_image = display_picture($row['slide_image']);
        $slide_active = <<<DELIMETER

        <div class="item active">
            <img class="slide-image" src="../resources/{$slide_image}" alt="">
        </div>

        DELIMETER;

        echo $slide_active;
    }
}


/* Slider
*/
function get_slide_thumbnails_in_admin(){
    $query = query("SELECT * FROM slides ORDER BY slide_id DESC");
    confirm($query);

    while($row = fetch_array($query)){
        $slide_image = display_picture($row['slide_image']);
        $slide_thumbnail = <<<DELIMETER
    
        <div class="col-xs-6 cold-md-3">
        <hr>
                <a href="">
                  <img class="img-responsive" style="margin-top: 10px;" src="../../resources/{$slide_image}" alt="">
                </a>
                <a class="btn btn-danger image_container pull-right" style="margin-top: 3px;" href="../../resources/templates/back/delete_slide.php?id={$row['slide_id']}">Delete</a>
        </div>
        
        DELIMETER;

        echo $slide_thumbnail;
    }
}

?>