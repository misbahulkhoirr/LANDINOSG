<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DaftarController extends Controller
{
    public function index()
    {
        return view('Sukses', [
            'title' => 'Sukses',
            'post'  => User::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'jenisusaha' => 'required',
            'nomorHP' => 'required|min:11',
            'email' => 'required|email:dns|unique:users',
            'alamat' => 'required'
        ]);

        User::create($validatedData);

        return redirect('/sukses')->with('success', 'Daftar berhasil !');
    }

    public function destroy(User $user)
    {
        $data = User::destroy($user->id);
        return redirect('/sukses')->with('success', 'Data berhasil di hapus');
    }
}
