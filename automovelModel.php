<?php

namespace App\Models;

use CodeIgniter\Model;

class automovelModel extends Model
{
    protected $table      = 'tb_automovel';
    protected $primaryKey = 'TB_AUTOMOVEL_ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
    'TB_AUTOMOVEL_NOME', 
    'TB_AUTOMOVEL_ANO_FAB',
    'TB_AUTOMOVEL_COR', 
    'TB_AUTOMOVEL_KM', 
    'TB_AUTOMOVEL_VALOR_D', 
    'TB_AUTOMOVEL_STATUS',
    'TB_MARCA_ID', 
    'TB_MODELO_ID'
    ];
}

?>