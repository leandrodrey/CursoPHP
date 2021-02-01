<?php
/**
 *  Design a model that will allow to know the area and perimeter of a circle, a triangle and a square.
 *  Complete the classes below and add the necessary code for the example to work.
 */

abstract class formaGeometrica {

    public function getArea() {
    }

    public function getPerimeter() {
    }
}

class Triangle extends formaGeometrica {

    private $lado1;
    private $lado2;
    private $lado3;

    public function __construct(int $lado1, int $lado2, int $lado3) {
        $this->lado = $lado1;
        $this->lado = $lado2;
        $this->lado = $lado3;
    }

    public function getArea() {
        return $area = ($this->lado1 * $this->lado2) / 2;
    }

    public function getPerimeter() {
        return $perimeter = $this->lado1 + $this->lado2 + $this->lado3;
    }
}

class Square extends formaGeometrica  {

    private $lado;

    public function __construct(int $lado) {
        $this->lado = $lado;
    }

    public function getArea() {
        return $area = $this->lado * $this->lado;
    }

    public function getPerimeter() {
        return $perimeter = $this->lado * 4;
    }
}

class Circle extends formaGeometrica  {

    private $radio;

    public function __construct(int $radio) {
        $this->radio = $radio;
    }

    public function getArea() {
        return $area = 3.14 * ($this->radio * $this->radio);
    }

    public function getPerimeter() {
        return $perimeter = 2 * 3.14 * $this->radio;
    }
}

$triangle = new Triangle(2, 3, 5);
$square = new Square(2);
$circle = new Circle(4);

echo $triangle->getArea() . "\n";
echo $triangle->getPerimeter() . "\n";

echo $square->getArea() . "\n";
echo $square->getPerimeter() . "\n";

echo $circle->getArea() . "\n";
echo $circle->getPerimeter() . "\n";

