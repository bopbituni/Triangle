<?php
include_once "Shape.php";

class Triangle extends Shape
{


    public function getArea()
    {
        $area = sqrt(pow((pow($this->side1, 2) + pow($this->side2, 2) + pow($this->side3, 2)),2) -
                (pow($this->side1, 4) + pow($this->side2, 4) + pow($this->side3, 4))*2) / 4;
        return $area;
    }

    public function Perimeter()
    {
        $per = ($this->side1 + $this->side2 + $this->side3);
        return $per;
    }

    public function toString()
    {
        echo "Triangle Area: " . $this->getArea();
        echo "<br>";
        echo "Triangle Perimeter: " . $this->Perimeter();
        echo"<br>";
        echo "Color: " . parent::getColor();
    }
}