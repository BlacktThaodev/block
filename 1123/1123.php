<!DOCTYPE html>
<html lang="en">
    <head>
        <title>1123</title>
        <meta charset="UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/daterangepicker.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1123.less', 'css/1123.css');
        ?>
        <link rel="stylesheet" href="css/1123.css">
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flot.js" ></script>
        <script src="js/jquery.flot.time.js"></script>
        <script src="js/jquery.flot.spline.min.js" ></script>
        <script src="js/date.js"></script>
        <script src="js/moment.min.js" ></script>
        <script src="js/daterangepicker.js"></script>
        <script src="js/custom.min.js"></script>
    </head>

    <body>
        <?php include('1123-content.php') ?>

    </body>
</html>