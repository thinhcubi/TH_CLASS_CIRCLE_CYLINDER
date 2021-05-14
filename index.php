<?php
include_once "Cylinder.php";
include_once "Circle.php";
$circle = new Circle(2,"blue");
echo $circle;
$cylinder = new Cylinder(3,"red",25);
echo "<br>". $cylinder;
