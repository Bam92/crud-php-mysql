<?php
function db_connect()
{
    $host = "local.tracker.com" ?? "localhost";

    require ($_SERVER['HTTP_HOST'] == $host) ? "config/dev.php" : "config/prod.php";

    try {
        $connection = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $err) {
        echo "Database connection error. <br>" . $err->getMessage();
        exit;
    }
    return $connection;
}