<?php
include_once "Triangle.php";
include_once "Shape.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $side1 = $_POST["side1"];
    $side2 = $_POST["side2"];
    $side3 = $_POST["side3"];
    $color = $_POST["color"];

    $shape = new Shape($color, $side1, $side2, $side3, $color);
    $triangle = new Triangle($color, $side1, $side2, $side3);
    $triangle->getArea();
    $triangle->Perimeter();
    $triangle->toString();

}
?>
<form method="post">
    <label>Cạnh thứ nhất:</label>
    <input type="number" name="side1" placeholder="Nhập cạnh thứ nhất!">
    <br>
    <label>Cạnh thứ hai:</label>
    <input type="number" name="side2" placeholder="Nhập cạnh thứ hai!">
    <br>
    <label>Cạnh thứ ba</label>
    <input type="number" name="side3" placeholder="Nhập cạnh thứ ba!">
    <br>
    <label>Nhập vào màu sắc:</label>
    <input type="text" name="color" placeholder="Nhập màu">
    <br>
    <input type="submit" value="Calculator">
</form>
