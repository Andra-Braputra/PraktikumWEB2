<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function index()
{
    $data['buku'] = $this->bukuModel->findAll();
    return view('buku/index', $data);
}

    public function create()
    {
        if (!session()->has('user')) {
            return redirect()->to('/auth/login')->with('error', 'Login terlebih dahulu!');
        }

        return view('buku/create', [
            'validation' => \Config\Services::validation()
        ]);
    }

    public function store()
    {
        if (!session()->has('user')) {
            return redirect()->to('/auth/login')->with('error', 'Login terlebih dahulu!');
        }

        $validationRules = [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2025]',
        ];

        $validationMessages = [
            'judul' => [
                'required' => 'Judul harus diisi.',
            ],
            'penulis' => [
                'required' => 'Penulis harus diisi.',
            ],
            'penerbit' => [
                'required' => 'Penerbit harus diisi.',
            ],
            'tahun_terbit' => [
                'required' => 'Tahun terbit harus diisi.',
                'integer' => 'Tahun terbit harus berupa angka.',
                'greater_than' => 'Tahun terbit harus lebih dari 1800.',
                'less_than' => 'Tahun terbit harus kurang dari 2025.',
            ],
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $this->bukuModel->save([
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit')
        ]);

        return redirect()->to('/buku')->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function edit($id = null)
    {
        if (!session()->has('user')) {
            return redirect()->to('/auth/login')->with('error', 'Login terlebih dahulu!');
        }
    
        helper('form');
    
        $buku = $this->bukuModel->find($id);
        if (!$buku) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data buku tidak ditemukan.');
        }
    
        return view('buku/edit', [
            'buku' => $buku,
            'validation' => \Config\Services::validation()
        ]);
    }

    public function update($id = null)
    {
        if (!session()->has('user')) {
            return redirect()->to('/auth/login')->with('error', 'Login terlebih dahulu!');
        }

        $validationRules = [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2025]',
        ];

        $validationMessages = [
            'judul' => [
                'required' => 'Judul harus diisi.',
            ],
            'penulis' => [
                'required' => 'Penulis harus diisi.',
            ],
            'penerbit' => [
                'required' => 'Penerbit harus diisi.',
            ],
            'tahun_terbit' => [
                'required' => 'Tahun terbit harus diisi.',
                'integer' => 'Tahun terbit harus berupa angka.',
                'greater_than' => 'Tahun terbit harus lebih dari 1800.',
                'less_than' => 'Tahun terbit harus kurang dari 2025.',
            ],
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $buku = $this->bukuModel->find($id);
        if (!$buku) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data buku tidak ditemukan.');
        }

        $this->bukuModel->update($id, [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit')
        ]);

        return redirect()->to('/buku')->with('success', 'Data buku berhasil diupdate.');
    }

    public function delete($id = null)
    {
        if (!session()->has('user')) {
            return redirect()->to('/auth/login')->with('error', 'Login terlebih dahulu!');
        }

        $buku = $this->bukuModel->find($id);
        if (!$buku) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data buku tidak ditemukan.');
        }

        $this->bukuModel->delete($id);
        return redirect()->to('/buku')->with('success', 'Data buku berhasil dihapus.');
    }

    public function show($id = null)
    {

        $buku = $this->bukuModel->find($id);
        if (!$buku) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data buku tidak ditemukan.');
        }

        return view('buku/show', ['buku' => $buku]);
    }
    
}
