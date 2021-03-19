<?php

namespace App\Controllers;

class Halo extends BaseController
{
    public function index()
    {
        $data['title'] = 'halo Dunia !';
        $data['msg'] = 'Selamat datang di codeigniter 4';
        echo view('halo_view', $data);
    }
}
