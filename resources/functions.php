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
                    <a class="btn btn-primary" target="_blank" href="#">View Product</a>
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


?>