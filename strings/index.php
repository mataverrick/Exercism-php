<?php
class HighSchoolSweetheart{
    //It should take a name and return its first letter.
    public function firstLetter(string $name): string
    {
    return substr(trim($name),0,1);
    }
    
    public function initial(string $name): string
    {
         return strtoupper($this->firstLetter($name)).".";
    }

    public function initials(string $name): string
    {
         $full_name = explode(" ",$name);
         $name="";

         foreach($full_name as $value){
            $name .= $this -> initial($value)." ";
         }
    
         return trim($name);
    }
    
    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $sweetheart_a=$this->initials($sweetheart_a);
        $sweetheart_b=$this->initials($sweetheart_b);

        return "         ******       ******\n" .
               "       **      **   **      **\n" .
               "     **         ** **         **\n" .
               "    **            *            **\n" .
               "    **                         **\n" .
               "    **     {$sweetheart_a} + {$sweetheart_b}       **\n" .
               "     **                       **\n" .
               "       **                   **\n" .
               "         **               **\n" .
               "           **           **\n" .
               "             **       **\n" .
               "               **   **\n" .
               "                 ***\n" .
               "                  *";
    }
}


$sweetheart =  new HighSchoolSweetheart();

echo $sweetheart->firstLetter("Erick");

echo "<br>" .$sweetheart->initial("jane");
echo "<br>" .$sweetheart->initials("Jane Doe");

?>