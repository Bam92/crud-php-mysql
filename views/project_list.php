<?php
$title = 'Projects list';

$uri = getRootURI();

ob_start();

?>

<div class="container">

    <h1><?php echo $title . " (" . $projectCount . ")"  ?></h1>
    <!-- If there's not yet data -->
    <?php if ($projectCount == 0) { ?>
    <div>
        <p>You have not yet added any project </p>
        <p><a href="<?php echo $uri . "/projects/add"; ?>">Add project</a></p>
    </div>
    <?php } ?>
    <p><a href="<?php echo $uri . "/projects/add"; ?>">Add project</a></p>

    <ul>
        <?php foreach ($projects as $project) : ?>
        <li>
            <a href=" ./add?id=<?php echo $project['id']; ?>">
                <?php echo escape($project["title"]) ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>

<?php
$content = ob_get_clean();
include 'layout.php';
?>