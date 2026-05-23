<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function beranda()
    {
        return view('user.beranda');
    }

    public function tentangSaya()
    {
        return view('user.tentang saya');
    }

    public function kontakSaya()
    {
        return view('user.kontak saya');
    }

    public function login()
    {
        return view('user.login');
    }
}
