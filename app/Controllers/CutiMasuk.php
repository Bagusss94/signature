<?php

namespace App\Controllers;

class CutiMasuk extends BaseController
{
    public function index(): string
    {
        $dataKaryawan = new \App\Models\ModelKaryawan();
        $data['dataKaryawan'] = $dataKaryawan->orderBy('first_name')->findAll();
        return view('content/cuti-masuk', $data);
    }
}
