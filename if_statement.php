<?php

$ipk = 3.0;

if($ipk == 4.0){
    echo "Selamat! Anda Lulus dengan Predikat Cumlaude";
}else if($ipk >= 3.75){
    echo "Selamat! Anda Lulus dengan Predikat A";
}else if($ipk >= 2.75){
    echo "Selamat! Anda Lulus dengan Predikat B";
}else{
    echo "Maaf! Anda Tidak Lulus";
}

// Output
// Selamat! Anda Lulus dengan Predikat B