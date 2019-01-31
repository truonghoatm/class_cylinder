<?php
include_once 'Circle.php';
include_once 'Cylinder.php';
$circle = new Circle();
$circle->setRadius(10);
echo $circle->getRadius()."<br/>";
$circle->setColor('blue');
echo $circle->getColor()."<br/>";
echo $circle->calculatorArea()."<br/>";

$cylinder = new Cylinder();
$cylinder->setRadius(10);
$cylinder->setHeight(20);
echo $cylinder->getRadius()."<br/>";
echo $cylinder->getHeight()."<br/>";
$cylinder->setColor("blue");
echo $cylinder->getColor()."<br/>";
echo $cylinder->calculatorVolume();
