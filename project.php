<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        try {
            require "./config.php";

            $connection = new PDO($dsn, $username, $password, $options);

            $title = $_POST['title'];
            $category = $_POST['category'];

            $sql =  'INSERT INTO projects(title, category) VALUES(?, ?)';
            $statement = $connection->prepare($sql);

            if (empty($title) || empty($category)) {
                $error_message = "Title or category empty";
            } else {
                $new_project = array($title, $category);

                $statement->execute($new_project);

                $confirm_message = 'Added successfully';
            }
        } catch (PDOException $err) {
            echo $sql . "<br>" . $err->getMessage();
        }
    }

    ?>
    <div>
        <h1>Add Project</h1>
        <?php
        if (isset($error_message)) {
            echo "<p class='message_error'>$error_message</p>";
        }

        if (isset($confirm_message)) {
            echo "<p class='message_ok'>$confirm_message</p>";
        }
        ?>
        <form method="post">
            <label for="title">Title</label>
            <input type="text" placeholder="New project" name="title" id="title">
            <label for="category">Category</label>
            <select name="category" id="category">
                <option value="">Select a category</option>
                <option value="Professional">Professional</option>
                <option value="Personal">Personal</option>
                <option value="Charity">Charity</o ption>
            </select>
            <input type="submit" name="submit" value="Add">
        </form>
    </div>

    <p><a href="./">Home</a></p>
</body>

</html>