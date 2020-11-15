<?php

/**
 * Configuration for local development database connection
 *
 */

$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "tracker";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

// mysql://ba2f0cfd6b1793:b0cf6d24@us-cdbr-east-02.cleardb.com/heroku_133c7a2712ffc89?reconnect=true