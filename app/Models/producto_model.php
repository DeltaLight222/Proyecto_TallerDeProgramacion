<?php
namespace App\Models;
use CodeIgniter\Model;
class producto_model extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_productos';
    protected $allowedFields = ['nombre_prod', 'imagen', 'categoria_id', 'precio', 'precio_vta','stock','stock_min','eliminado'];
}