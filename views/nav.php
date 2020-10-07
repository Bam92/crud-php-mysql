<?php $uri = getRootURI(); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="subNav">
    <div class="container-fluid">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidebar"
            aria-controls="#sidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="<?php echo $uri; ?>" class="navbar-brand text-white">
            the Tracker App </a>
    </div>
</nav>

<!-- Sidebar -->
<div class="col-md-2 navbar navbar-expand-lg navbar-dark bg-dark">
    <nav class="nav flex-column collapse navbar-collapse" id="sidebar">
        <ul>
            <li class="nav-item p-3 d-flex ">
                <span>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd"
                            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg>
                </span>
                <a class="nav-link text-white" aria-current="page" href=" <?php echo $uri; ?>">Dashboard</a>
            </li>
            <li class="nav-item p-3 d-flex">
                <span>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder2-open" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z" />
                    </svg>
                </span>
                <a class="nav-link text-white" href="<?php echo $uri . "/projects/list"; ?>"
                    title="view all projects">Projects</a>
            </li>
            <li class="nav-item p-3 d-flex">
                <span>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
                        <path
                            d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
                    </svg>
                </span>
                <a class="nav-link text-white" href="<?php echo $uri . "/tasks/list"; ?>"
                    title="view all tasks">Tasks</a>
            </li>

            <li class="nav-item p-3 d-flex">
                <div>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart text-white"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5h-2v12h2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z" />
                    </svg>
                </div>
                <div><a class="nav-link text-white" href="<?php echo $uri . "/reports"; ?>">Reports</a></div>
            </li>
        </ul>
    </nav>

</div>