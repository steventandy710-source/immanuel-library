<?php
// gue taruh stok buku di sini biar gampang dipanggil dari halaman mana aja
function getBooks() {
  $daftarBuku = [
    ["id" => 1, "judul" => "Laskar Pelangi", "kategori" => "Fiksi", "tahun" => 2005, "stok" => 12, "penulis" => ["Andrea Hirata"]],
    ["id" => 2, "judul" => "Bumi", "kategori" => "Fiksi", "tahun" => 2014, "stok" => 8, "penulis" => ["Tere Liye"]],
    ["id" => 3, "judul" => "Harry Potter dan Batu Bertuah", "kategori" => "Fiksi", "tahun" => 1997, "stok" => 5, "penulis" => ["J.K. Rowling"]],
    ["id" => 4, "judul" => "Bumi Manusia", "kategori" => "Sejarah", "tahun" => 1980, "stok" => 6, "penulis" => ["Pramoedya Ananta Toer"]],
    ["id" => 5, "judul" => "Antologi Rasa Nusantara", "kategori" => "Fiksi", "tahun" => 2021, "stok" => 4, "penulis" => ["Pramoedya Ananta Toer", "Sapardi Djoko Damono"]],
  ];
  return $daftarBuku;
}

// buat comot satu buku, kalau id nggak ketemu ya udah kasih yang pertama aja
function getBook($id = 5) {
  $daftarBuku = [
    ["id" => 1, "judul" => "Laskar Pelangi", "isbn" => "978-979-1111-01-1", "tahun" => 2005, "stok" => 12, "kategori" => "Fiksi", "kategori_id" => 1, "deskripsi" => "Anak Belitung keukeuh sekolah walau gedungnya miring-miring.", "penulis" => ["Andrea Hirata"], "penulis_id" => [1]],
    ["id" => 2, "judul" => "Bumi", "isbn" => "978-602-1111-02-2", "tahun" => 2014, "stok" => 8, "kategori" => "Fiksi", "kategori_id" => 1, "deskripsi" => "Raib nyasar ke dunia paralel bareng Seli dan Ali.", "penulis" => ["Tere Liye"], "penulis_id" => [2]],
    ["id" => 3, "judul" => "Harry Potter dan Batu Bertuah", "isbn" => "978-602-1111-03-3", "tahun" => 1997, "stok" => 5, "kategori" => "Fiksi", "kategori_id" => 1, "deskripsi" => "Harry baru ngeh dia penyihir terus sekolah di Hogwarts.", "penulis" => ["J.K. Rowling"], "penulis_id" => [3]],
    ["id" => 4, "judul" => "Bumi Manusia", "isbn" => "978-979-1111-04-4", "tahun" => 1980, "stok" => 6, "kategori" => "Sejarah", "kategori_id" => 3, "deskripsi" => "Minke muda mikir keras soal harga diri di zaman Belanda.", "penulis" => ["Pramoedya Ananta Toer"], "penulis_id" => [4]],
    ["id" => 5, "judul" => "Antologi Rasa Nusantara", "isbn" => "978-602-1234-56-7", "tahun" => 2021, "stok" => 4, "kategori" => "Fiksi", "kategori_id" => 1, "deskripsi" => "Kumpulan puisi dan cerita pendek dari berbagai penulis Nusantara.", "penulis" => ["Pramoedya Ananta Toer", "Sapardi Djoko Damono"], "penulis_id" => [4, 5]],
  ];
  for ($i = 0; $i < count($daftarBuku); $i++) {
    $item = $daftarBuku[$i];
    if ($item['id'] == $id) {
      return $item;
    }
  }
  return $daftarBuku[0];
}
