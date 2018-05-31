<?php

class MeldOBJ {
    public $name = "Meldy";


    public function getName() {
        return "My Name is " . $this->name;
    }
}

?>



<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP Classes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>

       
        <section>
            <h1>Mind Meld 05.31.2018</h1>

            <?php

                $myOBJ = new MeldOBJ;

                echo $myOBJ->name;
                echo "<br />";

                $myOBJ->name = "VINCE VINCE";
                echo $myOBJ->name;


                $mySecondOBJ = new MeldOBJ;

                echo $mySecondOBJ->getName();

            ?>

        </section>


            
    </body>
</html>