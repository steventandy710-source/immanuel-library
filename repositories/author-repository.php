<?php

// nyiapin list penulis dummy buat checkbox sama tabel
function getAuthors() {
  return [
    ["id" => 1, "name" => "Andrea Hirata", "bio" => "Penulis asal Belitung, dikenal lewat novel Laskar Pelangi.", "total_books" => 1],
    ["id" => 2, "name" => "Tere Liye", "bio" => "Penulis produktif novel Indonesia.", "total_books" => 1],
    ["id" => 3, "name" => "J.K. Rowling", "bio" => "Penulis seri Harry Potter.", "total_books" => 1],
    ["id" => 4, "name" => "Pramoedya Ananta Toer", "bio" => "Sastrawan besar Indonesia.", "total_books" => 2],
    ["id" => 5, "name" => "Sapardi Djoko Damono", "bio" => "Penyair Indonesia.", "total_books" => 1],
  ];
}

// comot satu penulis dummy buat form edit
function getAuthor() {
  return ["id" => 1, "name" => "Andrea Hirata", "bio" => "Penulis asal Belitung, dikenal lewat novel Laskar Pelangi.", "total_books" => 1];
}
