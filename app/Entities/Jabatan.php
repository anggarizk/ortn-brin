<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Jabatan extends Entity
{
    public $listJabatan;

    public function __construct (array $data = null)
    {
        parent::__construct($data);

        $this->listJabatan = [];
    }

}