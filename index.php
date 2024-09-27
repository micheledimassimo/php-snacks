<?php
    
    $randomNumbers = [];
    
   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Snacks</title>
        <link rel="stylesheet" href="./css/12bool.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <section>
            <h2>
                Snack 3
            </h2>
            
           <div>
                <?php
                    for($i = 0; $i < 15; $i++) {
                        $newNumber = rand(1, 100);
                        if(!in_array($newNumber, $randomNumbers)) {
                            $randomNumbers[] = $newNumber;

                        }
                        else {
                            $i--;
                        }
                       
                    }
                    
                ?>
                <?php    
                    foreach($randomNumbers as $random) {
                ?>        
                <ul>
                    <li>
                        <?php
                            echo $random;
                        ?>
                    </li>
                </ul>
                    
                <?php

                    }
                    


                    var_dump($randomNumbers);
            
                ?>
           </div>
          
        </section>
    </body>
</html>