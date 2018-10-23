
<!DOCTYPE html>
<html lang="en">
    <head>
     
        <title>1120</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1120.less', 'css/1120.css');
        ?>
        <link href="css/1120.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/owlCarousel.js"></script>
    </head>

    <body>
        <?php include('1120-content.php') ?>
    </body>

</html>