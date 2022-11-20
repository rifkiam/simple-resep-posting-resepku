<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\Router\Exceptions\RedirectException;

class VerifyLogin extends BaseController
{
    protected $session;
    protected $userModel;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel = new UserModel();
    }

    public function login_acc()
    {
        // dd("test");
        if($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required',
                'password' => 'required'
            ];
            $validate = $this->validate($rules);
            if ($validate) {
                $username = $this->request->getVar('username');
                $password = $this->request->getVar('password');
                
                if($query = $this->userModel->getUser($username, $password)) {
                    $data = [
                        'id_user' => $query['id_user'],
                        'username' => $query['username'],
                        'isLoggedIn' => true,
                    ];
                    // $this->session->set($data);
                    session()->set($data);
                    return redirect()->to('/dashboard');
                }
                $user = $this->userModel->where('username', $username)->first();

                if($user) 
                {
                    if(!password_verify($password, $user['password'])) {
                        $this->session->setFlashdata('error', 'Password salah');
                        return redirect()->to('/');
                    }
                } 
                else 
                {
                    $this->session->setFlashdata('error', 'Username tidak ditemukan');
                    return redirect()->to('/');
                }

                $this->session->setFlashdata('error', 'Username atau password salah');
                return redirect()->back();
            }
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
        // dd("salah");
        return redirect()->back();
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}