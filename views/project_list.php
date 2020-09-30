<?php
$title = 'Projects list';

ob_start();
<<<<<<< HEAD
=======

>>>>>>> refactor: add nav.php only in layout.php
?>

<h1><?php echo $title . " (" . $projectCount . ")";  ?></h1>

<a href="<?php echo $uri . "/projects/add"; ?>">
    <button class="btn-primary">Add project</button>
</a>
<!-- If there's not yet data -->
<?php if ($projectCount == 0) { ?>

<div>
    <p>You have not yet added any project </p>
    <p><a href="<?php echo $uri . "/projects/add"; ?>">Add project</a></p>
</div>

<?php } ?>

<ul>
    <?php foreach ($projects as $project) : ?>
    <li>
        <a href=" ./add?id=<?php echo $project['id']; ?>">
            <?php echo escape($project["title"]) ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>

<?php
$content = ob_get_clean();
include 'layout.php';
?>