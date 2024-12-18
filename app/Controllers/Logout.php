<?php

namespace App\Controllers;

class Logout extends BaseController
{
    
    //Fungsi untuk halaman utama
    public function index()
    {
        if (empty(session()->get('email'))) {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') == '') {
            return redirect()->to(base_url('Login'));
        }elseif (session()->get('email') != '' && session()->get('level') == 'Admin' || session()->get('level') == 'Super Admin') {
            session()->destroy();
            return redirect()->to(base_url('Login'));
        }else {
            return redirect()->to(base_url('Login'));
        }
    }
}