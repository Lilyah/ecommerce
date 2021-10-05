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
function confirm(){
    global $connection;
    if(!$result){
        die("QUERY FAILED. REASON: " . mysqli_error($connection));
    }
}


/* Custom function for fetch data from db
*/
function fetch_array($result){
    return mysqli_query($result);
}


/* Custom function for preventing sql injections
*/
function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}

?>