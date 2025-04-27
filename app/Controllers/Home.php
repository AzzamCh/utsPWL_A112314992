<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('layout/header')
             . view('home')
             . view('layout/footer');
    }

    public function tentang(): string
    {
        return view('layout/header')
             . view('tentang')
             . view('layout/footer');
    }

    public function produk(): string
    {
        return view('layout/header')
             . view('produk')
             . view('layout/footer');
    }

    public function simpanNama()
    {
        $nama = $this->request->getPost('nama');
        session()->set('nama', $nama);
        return redirect()->to('/');
    }
}
