<?php

namespace App\Models;

use CodeIgniter\Model;

class funcionarioModel extends Model
{
    protected $table      = 'tb_funcionario';
    protected $primaryKey = 'TB_FUNCIONARIO_ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
    'TB_FUNCIONARIO_NOME', 
    'TB_FUNCIONARIO_TEL',
    'TB_FUNCIONARIO_DT_CONTRATO',
    'TB_CARGO_ID'
    ];
}

?>