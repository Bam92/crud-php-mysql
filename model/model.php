<?php
require "connection.php";

$connection = db_connect();

// --- PROJECTS ---
function get_all_projects()
{
    try {
        global $connection;

        $sql =  'SELECT * FROM projects ORDER BY title';
        $projects = $connection->query($sql);

        return $projects;
    } catch (PDOException $err) {
        echo $sql . "<br>" . $err->getMessage();
        exit;
    }
}

function get_all_projects_count()
{
    try {
        global $connection;

        $sql =  'SELECT COUNT(id) AS nb FROM projects';
        $statement = $connection->query($sql)->fetch();

        $projectCount = $statement['nb'];

        return $projectCount;
    } catch (PDOException $err) {
        echo $sql . "<br>" . $err->getMessage();
        exit;
    }
}

function add_project($title, $category)
{
    try {
        global $connection;

        $sql =  'INSERT INTO projects(title, category) VALUES(?, ?)';

        $statement = $connection->prepare($sql);
        $new_project = array($title, $category);

        $affectedLines = $statement->execute($new_project);

        return $affectedLines;
    } catch (PDOException $err) {
        echo $sql . "<br>" . $err->getMessage();
        exit;
    }
}

// --- TASKS ---
function get_all_tasks()
{
    try {
        global $connection;

        $sql =  'SELECT * FROM tasks ORDER BY date_task';
        $tasks = $connection->query($sql);

        return $tasks;
    } catch (PDOException $err) {
        echo $sql . "<br>" . $err->getMessage();
        exit;
    }
}

function get_all_tasks_count()
{
    try {
        global $connection;

        $sql =  'SELECT COUNT(id) AS nb FROM tasks';
        $statement = $connection->query($sql)->fetch();

        $taskCount = $statement['nb'];

        return $taskCount;
    } catch (PDOException $err) {
        echo $sql . "<br>" . $err->getMessage();
        exit;
    }
}

function add_task($id, $title, $date, $time)
{
    try {
        global $connection;

        $new_task = array(
            'project_id' => $id,
            'title'      => $title,
            'date_task'  => $date,
            'time_task'  => $time
        );

        // $sql =  'INSERT INTO tasks(project_id, title, date_task, time_task) VALUES(:id, :title, :date, :time)';
        $sql = sprintf(
            "INSERT INTO %s (%s) VALUES (%s)",
            "tasks",
            implode(",", array_keys($new_task)),
            ":" . implode(", :", array_keys($new_task))
        );

        $statement = $connection->prepare($sql);
        $affectedLines = $statement->execute($new_task);

        return $affectedLines;
    } catch (PDOException $err) {
        echo $sql . "<br>" . $err->getMessage();
        exit;
    }
}