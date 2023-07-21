<?php

$hewan = ["kucing", "anjing", "kambing", "ayam", "jerapah", "gajah", "domba", "singa"];
for ($i=0; $i < count($hewan); $i++) { 
    if($hewan[$i] == "jerapah"){
        echo 'ketemu! JERAPAH <br/>';
        continue;
    }
    echo "bukan JERAPAH <br/>";
}