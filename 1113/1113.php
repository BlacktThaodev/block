<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/font-awesome.min.css" rel="stylesheet"/>
        <link href="css/1113.css" rel="stylesheet" />
        <?php
        if (!class_exists('lessc')) {
            include ('/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1113.less', 'css/1113.css');
        ?>
        <script src="js/owlCarousel.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include('1113-content.php') ?>
    </body>
</html>