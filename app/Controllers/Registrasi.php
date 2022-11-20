<?php

namespace App\Controllers;
use App\Models\UserModel;

class Registrasi extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function regist()
    {
        $pw = $this->request->getVar('password');
        if ($this->request->getVar('confirmpassword') != $pw) {
            session()->setFlashdata('pesan', 'Password tidak sesuai');
            return redirect()->to('/registrasi')->withInput();
        }
        // dd("test");
        $this->userModel->save([
            'fullname' => $this->request->getVar('fullname'),
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
        ]);
        session()->setFlashdata('pesan', 'Successfully registered');
        return redirect()->to('/login');
    }
}