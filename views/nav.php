<?php

$uri = getRootURI();

?>

<nav>
    <ul>
        <li><a href="<?php echo $uri; ?>">theTrackerApp</a></li>
        <li><a href="<?php echo $uri . "/projects/list"; ?>">Projects list</a></li>
        <li><a href="<?php echo $uri . "/tasks/list"; ?>">Tasks list</a></li>
        <li><a href="<?php echo $uri . "/projects/add"; ?>">Add project</a></li>
        <li><a href="<?php echo $uri . "/tasks/add"; ?>">Add task</a></li>
        <li><a href="<?php echo $uri . "/reports"; ?>">Reports</a></li>
    </ul>
</nav>