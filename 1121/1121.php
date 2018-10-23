<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>type-1121</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1121.less', 'css/1121.css');
        ?>
        <link href="css/1121.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/side-bar.js"></script>
    </head>
    <body>
        <?php include('1121-content.php') ?>
    </body>
</html>
