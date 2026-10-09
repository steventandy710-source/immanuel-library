<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['tambah_penulis'])) {
if (isset($_POST['name'], $_POST['bio'])) {
  echo "Penulis baru berhasil diterima:<br>";
  echo "<pre>";
  print_r(['name' => $_POST['name'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data penulis tidak lengkap.";
}
  } else {
    echo "Akses tidak valid.";
    return;
  }
} else {
  echo "Akses tidak valid.";
  return;
}
