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
                $players[ii].push($card);
                $handvalue += $card[0];
                
            }
        }
    }   

?>