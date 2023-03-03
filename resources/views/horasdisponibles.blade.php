<?php

// Obtener la fecha de la petición
$fecha = $_GET['fecha'];

// Consultar en la base de datos las horas disponibles para esa fecha
$horas = DB::table('horarios')->where('fecha', $fecha)->where('estado', true)->get();

// Crear una cadena con las horas disponibles
$horasDisponibles = "";
foreach ($horas as $hora) {
    $horasDisponibles .= $hora->hora . ", ";
}

// Devolver las horas disponibles en formato JSON
echo json_encode($horasDisponibles);
