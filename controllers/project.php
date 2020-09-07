<?php
require_once "../model/model.php";

if (isset($_POST['submit'])) {
    $title = trim($_POST['title']);
    $category = $_POST['category'];

    if (empty($title) || empty($category)) {
        $error_message = "Title or category empty";
    } else {
        add_project($title, $category);
        header('Refresh:4; url=project_list.php');
        $confirm_message = 'Project added successfully';
    }
}

require "../views/project.php";