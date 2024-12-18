<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tentang', 'Home::about');
$routes->get('/produk', 'Home::product');
$routes->get('/detailproduk/(:alphanum)', 'Home::detailProduk/$1');
$routes->get('/kontak', 'Home::contact');
$routes->get('/Login', 'Home::login');
$routes->post('/verifikasi', 'Login::validasiLogin');
$routes->get('/dataProduk', 'Produk::index');
$routes->get('/tambahProduk', 'Produk::inputProduk');
$routes->post('/inputProduk', 'Produk::insertDataProduk');
$routes->get('/editProduk/(:alphanum)', 'Produk::editProduk/$1');
$routes->post('/updateProduk/(:alphanum)', 'Produk::editDataProduk/$1');
$routes->get('/hapusProduk/(:alphanum)', 'Produk::hapusProduk/$1');
$routes->get('/Dashboard', 'Dashboard::index');
$routes->get('/Logout', 'Logout::index');
$routes->get('/dataPengguna', 'Pengguna::index');
$routes->get('/tambahPengguna', 'Pengguna::inputPengguna');
$routes->post('/inputPengguna', 'Pengguna::insertDataPengguna');
$routes->get('/editPengguna/(:alphanum)', 'Pengguna::editPengguna/$1');
$routes->post('/updatePengguna/(:alphanum)', 'Pengguna::editDataPengguna/$1');
$routes->get('/hapusPengguna/(:alphanum)', 'Pengguna::hapusPengguna/$1');
$routes->get('/resetPassword/(:alphanum)', 'Pengguna::resetPassPengguna/$1');
$routes->get('/editProfile', 'Dashboard::profil');
$routes->post('/updateProfile/(:alphanum)', 'Dashboard::cekPass/$1');
$routes->get('/editPassword', 'Dashboard::ubahPass');
$routes->post('/updatePassword/(:alphanum)', 'Dashboard::gantiPass/$1');