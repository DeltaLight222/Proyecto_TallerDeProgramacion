<?php

namespace App\Models;

use CodeIgniter\Model;

class Consulta_model extends Model
{
    protected $table = 'consultas'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_mensaje'; // Nombre de la clave primaria en la tabla
    protected $allowedFields = ['nombre_apellido', 'email', 'telefono', 'motivo', 'mensaje', 'estado']; // Campos permitidos para ingresar datos
}
