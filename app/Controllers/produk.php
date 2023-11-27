<?php

namespace App\Controllers;

class produk extends BaseController
{
    public function index()
    {
        $produkmodel = new \App\Models\ProdukModel();
        $produk = $produkmodel->findAll();
        $data = [
            'title' => 'Produk',
            'produk' => $produk
        ];

        return view('pages/produk', $data);
    }

    public function detail($kode)
    {
        $produkmodel = new \App\Models\ProdukModel();
        $detail = $produkmodel->where(['kode' => $kode])->first();
        $data = [
            'title' => 'detail',
            'detail' => $detail
        ];
        return view('pages/detail', $data);
    }

    public function input()
    {
        $data = [
            'title' => 'INPUT PRODUK',
        ];
        return view('pages/input', $data);
    }

    public function simpan()
    {
        $produkmodel = new \App\Models\ProdukModel();
        $data = [
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'gambar' => $this->request->getVar('gambar')

        ];

        $produkmodel->insert($data);
        return redirect()->to('/produk/index');
    }

    public function delete($kode)
    {
        $produkmodel = new \App\Models\ProdukModel();
        $produkmodel->delete($kode);
        session()->setFlashdata('pesan', "Data $kode berhasil dihapus");
        return redirect()->to('/produk/index');
    }

    public function edit($kode)
    {
        $produkmodel = new \App\Models\ProdukModel();
        $detail = $produkmodel->find($kode);
        $data = [
            'title' => 'EDIT PRODUK',
            'detail' => $detail
        ];

        return view('pages/edit', $data);
    }

    public function update()
    {
        $produkmodel = new \App\Models\ProdukModel();
        $data = [
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'gambar' => $this->request->getVar('gambar')

        ];

        $produkmodel->save($data);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/produk/index');
    }
}
