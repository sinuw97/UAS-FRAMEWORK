<?php

namespace App\Controllers\auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/Login');
    }

    public function loginSubmit()
    {
        $session = session();
        $model = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set([
                    'user_id' => $user['id'],
                    'user_email' => $user['email'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/dashboard');
            } else {
                return redirect()->back()->with('error', 'Password salah.');
            }
        } else {
            return redirect()->back()->with('error', 'Email tidak ditemukan.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
