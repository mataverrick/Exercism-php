<?php
     class PizzaPi{
        public function calculateDoughRequirement(int $pizzas,int $people):int{
            return $pizzas*(($people*20)+200);
        }
        
        public function calculateSauceRequirement(int $pizzas,int $can):int{
            return ($pizzas*125)/$can;
        }

        public function calculateCheeseCubeCoverage(int $cheese_dimension,$thickness,$diameter):int{
            return ($cheese_dimension**3)/($thickness * pi() * $diameter);
        }

        public function calculateLeftOverSlices($pizzas,$people) : int{
            return ($pizzas*8)%($people);
        } 
    }

    $pizza_pi = new PizzaPi();

    //echo $pizza_pi -> calculateDoughRequirement(5,7);

    //echo $pizza_pi-> calculateSauceRequirement(8,250);
     
    echo "<br>" . $pizza_pi-> calculateCheeseCubeCoverage(25, 0.5, 30);

    echo "<br>" . $pizza_pi-> calculateLeftOverSlices(4,3);
    
?>