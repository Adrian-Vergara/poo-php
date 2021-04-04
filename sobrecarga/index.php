<?php


require_once __DIR__ . '/../salto_de_linea.php';


class Producto
{

    private string $nombre;
    private int $precio;

    public function __construct(string $nombre, int $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function __call($name, $arguments)
    {
        printLn("Producto <<{$this->nombre}>>");
        if ($name == "calcularTotal") {
            switch (count($arguments)) {
                case 1:
                    printLn("La cantidad es {$arguments[0]} y el precio {$this->precio}");
                    $total = $arguments[0] * $this->precio;
                    printLn("El total es {$total}");
                    return $total;
                case 2:
                    printLn("La cantidad es {$arguments[0]}, el precio {$this->precio} y el impuesto es del {$arguments[1]}%");
                    $total = $arguments[0] * $this->precio;
                    $total = $total + ($total * ($arguments[1] / 100));
                    printLn("El total es {$total}");
                    return $total;
            }
        }
    }
}

$producto1 = new Producto("Arroz", 50);

separar_texto();
//Si paso 1 parámetro lo toma como la cantidad
$producto1->calcularTotal(2);
separar_texto();
//Si paso 2 parámetros toma el primer parámetro como la cantidad y el 2do como el impuesto
$producto1->calcularTotal(2, 19);
separar_texto();
