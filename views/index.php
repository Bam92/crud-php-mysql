<?php
$title = 'theTrackerApp';

ob_start();
?>
<div class="welcome">
    <h1>Welcome to theTrackerApp</h1>

    <p>Testan app that helps you track time you spend on your favorite tasks</p>
</div>
<?php
$content = ob_get_clean();
include 'views/layout.php';
?>