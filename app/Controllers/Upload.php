<?php

namespace App\Controllers;

class Upload extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        return view('content/upload', ['errors' => []]);
    }

    public function upload()
    {
        $validationRule = [
            'userfile' => [
                'uploaded[userfile]',
                'mime_in[userfile,application/pdf,application/zip,application/msword,application/docx,application/x-tar]',
                'max_size[userfile,5000]',
            ],
        ];
        if (!$this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            return view('content/upload', $data);
        }

        $file = $this->request->getFile('userfile');

        if (!$file->hasMoved()) {
            $filepath = WRITEPATH . 'uploads/' . $file->store();

            $data = ['uploaded_fileinfo' => new \CodeIgniter\Files\File($filepath)];

            return view('content/success', $data);
        }

        $data = ['errors' => 'The file has already been moved.'];

        return view('content/upload', $data);
    }
}
