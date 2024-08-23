<?php
require_once 'ProgramWindow.php';
require_once 'Size.php';
require_once 'Position.php';

$window = new ProgramWindow();
echo "Initial Width: " . $window->width; 
echo "<br>Initial Height: " . $window->height."<br>";

$size = new Size(764, 1080);
$window->resize($size);

echo "<br>Resized Width: " . $window->width ; 
echo "<br>Resized Height: " . $window->height ."<br>"; 

$position = new Position(200,900);
$window -> move($position);

echo "<br>y: " . $window->y ; // => 200
echo "<br>x: " . $window->x ; // => 900

?>
