<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanModel extends Model
{
    protected $table         = 'tb_m_jabatan';
    protected $allowedFields = [
        'id', 'deskripsi', 'created_by', 'created', 'modified_by', 'modified', 'deleted'
    ];
    protected $returnType    = \App\Entities\Pegawai::class;
    protected $useTimestamps = true;
}