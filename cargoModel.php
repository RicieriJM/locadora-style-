<?php

namespace App\Models;

use CodeIgniter\Model;

class cargoModel extends Model
{
    protected $table      = 'tb_cargo';
    protected $primaryKey = 'TB_CARGO_ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
    'TB_CARGO_NOME'
    ];
}

?>