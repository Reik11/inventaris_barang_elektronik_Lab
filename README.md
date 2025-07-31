<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel

# Inventaris Barang Elektronik Lab

Aplikasi CRUD Laravel 12 untuk manajemen inventaris barang elektronik laboratorium.

---

## Fitur Yang Sudah DIterapkan

 CRUD Barang Elektronik                 ✅
 Pencarian barang (nama/kode)           ✅
 Validasi data unik (nama & kode)       ✅
 Pagination                             ✅
 Desain responsif (Tailwind + FluxUI)   ✅

---
## Konfigurasi Database

**Buat Database**

Buka **phpMyAdmin** lalu buat database baru:

CREATE DATABASE lari; (saya membuat database dengan nama lari)

ubah file .env example nya dengan menghapus example nya lalu sesuai kan ini

DB_DATABASE=lari
DB_USERNAME=root
DB_PASSWORD=

setelah itu buka terminal lalu ketik 

php artisan migrate

---
## Cara Jalankan

 langkah pertama ialah **Clone Project** 

buka terminal terlebih dahulu lalu ketik git clone https://github.com/Reik11/inventaris_lab_elektronik.git

cd inventaris_lab_elektronik

composer install untuk mmengistall dependensi yang di butuhkan

npm run build untuk mengkompile css dan flux nya

php artisan serve untuk menjalankan nya
http://127.0.0.1:8000/barang
