<?php

    include ('functions.php');

    $deck = array(
        array("value", "suit", "img tag")
        );
    $suits = array('clubs', 'diamonds', 'hearts', 'spades');
    
    $players = array(
        'player 1' => array(),
        'player 2' => array(),
        'player 3' => array(),
        'player 4' => array()
        );
    
    foreach ($suits as $value)
    {
        for ($i = 1; $i <= 13; $i++)
        {
            $deck[] = array($i, $value, ("<img src='cards/" . $value . "/" . $i . ".png' />"));
        }
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <title> SilverJack </title>
        <<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    </head>
    <body>
        
        <style>
            @import url("styles.css");    
        </style>
        
        <header>
            <h1>SilverJack</h1>
            
        </header>
        
        <?php
        
        /* Demonstrate Draw card
            echo "<div>";
            
            for($i = 0; $i < 52; $i++)
            {
                $card = draw_card($deck);
                echo "<b>" . $card[0] . " of " . $card[1] . "</b><br/>";
                echo $card[2];
                echo "<br />";
            }
            
            echo "</div>";
            
            echo "<p>" . draw_card($deck) . "</p>";
            echo "<p>" . draw_card($deck) . "</p>";
            
        */
        
        ?>

    </body>
</html>