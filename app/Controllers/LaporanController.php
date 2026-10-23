<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LaporanController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Laporan',
        ];

        return view('/pages/laporan/index', $data);
    }
}
