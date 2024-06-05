<?php
function agregarUsuario($dni, $apellido){
    $file = 'usuarios.csv';
    $existe = false;

    if(($handle = fopen($file, 'r')) !== FALSE) { // Archivo en modo lectura
        while(($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
            if($data[0] == $dni) {
                $existe = true;
                break;
            }
        }
        fclose($handle);
    } else {
        return "Error: No se pudo abrir el archivo para lectura.";
    }

    if($existe) {
        return "Error: El usuario ya existe en la DB.";
    } else {
        if(($handle = fopen($file, 'a')) !== FALSE) { // Archivo en modo escritura
            fwrite($handle, "\n");
            fputcsv($handle, array($dni, $apellido), ';');
            fclose($handle);
            return "Usuario agregado exitosamente a la DB.";
        } else {
            return "Error: No se pudo abrir el archivo para la escritura.";
        }
    }
}

//Tomar datos desde el index.html
if(isset($_POST['dni']) && isset($_POST['apellido'])) {
    $dni = $_POST['dni'];
    $apellido = $_POST['apellido'];

    if(!preg_match('/^\d{8}$/', $dni)) { // Validacion 
        echo "Error: El formato del DNI es invalido.";
    } else {
        echo agregarUsuario($dni, $apellido);
    }
} else {
    echo "Error: Datos incompletos.";
}
//TOMAR LOS DATOS QUE ENVIASTE DESDE index.html

//Recorrer el archivo usuarios.csv

//Si el DNI existe en usuarios.csv devolver mensaje a JS

//Si el DNI NO existe en usuarios.csv agregarlo, con el apellido, separado por ";" 
// y devolver respuesta a JS
?>