<?php
$title = 'Add Project';

ob_start();
require "nav.php";
?>

<div class="container">

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


<?php
$content = ob_get_clean();
include 'layout.php';
?>