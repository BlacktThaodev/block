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
        $less->compileFile('less/1115.less', 'css/1115.css');
        ?>

        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/font-awesome.min.css" rel="stylesheet"/>
        <link href="css/peopleShow-css.css" rel="stylesheet"/>
        <link href="css/slick.css" rel="stylesheet"/>
        <link href="css/slick-theme.css" rel="stylesheet"/>
        <link href="css/swiper.min.css" rel="stylesheet"/>
        <link href="css/1115.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" ></script>
        <script src="js/slick.js" ></script>
        <script src="js/peopleShow-js.js"></script>
        <script src="js/swiper.min.js" ></script>

    </head>
    <body>
        <?php include('1115-content.php') ?>
    </body>
</html>