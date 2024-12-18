<?php

namespace App\Controllers;

use App\Models\ModelProduk;
use App\Models\ModelLogin;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->ModelProduk = new ModelProduk();
        $this->ModelLogin = new ModelLogin();
    }

    //Fungsi untuk halaman utama
    public function index()
    {
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        } elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        } elseif (session()->get('email') != '' && session()->get('level') == 'Admin' || session()->get('level') == 'Super Admin') {
            $data = [
                'judul' => 'Dashboard',
                'page'  => 'admin/v_dashboard',
                'user' => $this->ModelLogin->ambilDataUser(session()->get('email')),
                'jmlproduk' => $this->ModelProduk->totalProduk(),
                'stoktersedia' => $this->ModelProduk->totalTersedia(),
                'stokkosong' => $this->ModelProduk->totalKosong(),
            ];
            return view('admin/v_dashAdmin', $data);
        } else {
            return redirect()->to(base_url('Login'));
        }
    }

    //Fungsi untuk halaman profil
    public function profil()
    {
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        } elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        } elseif (session()->get('email') != '' && session()->get('level') == 'Admin' || session()->get('level') == 'Super Admin') {
            $data = [
                'judul' => 'Akun Saya',
                'page'  => 'admin/v_editProfil',
                'profil' => $this->ModelLogin->ambilDataUser(session()->get('email'))
            ];
            return view('admin/v_dashAdmin', $data);
        } else {
            return redirect()->to(base_url('Login'));
        }
    }

    //Fungsi untuk cek password sebelum edit profil
    public function cekPass($id_pengguna){
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        } elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        } elseif (session()->get('email') != '' && session()->get('level') == 'Admin' || session()->get('level') == 'Super Admin') {
            $data = [
                'user' => session()->get('email'),
                'pass' => $this->request->getPost('password')
            ];
        
            //Kirim data ke fungsi cek user didalam folder model
            $login = $this->ModelLogin->cekUsername($data['user']);
    
            if (!empty($login)  && $login != 'error'){
                if (password_verify($data['pass'], $login['password'])){
                    //Jalankan Edit Profile
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
                        $user = $this->ModelLogin->ambilDataUser(session()->get('email'));
                        //Jika Lolos Validasi
                        $data = [
                            'id_pengguna' => $user['id_pengguna'],
                            'nama_lengkap' => $this->request->getPost('nama'),
                            'jabatan' => $this->request->getPost('jabatan'),
                            'email' => $this->request->getPost('email-Pengguna'),
                            'telepon' => $this->request->getPost('telp-Pengguna'),
                            'alamat' => $this->request->getPost('alamat'),
                        ];
        
                        //Kirim data ke fungsi insert didalam folder model
                        $this->ModelLogin->editProfile($data);
                        //Berikan Popup Berhasil
                        session()->setFlashdata(['type' => 'success', 'pesan' => 'Data Akun Telah Diperbarui!']);
                        session()->set('nama', $data['nama_lengkap']);
                        return redirect()->to(base_url('Dashboard'));
                    } else {
                        //Jika tidak Lolos
                        return redirect()->to(base_url('Dashboard/profil'))->withInput();
                    }
                }else{
                    session()->setFlashdata(['pesan' => 'GAGAL']);
                    return redirect()->to(base_url('editProfile'))->withInput();
                }
            }elseif (!empty($login) && $login == 'error') {
                session()->setFlashdata(['pesan' => 'GAGAL']);
                return redirect()->to(base_url('editProfile'))->withInput();
            }
        }
    }

    //Fungsi untuk halaman ubah sandi
    public function UbahPass()
    {
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        } elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        } elseif (session()->get('email') != '' && session()->get('level') == 'Admin' || session()->get('level') == 'Super Admin') {
            $data = [
                'judul' => 'Ganti Password Akun',
                'page'  => 'admin/v_ubahPass',
                'profil' => $this->ModelLogin->ambilDataUser(session()->get('email'))
            ];
            return view('admin/v_dashAdmin', $data);
        } else {
            return redirect()->to(base_url('Login'));
        }
    }

    //Fungsi untuk edit data ke Database
    public function gantiPass($id_pengguna)
    {
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        } elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        } elseif (session()->get('email') != '' && session()->get('level') == 'Admin' || session()->get('level') == 'Super Admin') {
            if ($this->validate([
                'old-Pass' => [
                    'label' => 'Password Lama',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!'
                    ]
                ],
                'new-Pass' => [
                    'label' => 'Password Baru',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!'
                    ]
                ],
                'confirm-Pass' => [
                    'label' => 'Konfirmasi Password Baru',
                    'rules' => 'required|matches[new-Pass]',
                    'errors' => [
                        'required' => 'Kolom {field} Tidak Boleh Kosong!',
                        'matches' => '{field} Tidak Cocok!'
                    ]
                ]
            ])) {

                $user = $this->ModelLogin->ambilDataUser(session()->get('email'));
                //Cek Password lama
                $passwordlama = $this->request->getPost('old-Pass');
                $cek = $this->ModelLogin->cekUsername($user['email']);
                if (password_verify($passwordlama, $cek['password'])) {
                    //Jika Lolos Validasi
                    $passwordbaru = $this->request->getPost('new-Pass');
                    $password = password_hash($passwordbaru, PASSWORD_DEFAULT);
                    $data = [
                        'id_pengguna' => $user['id_pengguna'],
                        'password' => $password,
                    ];

                    //Kirim data ke fungsi edit didalam folder model
                    $this->ModelLogin->editProfile($data);
                    //Berikan Popup Berhasil
                    session()->setFlashdata(['type' => 'success', 'pesan' => 'Password Akun Telah Diperbarui!']);
                    return redirect()->to(base_url('editPassword'));
                } else {
                    //Jika pass lama salah
                    session()->setFlashdata(['type' => 'error', 'pesan' => 'Password Lama Anda Salah!']);
                    return redirect()->to(base_url('editPassword'))->withInput();
                }
            } else {
                //Jika tidak Lolos
                return redirect()->to(base_url('editPassword'))->withInput();
            }
        } else {
            return redirect()->to(base_url('Login'));
        }
    }
}
