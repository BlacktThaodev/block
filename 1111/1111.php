<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1111.less', 'css/1111.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/1111.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include('1111-content.php') ?>
    </body>
</html>