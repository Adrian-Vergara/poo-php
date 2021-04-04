## Sobrecarga de Métodos

Para la sobrecarga de métodos creé una clase Producto con 2 atributos: nombre y precio. 

Utilicé el método `__call` que permite realizar la sobrecarga para calcular el total de un producto en base a los parámetros. 

Por ejemplo si deseo calcular el total de un producto con valor 50 y paso un parámetro `calcularTotal(2)`, el resultado será la multiplicación de la cantidad (2) por el precio (50). Ahora bien, si en vez de pasar 1 parámetro paso 2, el 2do parámetro hace referencia al impuesto en %. En ese orden de ideas, si ejecuto `calcularTotal(2, 19)`, el resultado será la multiplicación de la cantidad (2) por el precio (50) más el impuesto del 19%.

## Probar

`1. cd Sobrecarga`

`1. php index.php`