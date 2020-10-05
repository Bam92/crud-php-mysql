<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="public/css/style.css">

    <!--Bootstrap v5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">

    <title><?php echo $title ?></title>
</head>

<body>

    <div class="row">
        <?php require "nav.php"; ?>

        <!-- Main content -->
        <div id="content" class="col-10">
            <?php echo $content; ?>
        </div>
    </div>
    <script src=" ./public/js/app.js">
    </script>
</body>

</html>