<?php
class Producto {
    public $nombre;
    public $precio;
    
    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
    
    public function mostrarDetalles() {
        echo "Nombre: " . $this->nombre . ", Precio: " . $this->precio . " pesos<br>";
    }
}


$producto1 = new Producto("Camiseta", 20);
$producto2 = new Producto("Zapatos", 50);
$producto3 = new Producto("Pantalón", 30);
$producto4 = new Producto("Sombrero", 15);
$producto5 = new Producto("Bufanda", 10);


$producto1->mostrarDetalles();
$producto2->mostrarDetalles();
$producto3->mostrarDetalles();
$producto4->mostrarDetalles();
$producto5->mostrarDetalles();
?>
