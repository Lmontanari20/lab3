<?php

    function displayElapsedTime($starting_microtime)
    {
        $elapsedSecs = microtime(true) - $starting_microtime;
        echo $elapsedSecs . " seconds";
    }

    function draw_card(&$deck)
    {
        if(count($deck) > 1)
        {
            $index = rand(1, (count($deck) - 1));
            $card = $deck[$index];
            unset($deck[$index]);
            $deck = array_values(array_filter($deck));
        }
        else 
        {
            $card = "No more cards in the deck";
        }
        
        return($card);
        
    }
    
    function draw_hands(&$deck, &$players)
    {
        foreach($players as $key => $value) {
            
            $handvalue = 0;
            while($handvalue <= 35) {
                $card = draw_card($deck);
                $players[$key][] = $card;
                $handvalue += $card[0];
                
            }
        }
    }
    
    function get_winner(&$player)
    {
        $winnerpoint=0;
        $howmuchpoint=0;
        $winner = '';
        
        foreach ($player as $currplay => $currhand)
        {
            $cpt=0;
            
            echo "<div>" . $currplay;
            
            foreach($currhand as $currcard)
            {  
                $cpt = $cpt + $currcard[0];
                echo $currcard[2];
            }
            
            echo $cpt;
            echo "</div> <br />";
            
            if($cpt>$winnerpoint && $cpt<=42)
            {
                $winnerpoint = $cpt;
                $winner = $currplay;
            }
            
            $howmuchpoint = $howmuchpoint + $cpt;
        }
        
        echo "<br/>" . $winner . " Wins! They earned " . ($howmuchpoint - $winnerpoint) . " points!!!";
        
    }

?>