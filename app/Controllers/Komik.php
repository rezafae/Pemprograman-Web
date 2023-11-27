<?php

namespace App\Controllers;

class komik extends BaseController
{
    public function produku()
    {
        $data = [
            'title' => 'Daftar Komik'
        ];
        return view('komik/produku', $data);
    }
}
