<?php
require_once "./model/model.php";

$taskCount = get_all_tasks_count();
$projectCount =  get_all_projects_count();
$title = 'theTrackerApp';

$uri = getRootURI();

ob_start();
?>
<div class="d-flex  flex-md-row flex-column justify-content-center align-items-center">
    <div id="welcome" class="d-flex justify-content-end flex-grow-1 bg-dark text-white px-5 py-5">
        <h1> Become more productive. Focus on your tasks. </h1>
    </div>
    <div id="call_to_action" class="d-flex flex-column align-items-center flex-grow-1 px-5 py-5">
        <h2>theTrackerApp helps </h2>
        <h2>track your time</h2>
        <a href="<?php echo $uri . "/projects/add"; ?>" class="btn btn-primary btn-lg">Get started</a>
    </div>
</div>

<div id="card" class="d-inline-flex flex-md-row flex-column mt-5 justify-content-center align-items-center">
    <a href="<?php echo $uri . "/projects/list"; ?>">
        <div class="card d-flex flex-md-row px-3 py-3 justify-content-center">
            <div id="desc">
                <h4>projects</h4>
                <h1><?php echo $projectCount; ?></h1>
            </div>
            <a href="<?php echo $uri . "/projects/add"; ?>" class="align-self-center justify-self-end ml-4">
                <div>
                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path fill-rule="evenodd"
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </div>
            </a>
        </div>
    </a>
    <a href="<?php echo $uri . "/tasks/list"; ?>">
        <div class="card d-flex justify-content-center px-3 py-3 ml-2 flex-row">
            <div id="desc">
                <h4>tasks</h4>
                <h1><?php echo $taskCount; ?></h1>
            </div>
            <a href="<?php echo $uri . "/tasks/add"; ?>" class="align-self-center justify-self-end ml-4">
                <div>
                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path fill-rule="evenodd"
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </div>
            </a>
        </div>
    </a>
</div>

<?php
$content = ob_get_clean();
include 'views/layout.php';
?>