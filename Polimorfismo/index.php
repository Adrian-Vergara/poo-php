<?php

require_once __DIR__ . '/../salto_de_linea.php';

class Figura
{
    protected string $nombre;
    protected string $color;
    protected int $area;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function calcularArea()
    {
        return $this->area;
    }

    public function getArea(): int
    {
        return $this->area;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

}

class Cuadrado extends Figura
{
    private int $lado;

    public function __construct(int $lado)
    {
        parent::__construct("cuadrado");
        $this->lado = $lado;
    }

    public function calcularArea(): void
    {
        $this->area = $this->lado * $this->lado;
    }

}

class Rectangulo extends Figura
{

    private int $base;
    private int $altura;

    public function __construct(int $base, int $altura)
    {
        parent::__construct("rectangulo");
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(): void
    {
        $this->area = $this->base * $this->altura;
    }

}

$rectangulo = new Rectangulo(5, 3);
$rectangulo->setColor("Rojo");
$rectangulo->calcularArea();

$cuadrado = new Cuadrado(5);
$cuadrado->setColor("Azul");
$cuadrado->calcularArea();

printLn("El area del {$rectangulo->getNombre()} de color {$rectangulo->getColor()} es {$rectangulo->getArea()}");
printLn("El area del {$cuadrado->getNombre()} de color {$cuadrado->getColor()} es {$cuadrado->getArea()}");