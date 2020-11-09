<?php
$title = 'Tasks list';

ob_start();
?>

<h1><?php echo $title . " (" . $taskCount . ")"  ?></h1>
<a class="nav-link" href="/tasks/add">
    <button>Add task</button>
</a>

<!-- If there's not yet data -->
<?php if ($taskCount == 0) { ?>
<div>
    <p>You have not yet added any project </p>
    <p><a href='../controllers/task.php'>Add task</a></p>
</div>

<?php }
if (isset($error_message)) {
    echo "<p class='message_error'>$error_message</p>";
} ?>

<ul>
    <?php foreach ($tasks as $task) : ?>
    <li>
        <?php echo escape($task["title"]) ?>
        <form method="post">
            <input type="hidden" value="<?php echo $task["id"]; ?>" name="delete">
            <input type="submit" value="Delete" id="delete">
        </form>
    </li>
    <?php endforeach; ?>
</ul>

<?php
$content = ob_get_clean();
include 'layout.php';
?>