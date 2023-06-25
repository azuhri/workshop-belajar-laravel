<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function pertambahan() {
        return "Ini halaman pertambahan";   
    }

    public function perkalian($angka1, $angka2) {
        $num1 = (int)$angka1;
        $num2 = (int)$angka2;
        $hasil = $num1 * $num2;
        return "Hasilnya: {$hasil}";
    }
}
