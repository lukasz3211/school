<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASS', '');


function get_connection()
{
    // DSN - the Data Source Name - requred by the PDO to connect
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;

    // attempt to create a connection to the database
    try {
        $connection = new \PDO($dsn, DB_USER, DB_PASS);
    } catch (\PDOException $e) {
        // deal with connection error
        print 'there was an ERROR trying to connect to the databaseâ€¦';
    }

    return $connection;

}

function get_all_products($connection)
{
    // SQL query
    $sql = 'SELECT * FROM product';

    // execute query and collect results
    $statement= $connection->query($sql);
    $product = $statement->fetchAll();

    return $product;
}

function get_one_product_by_id(PDO $connection, $id)
{
    // SQL query
    $sql = "SELECT * FROM product WHERE product_id = $id";

    // execute query and collect results
    $statement = $connection->query($sql);
    $producti = $statement->fetch();

    return $producti;
}
function delete_product($connection, $id)
{
    $sql = "DELETE FROM product WHERE product_id=$id";

    $numRowsAffected = $connection->query($sql);

    if($numRowsAffected > 0){
        $queryWasSuccessful = true;
    } else {
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}
function create_product($connection, $ProductCode, $Name, $ProductDesc, $ProductImage, $Price, $StockNum)
{
    $sql = "INSERT INTO product (product_code, product_name, product_desc, product_img_name, price, stock_num) 
    VALUES ('$ProductCode', '$Name', '$ProductDesc', '$ProductImage', $Price, $StockNum)";

    $numRowsAffected = $connection->exec($sql);

    // can set Boolean variable in a single statement
    // 	$queryWasSuccessful = ($numRowsAffected > 0);

    if($numRowsAffected > 0){
        $queryWasSuccessful = true;
    } else {
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}
