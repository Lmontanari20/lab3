<?php

    include ('functions.php');
    $start = microtime(true);
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
    
    draw_hands($deck, $players);

?>

<!DOCTYPE html>
<html>
    <head>
        <title> SilverJack </title>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    </head>
    <body>
        
        <style>
            @import url("styles.css");    
        </style>
        
        <header>
            <font size = "8"><h1>Silverjack</h1></font>
            
        </header>
        
        <?php
        
            get_winner($players);
        
        ?>
        
        <div id = "elapsedTime">
            Elapsed Time: <?= displayElapsedTime($start) ?>
        </div>
        
            <footer>
                <hr>
                CST336 Internet Programming. 2018 &copy; Team 8 <br />
                <strong> Disclaimer:</strong>
                The information in this website is fictitous. It's used for academic purposes.
                    
                <figure>
                        
                     <img src = "csumbLogo/csumbLogo.png" alt = "csumb logo"
                        
                </figure>
            </footer>

    </body>
</html>