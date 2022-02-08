<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Pegawai extends Entity
{
    public $listPegawai;

    public function __construct (array $data = null)
    {
        parent::__construct($data);

        $this->listPegawai = [];
    }

}