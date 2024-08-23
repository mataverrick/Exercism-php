<?php
    echo "---This index is just for test the class---<br>";

    //return a empty list
    function language_list(...$array){
        return $array;
    }

    function add_to_language_list($array,$add){
         $array[] = $add;
         return $array;
    }

    function prune_language_list($array){
        array_splice($array,0,1);
        return $array;
    }

    function current_language($array){
        return $array[0];
    }

    function language_list_length($array){
        return count($array);
    }


    
    $language = language_list();
    echo $language = add_to_language_list($language,"Hola");
    
    $first = current_language($language_list);
?>