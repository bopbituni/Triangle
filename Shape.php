<?php


class Shape
{
    public $color;
    public $side1;
    public $side2;
    public $side3;

    public function __construct($color, $side1, $side2, $side3 )
    {
        $this->color = $color;
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }
}