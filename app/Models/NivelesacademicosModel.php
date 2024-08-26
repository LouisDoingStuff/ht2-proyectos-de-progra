<?php

namespace App\Models;

use CodeIgniter\Model;

class NivelesacademicosModel extends Model
{
    protected $table            = 'nivelesacademicos';
    protected $primaryKey       = 'cod_nivel_acad';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['cod_nivel_acad', 'nombre', 'descripcion'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
