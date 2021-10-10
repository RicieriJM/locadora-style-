<?php

namespace App\Models;

use CodeIgniter\Model;

class marcaModel extends Model
{
    protected $table      = 'tb_marca';
    protected $primaryKey = 'TB_MARCA_ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
    'TB_MARCA_NOME'
    ];
}

?>