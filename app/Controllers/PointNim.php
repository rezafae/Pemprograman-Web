<?php

namespace App\Controllers;

class PointNim extends BaseController
{
    public function lihat()
    {
        $pointnim = new \App\Models\PointNim();
        $point = $pointnim->findAll();
        $data = [
            'title' => 'lihat',
            'point' => $point

        ];

        return view('pages/lihat_nim', $data);
    }

    public function input()
    {

        $data = [
            'title' => 'Input Mahasiswa',
            //'validasi' => \Config\Services::validation()
        ];
        return view('pages/input_mahasiswa', $data);
    }

    public function simpan()
    {

        $pointnim = new \App\Models\PointNim();
        $data = [
            'kode' => $this->request->getVar('kode'),
            'nim' => $this->request->getVar('nim'),
            'nama' => $this->request->getVar('nama'),
            'kegiatan' => $this->request->getVar('kegiatan'),
            'tanggal' => $this->request->getVar('tanggal'),
            'point' => $this->request->getVar('point')

        ];
        //membuat session
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        $pointnim->insert($data);
        return redirect()->to('/pointnim/lihat');
    }
}
