<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function index()
    {
        return view('Daftar', [
            'title' => 'Daftar'
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
}
