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

/* Custom function for 
*/
function get_products(){
    $query = query("SELECT * FROM products");
    confirm($query);

    while($row = fetch_array($query)){
        echo $row['product_price'];
    }
}


?>