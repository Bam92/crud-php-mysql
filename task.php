<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    try {
        require "./config.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = 'SELECT * FROM projects ORDER BY title';

        $get_project_list = $connection->query($sql)->fetchAll();

        if (isset($_POST['submit'])) {
            $id = trim($_POST['project']);
            $title = trim($_POST['title']);
            $date = $_POST['date'];
            $time = $_POST['time'];

            $sql =  'INSERT INTO tasks(project_id, title, date_task, time_task) VALUES(:id, :title, :date, :time)';
            $statement = $connection->prepare($sql);

            if (empty($id) || empty($title) || empty($date) || empty($time)) {
                $error_message = "One or more fields empty";
            } else {
                $new_project = array(
                    'id' => $id,
                    'title' => $title,
                    'date' => $date,
                    'time' => $time
                );

                $statement->execute($new_project);

                $confirm_message = 'Added successfully';
            }
        }
    } catch (PDOException $err) {
        echo $sql . "<br>" . $err->getMessage();
    }

    ?>
    <div>
        <h1>Add task</h1>
        <?php
        if (isset($error_message)) {
            echo "<p class='message_error'>$error_message</p>";
        }

        if (isset($confirm_message)) {
            echo "<p class='message_ok'>$confirm_message</p>";
        }
        ?>

        <form method="post">
            <label for="project">Project</label>
            <select name="project" id="project">
                <option value="">Select a project</option>
                <?php foreach ($get_project_list as $item) { ?>
                <option value="<?php echo $item['id'] ?>"><?php echo $item['title'] ?></option>
                <?php } ?>
            </select>
            <label for="title">Title</label>
            <input type="text" placeholder="New task" name="title" id="title">
            <label for="date">Date</label>
            <input type="date" name="date" id="date">
            <label for="time">Time</label>
            <input type="number" name="time" id="time">

            <input type="submit" name="submit" value="Add">
        </form>
    </div>

    <p><a href="./">Home</a></p>
</body>

</html>