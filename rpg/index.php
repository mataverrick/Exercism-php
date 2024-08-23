<?php
    class AnnalynsInfiltration{
        function canFastAttack($is_knight_awake){
            //if the knight is sleeping, as it takes time for him to get his armor on, so he will be vulnerable.
            return !$is_knight_awake;
        }

        //can be spied upon if at least one of them is awake.
        function canSpy(...$array){
            foreach($array as $value){
                if($value){
                    return true;
                }
            }
            return false;
        }

        //if the prisoner is awake and the archer is sleeping
        function canSignal($is_archer_awake,$is_prisoner_awake){
            return $is_prisoner_awake==true && $is_archer_awake==false ? true : false;
        }

        function canLiberate( $is_knight_awake,$is_archer_awake,$is_prisoner_awake,$is_dog_present){
            //If Annalyn has her pet dog with her she can rescue the prisoner if the archer is asleep. 
            if($is_dog_present==true && $is_archer_awake==false){
                return true;
            }
            //If Annalyn does not have her dog 
            //Annalyn can free the prisoner if the prisoner is awake and the knight and archer are both sleeping
            if($is_prisoner_awake==true){
                if($is_archer_awake==false && $is_knight_awake==false){
                    return true;
                }
            }
            return false;
        }
    }

    $is_knight_awake = true;
    $infiltration = new AnnalynsInfiltration();
    echo $infiltration->canFastAttack($is_knight_awake);

    $is_knight_awake = false;
    $is_archer_awake = true;
    $is_prisoner_awake = false;
    echo $infiltration->canSpy($is_knight_awake, $is_archer_awake, $is_prisoner_awake);


    $is_archer_awake = false;
    $is_prisoner_awake = true;

    echo $infiltration  -> canSignal($is_archer_awake,$is_prisoner_awake);

        $is_knight_awake = false;
        $is_archer_awake = false;
        $is_prisoner_awake = true;
        $is_dog_present = true;

    echo $infiltration->canLiberate(
    $is_knight_awake,
    $is_archer_awake,
    $is_prisoner_awake,
    $is_dog_present
);

?>