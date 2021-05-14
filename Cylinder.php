<?php



include_once "Circle.php";

class Cylinder extends Circle
{
    public int $height;

     public function __construct(int $radius, string $color, int $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function calculateArea(): float
    {
        return parent::calculateArea() * $this->height;
    }


    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    public function getColor(): string
    {
        return $this->color;
    }


    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getHeight(): int
    {
        return $this->height;
    }


    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function __toString(): string
    {
        return "Hinh tru: Radius=" . $this->radius ."<br>". "Height:" . $this->height ."<br>". "Color:" . $this->getColor() ."<br>". "The tich:" . $this->calculateArea();
    }

}