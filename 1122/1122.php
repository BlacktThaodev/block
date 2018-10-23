<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>1122</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/docs.theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/1122.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1122.less', 'css/1122.css');
        ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/highlight.js"></script>
        <script src="js/app.js"></script>
        <script src="js/owlCarousel.js"></script>
    </head>
    <body>
        <?php include('1122-content.php') ?>
    </body>

</html>