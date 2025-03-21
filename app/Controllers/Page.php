<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Page extends Controller
{
    public function biodata()
    {
        $data = [
            'Nama' => 'Muchammad Alief Rizqi Putra Abdillah',
            'Umur' => 21,
            'Alamat' => 'Badas, Sumobito, Jombang',
            'Email' => 'alief.riesky136@gmail.com'
        ];

        return view('biodata_view', $data);
    }
}
