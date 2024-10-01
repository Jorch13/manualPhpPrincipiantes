<?php 
// Definición de la clase CepaCBD
class Genetica {
    // Propiedades
    public $nombre;
    public $descripcion;
    public $porcentajeCBD;
    public $precioPorGramo;
    
    // Método constructor
    public function __construct($nombre, $descripcion, $porcentajeCBD, $precioPorGramo) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->porcentajeCBD = $porcentajeCBD;
        $this->precioPorGramo = $precioPorGramo;
    }
    
    // Método para mostrar la información de la cepa
    public function mostrarInformacion() {
        echo "<p>Nombre: " . $this->nombre . "</p>";
        echo "<p>Descripción: " . $this->descripcion . "</p>";
        echo "<p>Porcentaje de CBD: " . $this->porcentajeCBD . "%</p>";
        echo "<p>Precio por gramo: $" . $this->precioPorGramo . "</p>";
    }
}

// Instanciar un objeto de la clase CepaCBD
$cepa = new Genetica("OG Kush", "Híbrido índica dominante conocido por su alto contenido de CBD y su aroma terroso.", 18, 10);

// Mostrar la información de la cepa
$cepa->mostrarInformacion();

?>

}

?>