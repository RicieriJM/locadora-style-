<?php

namespace App\Models;

use CodeIgniter\Model;

class modeloModel extends Model
{
    protected $table      = 'tb_modelo';
    protected $primaryKey = 'TB_MODELO_ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
    'TB_MODELO_DESC',
    'TB_MODELO_OBS',
    'TB_MODELO_DATA'
    ];
}

?>