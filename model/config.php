<?php

/**
 * Configuration for database connection
 *
 */
$host       = "us-cdbr-east-02.cleardb.com";
$username   = "ba2f0cfd6b1793";
$password   = "b0cf6d24";
$dbname     = "heroku_133c7a2712ffc89";

if ($_SERVER['HTTP_HOST'] == 'localhost') {
  $host       = "localhost";
  $username   = "root";
  $password   = "";
  $dbname     = "tracker";
}

$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

// mysql://ba2f0cfd6b1793:b0cf6d24@us-cdbr-east-02.cleardb.com/heroku_133c7a2712ffc89?reconnect=true