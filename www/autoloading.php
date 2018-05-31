<?php
require_once("autoloader.php");


$testOBJ = new MeldOBJ("Mike");
?>



<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP Classes - Autoloading</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>

       
        <section>
            <h1>Mind Meld 05.31.2018</h1>

            <?php 

                echo $testOBJ;
            ?>
        </section>


            
    </body>
</html>