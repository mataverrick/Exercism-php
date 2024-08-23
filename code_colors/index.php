<?php
    echo 'welcome';

    function getAllColors(): array
{
    return["black","brown","red","orange","yellow","green","blue","violet","grey","white"];
}

function colorCode(string $color): int
{
        return array_search($color,getAllColors());
}

    echo colorCode("red");

?>
