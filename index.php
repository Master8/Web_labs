<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/styles.css">
        <title>Pokemon Go</title>
    </head>
    <body>
        <?php
            require('Menu.php');
            require('Content.php');
            echo Menu::renderMenu($_GET['page']);
            echo Content::getContent($_GET['page']);
        ?>
    </body>
</html>