<?php
require_once "../model/model.php";

$projects = get_all_projects();

if (isset($_POST['submit'])) {
    $id = trim($_POST['project']);
    $title = trim($_POST['title']);
    $date = trim($_POST['date']);
    $time = trim($_POST['time']);

    if (empty($id) || empty($title) || empty($date) || empty($time)) {
        $error_message = "One or more fields empty";
    } else {
        add_task($id, $title, $date, $time);

        header('Refresh:4; url=task_list.php');
        $confirm_message = 'Task added successfully';
    }
}

require "../views/task.php";