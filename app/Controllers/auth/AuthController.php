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

     public function register()
    {
        return view('auth/Register');
    }

    public function proses()
    {
        $userModel = new UserModel();

        // Ambil input dari form
        $username = $this->request->getPost('username');
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $confirm  = $this->request->getPost('confirm_password');

        // Cek apakah email sudah ada
        $existingUser = $userModel->where('email', $email)->first();
        if ($existingUser) {
            return view('auth/Register', [
                'email_error' => 'Email sudah digunakan.',
                'old' => [
                    'username' => $username,
                    'email'    => $email
                ]
            ]);
        }

        // Validasi password dan konfirmasi
        if ($password !== $confirm) {
            return view('auth/Register', [
                'password_error' => 'Konfirmasi password tidak cocok.',
                'old' => [
                    'username' => $username,
                    'email'    => $email
                ]
            ]);
        }

        // Simpan user baru
        $userModel->save([
            'username' => $username,
            'email'    => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role'     => 'user',
        ]);

        // Redirect ke login dengan flashdata
        return redirect()->to('/login')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

}
