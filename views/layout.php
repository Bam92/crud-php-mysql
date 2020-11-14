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
    <div class="container-fluid">
        <div class="row">
            <?php require "nav.php"; ?>

            <!-- Main content -->
            <div id="content" class="col col-md-10 container-fluid">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
        integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous">
    </script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src=" ./public/js/app.js">
    </script>
</body>

</html>