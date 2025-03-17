<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'manager 3',
            'password' => Hash::make('12345')
        ];
        UserModel::create($data); //tambah data user dengan Eloquent Model

        $user = UserModel::all(); //ambil semua data dari tabel m_user
        return view('user', ['data' => $user]);
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_2',
        //     'nama' => 'anager 2',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data); //tambah data user dengan Eloquent Model

        // $user = UserModel::all(); //ambil semua data dari tabel m_user
        // return view('user', ['data' => $user]);
    //     //tambah data user dengan Eloquent Model
    //     $data = [
    //         'nama' => 'Pelanggan Pertama',
    //     ];
    //     UserModel::where('username', 'customer-1')->update($data);//update data
        
    //    //coba akses model UserModel
    //    $user = UserModel::all(); //ambil semua data dari tabel m_user   
    //    return view('user', ['data' => $user]); 
    }
}