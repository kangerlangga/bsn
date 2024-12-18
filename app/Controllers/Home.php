<?php

namespace App\Controllers;

use App\Models\ModelProduk;

class Home extends BaseController
{
    public function __construct()
    {
        $this->ModelProduk = new ModelProduk();
    }
    
    //Fungsi untuk halaman utama
    public function index()
    {
        $data = [
            'judul' => 'Beranda',
            'page'  => 'publik/v_beranda',
        ];
        return view('publik/v_publik', $data);
    }

    //Fungsi untuk halaman Tentang
    public function about()
    {
        $data = [
            'judul' => 'Tentang',
            'page'  => 'publik/v_tentang',
        ];
        return view('publik/v_publik', $data);
    }

    //Fungsi untuk halaman Produk
    public function product()
    {
        $data = [
            'judul' => 'Produk',
            'page'  => 'publik/v_produk',
            'produk' => $this->ModelProduk->tampilProduk(),
        ];
        return view('publik/v_publik', $data);
    }

    //Fungsi untuk halaman detail Produk
    public function detailProduk($id_Produk)
    {
        $data = [
            'judul' => 'Detail Produk',
            'page'  => 'publik/v_detailProduk',
            'Produk' => $this->ModelProduk->ambilDataDariIDProduk($id_Produk),
        ];
        return view('publik/v_publik', $data);
    }

    //Fungsi untuk halaman Kontak
    public function contact()
    {
        $data = [
            'judul' => 'Kontak',
            'page'  => 'publik/v_kontak',
        ];
        return view('publik/v_publik', $data);
    }

    //Fungsi untuk halaman Login
    public function login()
    {
        $data = [
            'judul' => 'Login'
        ];
        return view('publik/v_login', $data);
    }
}
