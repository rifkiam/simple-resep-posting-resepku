<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data =
            [
                'title' => 'Welcome Page',
            ];
        return view('mainpages/welpage');
    }

    public function login()
    {
        session();
        $data =
            [
                'title' => 'Login',
                'validation' => \Config\Services::validation()
            ];
        return view('mainpages/login', $data);
    }

    public function registrasi()
    {
        $data =
        [
            'title' => 'Registrasi',
            'validation' => \Config\Services::validation()
        ];
        return view('mainpages/registrasi', $data);
    }

    public function addresep() 
    {
        $data = [
            'title' => 'Tambah Resep',
            'validation' => \Config\Services::validation(),
        ];

        return view('mainpages/addresep', $data);
    }

    public function dashboard() 
    {
        $session = session();
        $data =
            [
                'title' => 'Dashboard',
                'nama' => session()->get('username'),
            ];

        return view('mainpages/dashboard', $data);
    }
}
