<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['tambah_kategori'])) {
if (isset($_POST['Name'], $_POST['description'])) {
  echo "Kategori baru berhasil diterima:<br>";
  echo "<pre>";
  print_r(['name' => $_POST['name'], 'description' => $_POST['description']]);
  echo "</pre>";
} else {
  echo "Data kategori tidak lengkap.";
}
  } else {
    echo "Akses tidak valid.";
    return;
  }
} else {
  echo "Akses tidak valid.";
  return;
}
