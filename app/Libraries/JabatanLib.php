<?php namespace App\Libraries;

use App\Models\JabatanModel;

class JabatanLib
{
    public function getListJabatan($total, $page)
    {
        $jabatanModel = new JabatanModel();

        $data = [
            'jabatan' => $jabatanModel->where('deleted', 0)
                                      ->orderBy('id')
                                      ->paginate($total, 'group1', $page, 2),
            'pager' => $jabatanModel->pager
        ];
        
        return $data;
    }

    public function getAllJabatan()
    {
        $jabatanModel = new JabatanModel();

        return $jabatanModel->where('deleted', 0)
                            ->orderBy('id')
                            ->get();
    }

    public function getJabatan($id)
    {
        $jabatanModel = new JabatanModel();

        return $jabatanModel->where('id', $id)
                            ->first();
    }    
}