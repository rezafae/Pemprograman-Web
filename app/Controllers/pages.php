<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Stimik Widya Pratama'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'contact',
            'alamat' => [

                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Petarukan Pemalang',
                    'hp' => '087854325432'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Pekalongan',
                    'hp' => '0878543543'

                ]
            ]

        ];
        return view('pages/contact', $data);
    }

    // public function produk()
    // {
    //     $produkmodel = new \App\Models\ProdukModel();
    //     $produk = $produkmodel->findAll();
    //     $data = [
    //         'title' => 'produk',
    //         'produk' => $produk
    //     ];
    //     return view('pages/produk', $data);
    // }
}
