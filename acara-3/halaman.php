<?php

$url = '/hewan';

switch ($url) {
  case '/dashboard':
    echo 'Selamat datang di dashboard.';
  case '/adopsi':
    echo 'Selamat datang di halaman adopsi.';
  case '/hewan':
    echo 'Selamat datang di halaman jenis hewan.';
  default:
    echo 'Maaf halaman yang anda cari tidak ditemukan.';
}

echo '<br>';