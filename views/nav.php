<?php $uri = getRootURI(); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidebar"
            aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="<?php echo $uri; ?>" class="navbar-brand">
            the Tracker App </a>
    </div>
</nav>

<!-- Sidebar -->
<div class="col-2 navbar-dark bg-dark" id="sidebar">
    <nav class="navbar">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link active" aria-current="page"
                    href=" <?php echo $uri; ?>">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $uri . "/projects/list"; ?>">Projects list</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $uri . "/tasks/list"; ?>">Tasks list</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $uri . "/projects/add"; ?>">Add project</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $uri . "/tasks/add"; ?>">Add task</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $uri . "/reports"; ?>">Reports</a></li>
        </ul>
    </nav>
</div>