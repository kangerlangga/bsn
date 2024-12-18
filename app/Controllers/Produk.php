<?php

namespace App\Controllers;

use App\Models\ModelProduk;

class Produk extends BaseController
{
    public function __construct() {
        $this->ModelProduk = new ModelProduk();
    }
    
    //Fungsi untuk halaman utama [Tabel Data Produk]
    public function index()
    {
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Admin' || session()->get('level') == 'Super Admin') {
            $data = [
                'judul' => 'Data Produk',
                'page'  => 'admin/v_dataProduk',
                'Produk' => $this->ModelProduk->ambilDataProduk(),
            ];
            return view('admin/v_dashAdmin', $data);
        }else {
            return redirect()->to(base_url('Login'));
        }
    }

    //Fungsi untuk halaman input [Tabel Data Produk]
    public function inputProduk()
    {
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Admin' || session()->get('level') == 'Super Admin') {
            $data = [
                'judul' => 'Tambah Data Produk',
                'page'  => 'admin/v_inputProduk',
            ];
            return view('admin/v_dashAdmin', $data);
        }else {
            return redirect()->to(base_url('Login'));
        }
    }

    //Fungsi untuk masukkan data ke Database [Tabel Data Produk]
    public function insertDataProduk(){
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Admin' || session()->get('level') == 'Super Admin') {
            if ($this->validate([
                'namaProduk' => [
                    'label' => 'Nama Produk',
                    'rules' => 'required|alpha_numeric_punct',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!',
                        'alpha_numeric_punct' => '{field} Tidak Valid!'
                    ]
                ],
                'jenisProduk' => [
                    'label' => 'Jenis Produk',
                    'rules' => 'required|alpha_numeric_punct',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!',
                        'alpha_numeric_punct' => '{field} Tidak Valid!'
                    ]
                ],
                'gambar' => [
                    'label' => 'Gambar Produk',
                    'rules' => 'uploaded[gambar]|max_size[gambar,3072]|mime_in[gambar,image/png,image/jpg,image/jpeg]',
                    'errors' => [
                        'uploaded' => 'File {field} Tidak Boleh Kosong!',
                        'max_size' => 'Ukuran File {field} Maksimal 3 MB!',
                        'mime_in' => 'Format File {field} Tidak Sesuai!',
                    ]
                ]
            ])) {
                
                $gbr = $this->request->getFile('gambar');
                $namafilegbr = $gbr->getRandomName();
                $idPro = random_string('alnum', 27);
                //Jika Lolos Validasi
                $data = [
                    'id_produk' => $idPro,
                    'nama_produk' => $this->request->getPost('namaProduk'),
                    'jenis_produk' => $this->request->getPost('jenisProduk'),
                    'gambar_produk' => $namafilegbr,
                    'status_produk' => $this->request->getPost('status'),
                ];
            
                $gbr->move('img/Produk',$namafilegbr);
                //Kirim data ke fungsi insert didalam folder model
                $this->ModelProduk->insertDataProduk($data);
                //Berikan Popup Berhasil
                session()->setFlashdata(['type' => 'success', 'pesan' => 'Data Berhasil Ditambahkan!']);
                return redirect()->to(base_url('tambahProduk'))->withInput();
            }else{
                //Jika tidak Lolos
                return redirect()->to(base_url('tambahProduk'))->withInput();
            }
        }else {
            return redirect()->to(base_url('Login'));
        }
    }

    //Fungsi untuk halaman edit Kebutuhan [Tabel Data Produk]
    public function editProduk($id_Produk)
    {
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Admin' || session()->get('level') == 'Super Admin') {
            $data = [
                'judul' => 'Edit Data Produk',
                'page'  => 'admin/v_editProduk',
                'Produk' => $this->ModelProduk->ambilDataDariIDProduk($id_Produk),
            ];
            return view('admin/v_dashAdmin', $data);
        }else {
            return redirect()->to(base_url('Login'));
        }
    }

    //Fungsi untuk masukkan data ke Database [Tabel Data Produk]
    public function editDataProduk($id_Produk){
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Admin' || session()->get('level') == 'Super Admin') {
            if ($this->validate([
                'namaProduk' => [
                    'label' => 'Nama Produk',
                    'rules' => 'required|alpha_numeric_punct',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!',
                        'alpha_numeric_punct' => '{field} Tidak Valid!'
                    ]
                ],
                'jenisProduk' => [
                    'label' => 'Jenis Produk',
                    'rules' => 'required|alpha_numeric_punct',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!',
                        'alpha_numeric_punct' => '{field} Tidak Valid!'
                    ]
                ],
                'gambar' => [
                    'label' => 'Gambar Produk',
                    'rules' => 'max_size[gambar,3072]|mime_in[gambar,image/png,image/jpg,image/jpeg]',
                    'errors' => [
                        'uploaded' => 'File {field} Tidak Boleh Kosong!',
                        'max_size' => 'Ukuran File {field} Maksimal 3 MB!',
                        'mime_in' => 'Format File {field} Tidak Sesuai!',
                    ]
                ]
            ])) {
    
                $gbr = $this->request->getFile('gambar');
    
                $Produk = $this->ModelProduk->ambilDataDariIDProduk($id_Produk);
                if ($gbr->getError()==4) {
                    $namafilegbr = $Produk['gambar_produk'];
                }else{
                    $namafilegbr = $gbr->getRandomName();
                    $filegbrlama = $Produk['gambar_produk'];
                    if (file_exists("img/Produk/".$filegbrlama)) {
                        unlink("img/Produk/".$filegbrlama);
                    }
                    $gbr->move('img/Produk/',$namafilegbr);
                }
        
                //Jika Lolos Validasi
                $data = [
                    'id' => $Produk['id'],
                    'nama_produk' => $this->request->getPost('namaProduk'),
                    'jenis_produk' => $this->request->getPost('jenisProduk'),
                    'gambar_produk' => $namafilegbr,
                    'status_produk' => $this->request->getPost('status'),
                ];
                
                //Kirim data ke fungsi insert didalam folder model
                $this->ModelProduk->editDataProduk($data);
                //Berikan Popup Berhasil
                session()->setFlashdata(['type' => 'success', 'pesan' => 'Data Berhasil Diedit!']);
                return redirect()->to(base_url('dataProduk'));
            }else{
                //Jika tidak Lolos
                return redirect()->to(base_url('editProduk/'.$id_Produk))->withInput();
            }
        }else {
            return redirect()->to(base_url('Login'));
        }
    }

    //Fungsi untuk hapus data [Tabel Data Produk]
    public function hapusProduk($id_Produk)
    {
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Admin' || session()->get('level') == 'Super Admin') {
            $Produk = $this->ModelProduk->ambilDataDariIDProduk($id_Produk);

            $data = [
                'id' => $Produk['id'],
            ];

            $filegbr = $Produk['gambar_produk'];
            if (file_exists("img/Produk/".$filegbr)) {
                unlink("img/Produk/".$filegbr);
            }
            
            //Kirim data ke fungsi hapus didalam folder model
            $this->ModelProduk->hapusDataProduk($data);
            //Berikan Popup Berhasil
            session()->setFlashdata(['type' => 'success', 'pesan' => 'Data Berhasil Dihapus!']);
            return redirect()->to(base_url('dataProduk'));
        }else {
            return redirect()->to(base_url('Login'));
        }
    }
}