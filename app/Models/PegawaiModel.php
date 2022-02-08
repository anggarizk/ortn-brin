<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table         = 'tb_m_pegawai';
    protected $allowedFields = [
        'id', 'nip', 'nama', 'golongan', 'npwp', 'norek', 'jabatan', 
        'created_by', 'created', 'modified_by', 'modified', 'deleted'
    ];
    protected $returnType    = \App\Entities\Pegawai::class;
    protected $useTimestamps = true;
}