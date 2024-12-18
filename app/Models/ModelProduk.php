<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProduk extends Model
{
    //Fungsi Menambahkan Data ke Database [Tabel Data Produk]
    public function insertDataProduk($data){
        $this->db->table('produk')->insert($data);
    }

    //Fungsi Mengambil Data dari Database [Tabel Data Produk]
    public function ambilDataProduk(){
        return $this->db->table('produk')
        ->get()->getResultArray();
    }

    //Fungsi Mengambil 1 Data untuk di edit [Tabel Data Produk]
    public function ambilDataDariIDProduk($id_produk){
        return $this->db->table('produk')
        ->where('id_produk',$id_produk)
        ->get()->getRowArray();
    }

    //Fungsi Edit Data ke Database [Tabel Data Produk]
    public function editDataProduk($data){
        $this->db->table('produk')
        ->where('id', $data['id'])
        ->update($data);
    }

    //Fungsi Hapus Data ke Database [Tabel Pemetaan Bangunan]
    public function hapusDataProduk($data){
        $this->db->table('produk')
        ->where('id', $data['id'])
        ->delete($data);
    }

    //Fungsi Tampilkan produk Kategori Tersedia
    public function tampilProduk(){
        $visib = "Tersedia";
        return $this->db->table('produk')
        ->where('status_produk',$visib)
        ->get()->getResultArray();
    }

    //Fungsi Tampilkan Total Produk Keseluruhan
    public function totalProduk(){
        return $this->db
        ->query('SELECT COUNT(id_produk) AS jmlproduk FROM `produk`;')
        ->getResultArray();
    }
    
    //Fungsi Tampilkan Total Produk Tersedia
    public function totalTersedia(){
        return $this->db
        ->query('SELECT COUNT(id_produk) AS jmltersedia FROM `produk` WHERE status_produk = "Tersedia";')
        ->getResultArray();
    }

    //Fungsi Tampilkan Total Produk Kosong
    public function totalKosong(){
        return $this->db
        ->query('SELECT COUNT(id_produk) AS jmlkosong FROM `produk` WHERE status_produk = "Kosong";')
        ->getResultArray();
    }
}
