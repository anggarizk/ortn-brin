<?php namespace App\Libraries;

use App\Models\PegawaiModel;

class PegawaiLib
{
    public function getListPegawai($total, $page)
    {
        $pegawaiModel = new PegawaiModel();

        $data = [
            'pegawai' => $pegawaiModel->where('deleted', 0)
                                      ->orderBy('nama')
                                      ->paginate($total, 'group1', $page, 2),
            'pager' => $pegawaiModel->pager
        ];
        
        return $data;
    }

    public function getPegawai($id)
    {
        $pegawaiModel = new PegawaiModel();

        return $pegawaiModel->where('id', $id)
                            ->first();
    }
}