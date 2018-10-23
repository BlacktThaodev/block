<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>1119</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1119.less', 'css/1119.css');
        ?>
        <link href="css/1119.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include('1119-content.php') ?>
    </body>
</html>




