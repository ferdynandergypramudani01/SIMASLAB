<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AslabController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Manajemen Aslab',
            // 'aslab' => $this->aslabModel->findAll(),
        ];

        return view('/pages/aslab/index', $data);
    }
}
