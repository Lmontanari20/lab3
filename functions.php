<?php

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
        for($ii = 0; $ii < 4; $ii++) {
            
            $handvalue = 0;
            while($handvalue <= 35) {
                $card = draw_card($deck);
                $players[ii][] = $card;
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
            
            echo "<div>";
            
            foreach($currhand as $currcard)
            {
                $howmuchpoint = $howmuchpoint + $currcard[0];    
                $cpt = $cpt + $currcard[0];
                echo $currcard[2];
            }
            
            echo $cpt;
            echo "</div>";
            
            if($cpt>$winnerpoint && $cpt<42)
            {
                $winnerpoint = $cpt;
                $winner = $currplay;
                
            }
                
        }
        
        echo "<br/>";
            
        echo $winner . " Wins! They earned " . ($howmuchpoint - $winnerpoint) . " points!!!";
        
    }

?>