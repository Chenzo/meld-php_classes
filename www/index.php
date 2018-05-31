<?php

class MeldOBJ {

    public $name = "vince";
    public $dodad = "hahaha";

    public function getName() {
        $name = "function name";
        return "My Name is " . $this->name;
    }

}

$thingOBJ = new MeldOBJ;

$otherThing = new MeldOBJ;

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

                $otherThing->name="Eric";

                echo $thingOBJ->name;
                echo "<br />";
                echo $thingOBJ->dodad;
                echo "<br />";
                echo $thingOBJ->getName();
                echo "<br />";
                echo $otherThing->name;


                

            ?>

        </section>


            
    </body>
</html>