<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project list</title>
</head>

<body>
    <?php
    try {
        require "./config.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql =  'SELECT * FROM projects ORDER BY title';

        $statement = $connection->query($sql);
        // $result = $statement->fetchAll();

        $projectCount = $statement->rowCount();
    } catch (PDOException $err) {
        echo $sql . "<br>" . $err->getMessage();
    }
    ?>
    <div>
        <h1>Project list (<?php echo $projectCount ?>)</h1>
        <!-- If there's not yet data -->
        <?php
        if ($projectCount <= 0) {
            echo "<p>You have not yet added any project </p>";
            echo "<p><a href='#'>Add project</a></p>";
        }

        ?>

        <?php foreach ($statement as $row) : ?>
        <ul>
            <li>
                <?php echo $row["title"] ?>
            </li>
        </ul>
        <?php endforeach; ?>
    </div>

    <p><a href="./">Home</a></p>
</body>

</html>