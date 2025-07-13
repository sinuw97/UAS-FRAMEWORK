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
        $userModel = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user->password)) {
                $session->set([
                    'user_id' => $user->user_id,
                    'user_name' => $user->username,
                    'user_email' => $user->email,
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/beranda');
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
