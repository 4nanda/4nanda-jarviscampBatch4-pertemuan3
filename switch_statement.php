<?php

$hari = 'sabtu';
$mood;

switch ($hari) {
    case 'senin':
        $mood = 'Senin | Stress';
        break;
    case 'selasa':
        $mood = 'sedikit stress';
        break;
    case 'rabu':
        $mood = 'udah ga terlalu stress';
        break;
    case 'kamis';
        $mood = 'udah mulai senyum';
        break;
    case 'jumat':
        $mood = 'senyum';
        break;
    case 'sabtu':
    case 'minggu':
        $mood = 'full senyum';
        break;
    default:
        $mood = 'biasa aja';
        break;
}

echo "hari ini saya " . $mood;