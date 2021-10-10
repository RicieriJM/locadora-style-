<?php

namespace App\Models;

use CodeIgniter\Model;

class clienteModel extends Model
{
    protected $table      = 'tb_cliente';
    protected $primaryKey = 'TB_CLIENTE_ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
    'TB_CLIENTE_NOME', 
    'TB_CLIENTE_TEL',
    'TB_CLIENTE_SEXO', 
    'TB_CLIENTE_EMAIL', 
    'TB_CLIENTE_SENHA', 
    'TB_CLIENTE_ENDERECO',
    'TB_CLIENTE_COMPLEMENTO', 
    'TB_CLIENTE_BAIRRO',
    'TB_CLIENTE_CIDADE',
    'TB_CLIENTE_UF', 
    'TB_CLIENTE_DT_NASC',
    'TB_CLIENTE_DT_CAD'
    ];
}

?>