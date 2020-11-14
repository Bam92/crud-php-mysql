<?php
function db_connect()
{
    try {
        require ($_SERVER['HTTP_HOST'] == "local.tracker.com" || $_SERVER['HTTP_HOST'] == "localhost") ? "config/dev.php" : "config/prod.php";

        $connection = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $err) {
        echo "Database connection error. <br>" . $err->getMessage();
        exit;
    }
    return $connection;
}