<?php
$title = 'Add Task';

ob_start();
?>

<div class="container">
    <p><a href="../">Go Home</a></p>

    <h1><?php echo $title ?></h1>
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
            <?php foreach ($projects as $project) { ?>
            <option value="<?php echo $project['id'] ?>"><?php echo $project['title'] ?></option>
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


<?php
$content = ob_get_clean();
include 'layout.php';
?>