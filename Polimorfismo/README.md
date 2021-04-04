## Polimorfismo

El polimorfismo está estrechamente relacionado con la herencia, por ende en el mismo ejemplo aplico Herencia, Polimorfismo y Encapsulamiento. 


Creé una clase Figura con 3 atributos protegidos (nombre, color y area), encapsulé el atributo color y creé un método al que le aplico polimorfismo llamado calcularArea.

Luego creé 2 clases, una llamada Cuadrado y la otra Rectangulo, ambas heredan los atributos y métodos de la clase Figura.

En el constructor del Cuadrado paso por parámetro el valor del lado y en Rectangulo la base y la altura. Aplico polimorfismo al método calcularArea porque se calcula de manera diferente para ambos casos.

## Probar

`1. cd Polimorfismo`

`1. php index.php`