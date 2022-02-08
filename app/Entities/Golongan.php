<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Golongan extends Entity
{
    public $listGolongan;

    public function __construct (array $data = null)
    {
        parent::__construct($data);

        $this->listGolongan = [];
    }

}