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

    public function delete($kode)
    {
        $pointnim = new \App\Models\PointNim();
        $pointnim->delete($kode);
        session()->setFlashdata('pesan', "Data $kode berhasil dihapus");
        return redirect()->to('/pointnim/lihat');
    }

    public function edit($kode)
    {
        $pointnim = new \App\Models\PointNim();
        $point = $pointnim->find($kode);
        $data = [
            'title' => 'EDIT MAHASISWA',
            'point' => $point
        ];

        return view('pages/edit', $data);
    }

    public function update()
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
        $pointnim->save($data);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/pointnim/lihat');
    }
}
