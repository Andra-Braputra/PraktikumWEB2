<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginProcess()
    {
        $model = new UserModel();
        $user = $model->where('username', $this->request->getPost('username'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
            session()->set(['user' => $user]);
            return redirect()->to('/buku');
        }

        return redirect()->back()->with('error', 'Login gagal! Username atau password salah.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login')->with('error', 'Anda telah logout.');
    }
    public function register()
{
    return view('auth/register');
}

public function registerProcess()
{
    $validation = \Config\Services::validation();

    $rules = [
        'username'         => 'required|min_length[3]|max_length[20]|is_unique[user.username]',
        'email'            => 'required|valid_email|is_unique[user.email]',
        'password'         => 'required|min_length[6]',
        'password_confirm' => 'required|matches[password]',
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
    }

    $model = new UserModel();

    $data = [
        'username' => $this->request->getPost('username'),
        'email'    => $this->request->getPost('email'),
        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
    ];

    $model->save($data);

    return redirect()->to('/auth/login')->with('success', 'Registrasi berhasil! Silakan login.');
}
}
