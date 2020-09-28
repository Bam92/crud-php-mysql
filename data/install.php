<?php

/**
 * - Connect to the database engine using PDO 
 * - Create a new database and populate it
 * File order calls matter
 */

require "../model/config.php";

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $sql_db = file_get_contents("database.sql");
    $sql_structure = file_get_contents("structure.sql");
    $sql_content = file_get_contents("content.sql");

    // $statement->debugDumpParams($connection->exec($sql_db));

    if ($_SERVER['HTTP_HOST'] != 'localhost') {
        $sql_db = 'USE ' . $dbname . ';';
    }

    $connection->exec($sql_db);
    $connection->exec($sql_structure);
    $connection->exec($sql_content);

    echo "<p>Database created and/or populated successfully. <br><a href='../'>Home</a></p>";
} catch (PDOException $error) {
    echo $error->getMessage();
}