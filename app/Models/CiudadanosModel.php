<?php

namespace App\Models;

use CodeIgniter\Model;

class CiudadanosModel extends Model
{
    protected $table            = 'ciudadanos';
    protected $primaryKey       = 'dpi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['dpi','apellido', 'nombre', 'direccion', 'tel_casa', 'tel_movil', 'tel_movil', 'email', 'fechanac', 'cod_nivel_acad', 'cod_muni', 'contra'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
}
