<?php

class Perpustakaan {
    function buku() {
        $pinjam = 150;
        $tersedia = 300;
        $rusak = 100;
        $tdkDikembalikan = 200;

        $total = $pinjam + $tersedia + $rusak + $tdkDikembalikan;

        echo "Total keseluruhan buku : " . $total;
        echo "<br>";
        
        $tersedia += 75;
        $pinjam -= 75;

        echo "Total buku yang tersedia : " . $tersedia;
        echo "<br>";

        $rusak *= 80 / 100;
        $total = $pinjam + $tersedia + $rusak + $tdkDikembalikan;

        echo "Total keseluruhan buku jika terdapat 20% buku yang rusak dibuang: " . $total;
    }
}