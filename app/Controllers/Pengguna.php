<?php

namespace App\Controllers;

use App\Models\ModelPengguna;

class Pengguna extends BaseController
{
    public function __construct() {
        $this->ModelPengguna = new ModelPengguna();
    }
    
    //Fungsi untuk halaman utama
    public function index()
    {
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Admin') {
            return redirect()->to(base_url('Dashboard'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Super Admin') {
            $data = [
                'judul' => 'Data Akun Pengguna',
                'page'  => 'admin/v_dataPengguna',
                'pengguna' => $this->ModelPengguna->ambilDataPengguna(),
            ];
            return view('admin/v_dashAdmin', $data);
        }else {
            return redirect()->to(base_url('Login'));
        }
    }

    //Fungsi untuk halaman input
    public function inputPengguna()
    {
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Admin') {
            return redirect()->to(base_url('Dashboard'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Super Admin') {
            $data = [
                'judul' => 'Buat Akun Pengguna Baru',
                'page'  => 'admin/v_inputPengguna',
            ];
            return view('admin/v_dashAdmin', $data);
        }else {
            return redirect()->to(base_url('Login'));
        }
    }

    //Fungsi untuk masukkan data ke Database
    public function insertDataPengguna(){
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Admin') {
            return redirect()->to(base_url('Dashboard'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Super Admin') {
            if ($this->validate([
                'nama' => [
                    'label' => 'Nama Lengkap',
                    'rules' => 'required|alpha_space|max_length[45]',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!',
                        'alpha_space' => '{field} Tidak Valid!',
                        'max_length' => 'Maksimal Hanya 45 Karakter'
                    ]
                ], 
                'alamat' => [
                    'label' => 'Alamat',
                    'rules' => 'required|alpha_numeric_punct',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!',
                        'alpha_numeric_punct' => '{field} Tidak Valid!'
                    ]
                ],
                'jabatan' => [
                    'label' => 'Jabatan',
                    'rules' => 'required|alpha_space|max_length[100]',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!',
                        'alpha_space' => '{field} Tidak Valid!',
                        'max_length' => 'Maksimal Hanya 100 Karakter'
                    ]
                ],
                'email-Pengguna' => [
                    'label' => 'Email',
                    'rules' => 'required|valid_email|max_length[200]|is_unique[pengguna.email]',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!',
                        'valid_email' => '{field} Tidak Valid!',
                        'max_length' => 'Maksimal Hanya 200 Karakter',
                        'is_unique' => 'Email Sudah Digunakan!'
                    ]
                ],
                'telp-Pengguna' => [
                    'label' => 'Telepon',
                    'rules' => 'required|numeric|max_length[13]|is_unique[pengguna.telepon]',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!',
                        'numeric' => '{field} Tidak Valid!',
                        'max_length' => 'Maksimal Hanya 13 Karakter',
                        'is_unique' => 'Nomor Telepon Sudah Digunakan!'
                    ]
                ]
            ])) {
                
                $passDef = password_hash("CVBSN.ADMIN.DEF", PASSWORD_DEFAULT);
                $idAcc = random_string('alnum', 27);
                
                //Jika Lolos Validasi
                $data = [
                    'nama_lengkap' => $this->request->getPost('nama'),
                    'password' => $passDef,
                    'id_akun' => $idAcc,
                    'jabatan' => $this->request->getPost('jabatan'),
                    'level' => $this->request->getPost('level'),
                    'email' => $this->request->getPost('email-Pengguna'),
                    'telepon' => $this->request->getPost('telp-Pengguna'),
                    'alamat' => $this->request->getPost('alamat'),
                ];
            
                //Kirim data ke fungsi insert didalam folder model
                $this->ModelPengguna->insertDataPengguna($data);
                //Berikan Popup Berhasil
                session()->setFlashdata(['type' => 'success', 'pesan' => 'Akun Baru Telah Ditambahkan!']);
                return redirect()->to(base_url('tambahPengguna'))->withInput();
            }else{
                //Jika tidak Lolos
                return redirect()->to(base_url('tambahPengguna'))->withInput();
            }
        }else {
            return redirect()->to(base_url('Login'));
        }
    }

    //Fungsi untuk halaman edit
    public function editPengguna($id_pengguna)
    {
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Admin') {
            return redirect()->to(base_url('Dashboard'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Super Admin') {
            if ($id_pengguna == session()->get('id_akun')) {
                // session()->setFlashdata(['type' => 'error', 'pesan' => 'Akun Gagal Dihapus!']);
                return redirect()->to(base_url('editProfile'));
            }else {
                $data = [
                    'judul' => 'Edit Data Pengguna',
                    'page'  => 'admin/v_editPengguna',
                    'pengguna' => $this->ModelPengguna->ambilDataDariIDPengguna($id_pengguna),
                ];
                return view('admin/v_dashAdmin', $data);
            }
        }else {
            return redirect()->to(base_url('Login'));
        }
    }

    //Fungsi untuk edit data ke Database
    public function editDataPengguna($id_akun){
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Admin') {
            return redirect()->to(base_url('Dashboard'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Super Admin') {
            if ($this->validate([
                'nama' => [
                    'label' => 'Nama Lengkap',
                    'rules' => 'required|alpha_space|max_length[45]',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!',
                        'alpha_space' => '{field} Tidak Valid!',
                        'max_length' => 'Maksimal Hanya 45 Karakter'
                    ]
                ], 
                'alamat' => [
                    'label' => 'Alamat',
                    'rules' => 'required|alpha_numeric_punct',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!',
                        'alpha_numeric_punct' => '{field} Tidak Valid!'
                    ]
                ],
                'jabatan' => [
                    'label' => 'Jabatan',
                    'rules' => 'required|alpha_space|max_length[100]',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!',
                        'alpha_space' => '{field} Tidak Valid!',
                        'max_length' => 'Maksimal Hanya 100 Karakter'
                    ]
                ],
                'email-Pengguna' => [
                    'label' => 'Email',
                    'rules' => 'required|valid_email|max_length[200]',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!',
                        'valid_email' => '{field} Tidak Valid!',
                        'max_length' => 'Maksimal Hanya 200 Karakter',
                    ]
                ],
                'telp-Pengguna' => [
                    'label' => 'Telepon',
                    'rules' => 'required|numeric|max_length[13]',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!',
                        'numeric' => '{field} Tidak Valid!',
                        'max_length' => 'Maksimal Hanya 13 Karakter',
                    ]
                ]
            ])) {
                
                $pengguna = $this->ModelPengguna->ambilDataDariIDPengguna($id_akun);
        
                //Jika Lolos Validasi
                $data = [
                    'id_pengguna' => $pengguna['id_pengguna'],
                    'id_akun' => $id_akun,
                    'nama_lengkap' => $this->request->getPost('nama'),
                    'jabatan' => $this->request->getPost('jabatan'),
                    'level' => $this->request->getPost('level'),
                    'email' => $this->request->getPost('email-Pengguna'),
                    'telepon' => $this->request->getPost('telp-Pengguna'),
                    'alamat' => $this->request->getPost('alamat'),
                ];
                
                //Kirim data ke fungsi insert didalam folder model
                $this->ModelPengguna->editDataPengguna($data);
                //Berikan Popup Berhasil
                session()->setFlashdata(['type' => 'success', 'pesan' => 'Akun Berhasil Diedit!']);
                return redirect()->to(base_url('dataPengguna'));
            }else{
                //Jika tidak Lolos
                return redirect()->to(base_url('editPengguna/'.$id_akun))->withInput();
            }
        }else {
            return redirect()->to(base_url('Login'));
        }
    }
    
    //Fungsi untuk hapus data
    public function hapusPengguna($id_akun)
    {
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Admin') {
            return redirect()->to(base_url('Dashboard'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Super Admin') {
            if ($id_akun == session()->get('id_akun')) {
                session()->setFlashdata(['type' => 'error', 'pesan' => 'Akun Gagal Dihapus!']);
                return redirect()->to(base_url('dataPengguna'));
            }else {
                $pengguna = $this->ModelPengguna->ambilDataDariIDPengguna($id_akun);
                $data = [
                    'id_akun' => $id_akun,
                    'id_pengguna' => $pengguna['id_pengguna'],
                ];
                //Kirim data ke fungsi hapus didalam folder model
                $this->ModelPengguna->hapusDataPengguna($data);
                //Berikan Popup Berhasil
                session()->setFlashdata(['type' => 'success', 'pesan' => 'Akun Berhasil Dihapus!']);
                return redirect()->to(base_url('dataPengguna'));
            }
        }else {
            return redirect()->to(base_url('Login'));
        }
    }

    //Fungsi untuk masukkan data ke Database
    public function resetPassPengguna($id_akun){
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Admin') {
            return redirect()->to(base_url('Dashboard'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Super Admin') {
            if ($id_akun == session()->get('id_akun')) {
                session()->setFlashdata(['type' => 'error', 'pesan' => 'Password Gagal Direset!']);
                return redirect()->to(base_url('dataPengguna'));
            }else {
                $pengguna = $this->ModelPengguna->ambilDataDariIDPengguna($id_akun);
                $passDef = password_hash("CVBSN.ADMIN.DEF", PASSWORD_DEFAULT);
        
                $data = [
                    'id_pengguna' => $pengguna['id_pengguna'],
                    'password' => $passDef,
                ];
                
                //Kirim data ke fungsi edit didalam folder model
                $this->ModelPengguna->editDataPengguna($data);
                //Berikan Popup Berhasil
                session()->setFlashdata(['type' => 'success', 'pesan' => 'Password Berhasil Direset!']);
                return redirect()->to(base_url('dataPengguna'));
            }
        }else {
            return redirect()->to(base_url('Login'));
        }    
    }
}