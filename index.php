<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/styles.css">
        <title>Pokemon Go</title>
    </head>
    <body>
        <?php
            require('Header.php');
            require('Content.php');
            echo Header::renderHeader($_GET['page']);
            echo Content::getContent($_GET['page']);
        ?>
    </body>
</html>