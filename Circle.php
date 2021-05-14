<?php

class Circle
{
    public int $radius;
    public string $color;

    public function __construct(int $radius, string $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius(): int
    {
        return $this->radius;
    }

    public function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
    }


    public function getColor(): string
    {
        return $this->color;
    }


    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function __toString(): string
    {
        return "Circle : Radius= " . $this->getRadius() . "<br>"." Color: " . $this->getColor() ."<br>". " Area: " . $this->calculateArea();
    }

}