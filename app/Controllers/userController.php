<?php

namespace App\Controllers;

use App\Models\userModel;

class userController extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function authenticate()
    {
        $model = new userModel();
        $username = $this->request->getPost('user');
        $password = $this->request->getPost('pwd');

        if ($username === null || $password === null) {
            return redirect()->back()->with('error', 'Silakan masukkan username dan password');
        }

        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set('username', $user['username']);
            return redirect()->to('/todolist');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
