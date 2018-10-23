
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>1124</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1124.less', 'css/1124.css');
        ?>
        <link href="css/1124.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" ></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/gauge.min.js"></script>
        <script src="js/custom.min.js"></script>

    </head>

    <body>

        <?php include('1124-content.php') ?>

    </body>

</html>