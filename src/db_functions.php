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

function get_one_product_by_id($connection, $id)
{
    // SQL query
    $sql = "SELECT * FROM product WHERE product_id = $id";

    // execute query and collect results
    $statement = $connection->query($sql);
    $product = $statement->fetch();

    return $product;
}