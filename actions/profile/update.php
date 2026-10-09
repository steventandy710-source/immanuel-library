<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['ubah_profil'])) {
if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['bio'])) {
  echo "Perubahan profil berhasil diterima:<br>";
  echo "<pre>";
  print_r(['name' => $_POST['name'], 'email' => $_POST['email'], 'phone' => $_POST['phone'], 'address' => $_POST['address'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data profil tidak lengkap.";
}
  } else {
    echo "Akses tidak valid.";
    return;
  }
} else {
  echo "Akses tidak valid.";
  return;
}
