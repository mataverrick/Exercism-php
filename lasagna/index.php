
<?php
    class lasagna{
        function expectedCookTime(){
            return 40;
        }
        
        function remainingCookTime($time)  {
            return 40 - $time;
        }

        function totalPreparationTime($layers){
            return $layers* 2;
        }

        function totalElapsedTime($layers,$time){
            $elapsedTime = $time;            
            $elapsedTime += $this->totalPreparationTime($layers);

            return $elapsedTime;
        }

        function alarm(){
            return "Ding";
        }
    }
    
    
    $timer = new Lasagna();

    echo $timer->expectedCookTime();         // Expected cook time (40)
    echo "\n";
    echo $timer->remainingCookTime(30);      // Remaining cook time (10)
    echo "\n";
    echo $timer->totalPreparationTime(3);    // Total preparation time (6)
    echo "\n";
    echo $timer->totalElapsedTime(3, 20);    // Total elapsed time (26)
    echo "\n";
    echo $timer->alarm(); 
?>






