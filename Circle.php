<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 25/01/2019
 * Time: 13:57
 */

class Circle
{
public $radius;
public $color;

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }
    public function calculatorArea(){
        return pi()*($this->radius**2);
}

}