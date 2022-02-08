<?php namespace App\Libraries;

use App\Models\GolonganModel;

class GolonganLib
{
    public function getListGolongan($total, $page)
    {
        $golonganModel = new GolonganModel();

        $data = [
            'golongan' => $golonganModel->where('deleted', 0)
                                        ->orderBy('nama')
                                        ->paginate($total, 'group1', $page, 2),
            'pager' => $golonganModel->pager
        ];
        
        return $data;
    }

    public function getAllGolongan()
    {
        $golonganModel = new GolonganModel();
        
        return $golonganModel->where('deleted', 0)
                             ->orderBy('id')
                             ->get();
    }

    public function getGolongan($id)
    {
        $golonganModel = new GolonganModel();

        return $golonganModel->where('id', $id)
                            ->first();
    }
}