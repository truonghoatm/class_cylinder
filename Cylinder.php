<?php
include_once 'Circle.php';
class Cylinder extends Circle
{
public $height;
public function setHeight($height)
{
    $this->height = $height;
}

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }
public function calculatorVolume()
{
   return parent::calculatorArea()* $this->height;
}
}
