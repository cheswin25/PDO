<?php

namespace proyecto;
require("../vendor/autoload.php");


use proyecto\Models\orden_cita;
use proyecto\Models\getData;
use proyecto\Controller\UserController;
use proyecto\Models\DetalleServicioAdmin;
Router::headers(); // Configurar las cabeceras para la respuesta JSON


Router::get('/orden',[orden_cita::class,"mostrarOrden"]);
Router::get('/getData', [getData::class, 'data']);
Router::post('/register', [UserController::class, 'registro']);



Router::get('/DSA', function() {
    $detalleServicioAdmin = new DetalleServicioAdmin();

    $filters = [
        'fecha' => $_GET['fecha'] ?? '',
        'client_name' => $_GET['client_name'] ?? '',
        'technician_name' => $_GET['technician_name'] ?? ''
    ];

    $detalleServicioAdmin->data($filters);
});

Router::any('/404', '../views/404.php');
