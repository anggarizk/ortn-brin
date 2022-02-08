<?php

namespace App\Models;

use CodeIgniter\Model;

class GolonganModel extends Model
{
    protected $table         = 'tb_m_golongan';
    protected $allowedFields = [
        'id', 'kode', 'deskripsi',
        'created_by', 'created', 'modified_by', 'modified', 'deleted'
    ];
    protected $returnType    = \App\Entities\Golongan::class;
    protected $useTimestamps = true;
}