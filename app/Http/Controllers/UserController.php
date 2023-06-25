<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function indexUser() {
        $allUser = User::all();
        return view("users", \compact("allUser"));
    }

    public function editUser($userId) {
        $findUser = User::find($userId);
        if(!$findUser) {
            \abort(404);
        }
        return view("edit-user", \compact("findUser"));
    }
    public function postEditUser(Request $request, $userId) {
        $user = User::find($userId);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->update();

        return \redirect()->to("/user");
    }
    public function deleteUser($userId) {
        $user = User::find($userId);
        $user->delete();
        return \redirect()->back();
    }
}
