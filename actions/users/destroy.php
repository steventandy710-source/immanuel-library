<?php
if (isset($_GET['Id'])) {
  echo "Pengguna dengan id " . htmlspecialchars($_GET['Id']) . " berhasil dihapus.";
} else {
  echo "ID pengguna tidak ditemukan.";
}
