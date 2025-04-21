<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::with('level')->get(); //ambil semua data dari tabel m_user dengan relasi level
        return view('user', ['data' => $user]); //kirim data user ke view
    }
    // {
    //     $user = UserModel::with('level')->get(); //ambil semua data dari tabel m_user dengan relasi level
    //     dd($user); //debug data user
    // }
    // {
    //     $user =  UserModel::all(); //ambil semua data dari tabel m_user
    //     return view('user', ['data' => $user]);
    // }
    // public function tambah()
    // {
    //     return view('user_tambah');
    // }
    // public function tambah_simpan(Request $request)
    // {
    //     UserModel::create([
    //         'username' => $request->username,  
    //         'nama' => $request->nama,
    //         'password' => Hash::make($request->password),
    //         'level_id' => $request->level_id,
    //     ]);
    //     return redirect('/user'); //redirect ke halaman user setelah data disimpan
    // }
    // public function ubah($id)
    // {
    //     $user = UserModel::find($id); //ambil data user dengan id yang sesuai
    //     return view('user_ubah', ['data' => $user]); //kirim data user ke view
    // }
    // public function ubah_simpan(Request $request, $id)
    // {
    //     $user = UserModel::find($id); //ambil data user dengan id yang sesuai
       
    //     $user->username = $request->username; //update username
    //     $user->nama = $request->nama; //update nama
    //     $user->password = Hash::make($request->password); //update password
    //     $user->level_id = $request->level_id; //update level_id

    //     $user->save(); //simpan perubahan ke database

    //     return redirect('/user'); //redirect ke halaman user setelah data disimpan
    // }
    // public function hapus($id)
    // {
    //     $user = UserModel::find($id); //ambil data user dengan id yang sesuai
    //     $user->delete(); //hapus data user

    //     return redirect('/user'); //redirect ke halaman user setelah data dihapus   
    // }
    
        // $user = UserModel::create([
        //     'username' => 'manager11',
        //     'nama' => 'Manager11',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        // ]);

        // $user->username = 'manager12';

        // $user->save(); //simpan perubahan ke database

        // $user->wasChanged(); //true
        // $user->wasChanged('username'); //true
        // $user->wasChanged(['username', 'level_id']); //true
        // $user->wasChanged('nama'); //false
        // $user->wasChanged(['username', 'nama']); //true
        // $user->username = 'manager56';

        // $user->isDirty(); //true
        // $user->isDirty('username'); //true
        // $user->isDirty('nama'); //false
        // $user->isDirty('nama', 'username'); //true

        // $user->isClean(); //false
        // $user->isClean('username'); //false
        // $user->isClean('nama'); //true
        // $user->isClean('nama', 'username'); //false

        // $user->save(); 

        // $user->isDirty(); //false
        // $user->isClean(); //true
        // dd($user->isDirty());
        // $user = Usermodel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'nama' => 'Manager tiga-tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );
        // $user->save();
        // return view('user', ['data' => $user]);
        // $user = Usermodel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'nama' => 'Manager tiga-tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );
        // return view('user', ['data' => $user]);
        // $user =UserModel::firstOrNew(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager'
        //     ],
        // );
        // return view('user', ['data' => $user]);
        // $user = UserModel::firstOrCreate(   
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );
        // return view('user', ['data' => $user]);
        // $user = UserModel::where('level_id', 2)->count();
        // return view('user', ['data' => $user]);
        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        // return view('user', ['data' => $user]);
        // $user =UserModel::findOrFail(1);
        // return view('user', ['data' => $user]);
        // $user = UserModel::findOr(20,['username', 'nama'], function() {
        //     abort(404);
        // });

        // return view('user', ['data' => $user]);
        // $user = UserModel::findOr(1,['username', 'nama'], function() {
        //     abort(404);
        // });

        // return view('user', ['data' => $user]);
        // $user = UserModel::firstWhere('level_id', 1); //ambil data user dengan id 1
        // return view('user', ['data' => $user]);
        // $user = UserModel::where('level_id', 1)->first(); //ambil data user dengan id 1
        // return view('user', ['data' => $user]);
        // $user = UserModel::find(1); //ambil data user dengan id 1
        // return view('user', ['data' => $user]);
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data); //tambah data user dengan Eloquent Model

        // $user = UserModel::all(); //ambil semua data dari tabel m_user
        // return view('user', ['data' => $user]);
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
