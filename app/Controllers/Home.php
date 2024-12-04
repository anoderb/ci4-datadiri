<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        
        $data = [
            'title' => 'Data Diri',
            'nama' => 'Khamdanu Syakir',
            'nim' => '23.240.0046',
            'jurusan' => 'Teknik Informatika',
            'kelas' => '3P41',
            'konsentrasi' => 'Teknik Informatika',
            'foto' => base_url('assets/img/profile.jpg'),
        ];

        
        return view('data_diri', $data);
    }
}

