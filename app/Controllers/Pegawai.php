<?php

namespace App\Controllers;

use App\Libraries\PegawaiLib;
use App\Libraries\GolonganLib;
use App\Libraries\JabatanLib;
use App\Libraries\Enums\FormModeEnum;

class Pegawai extends BaseController
{
    public function index()
    {
        $libPegawai = new PegawaiLib();

        $uri = current_url(true);
        $page = $uri->setSilent()->getSegment(2, '1');

        $data = [
            "page" => "Pegawai",
            "data" => $libPegawai->getListPegawai(5, $page)
        ];

        return view('pages/pegawai/grid', $data);
    }

    public function view()
    {
        $libPegawai = new PegawaiLib();
        $libGolongan = new GolonganLib();
        $libJabatan = new JabatanLib();

        $uri = current_url(true);
        $id = $uri->setSilent()->getSegment(3);

        $data = [
            "page" => "Pegawai",
            "mode" => FormModeEnum::READ,
            "data" => $libPegawai->getPegawai($id),
            "listGolongan" => $libGolongan->getAllGolongan(),
            "listJabatan" => $libJabatan->getAllJabatan()
        ];

        return view('pages/pegawai/form', $data);
    }
}