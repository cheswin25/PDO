<?php

namespace proyecto\Models;

require_once __DIR__ . '/Models.php'; // Asegúrate de que la ruta sea correcta

class adminVista extends Models
{
    protected $table = "persona";
    protected $filleable = ['nombre', 'telefono']; // Cambiado a 'filleable'
    protected $id = "id_persona"; // Si tu tabla usa otro nombre para el campo ID, cámbialo aquí.

    
    public function __construct()
    {
        parent::__construct();
        
    }

    
}

