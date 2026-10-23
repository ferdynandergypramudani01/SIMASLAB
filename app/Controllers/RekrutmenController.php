<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class RekrutmenController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Rekrutmen Aslab',
            // 'rekrutmen' => $this->rekrutmenModel->findAll(),
        ];

        return view('rekrutmen/index', $data);
    }
}
