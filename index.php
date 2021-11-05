<?php

abstract class Shape
{
    public string $name;
    protected float $width;
    protected float $length;
    private int $id;
    static $TIPO = 1;

    public function __construct(float $width, float $length)
    {
        $this->width = $width;
        $this->length = $length;
        $this->id = rand();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getArea()
    {
        return $this->width * $this->length;
    }

    public function copia()
    {
        return $this;
    }
}

class Rectangle extends Shape
{
    static $TIPO = 2;
    public function __construct(float $width, float $length)
    {
        parent::__construct($width, $length);
    }
}

class Circle extends Shape
{
    static $TIPO = 3;
    protected float $radius;

    public function __construct(float $radius)
    {
        parent::__construct($radius, $radius);
        $this->radius = $radius;

    }

    public function getArea()
    {
        return 3.14 * $this->radius * $this->radius;
    }

    public function copia()
    {
        return $this;
    }
}

echo "\r\n Retangulo:";
$retangulo = new Rectangle(10, 20);
echo "\r\nTIPO: " . $retangulo::$TIPO;
echo "\r\nArea: " . $retangulo->getArea();
echo "\r\n";
echo "\r\n Circulo:";
$circle = new Circle(10);
echo "\r\nTIPO: " . $circle::$TIPO;
echo "\r\nArea: " . $circle->getArea();
