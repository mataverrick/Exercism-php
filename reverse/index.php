<?php
    declare(strict_types=1);

    function reverseString(string $text): string
    {
        return strrev($text);
    }

    function reverse(string $text): string{
        $aux ="";

        for($i=0;$i<strlen($text)/2;$i++){
            $aux=$text[$i];
            $text[$i]=$text[strlen($text)-1-$i];
            $text[strlen($text)-1-$i]=$aux;
        }

        return $text;
    }

    echo reverse("Holas");
    //echo reverseString("Hola");
?>