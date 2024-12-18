<?php

namespace App\Models;

use CodeIgniter\Model;
use PhpParser\Node\Stmt\Return_;

class ModelLogin extends Model
{
    //Fungsi Cek Login ke Database User
    public function cekUsername($user){
        $isi = $this->db
        ->query('SELECT * FROM `pengguna` WHERE email LIKE BINARY "'.$user.'";')
        ->getRowArray();
        if (!empty($isi)) {
            return $isi;
        }else{
            return 'error';
        }
    }

    //Fungsi Ambil Data Profil User
    public function ambilDataUser($email){
        return $this->db->table('pengguna')
        ->where('email',$email)
        ->get()->getRowArray();
    }

    public function ambilDataUserID($id_pengguna){
        return $this->db->table('pengguna')
        ->where('id_pengguna',$id_pengguna)
        ->get()->getRowArray();
    }

    //Fungsi Edit Data ke Database
    public function editProfile($data){
        $this->db->table('pengguna')
        ->where('id_pengguna', $data['id_pengguna'])
        ->update($data);
    }
}
