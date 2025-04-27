<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends BaseController
{
    private $users = [
        [
            'id' => 1,
            'username' => 'admin',
            'password' => '', 
            'role' => 'admin',
        ],
        [
            'id' => 2,
            'username' => 'user',
            'password' => '', 
            'role' => 'user',
        ],
    ];

    public function __construct()
    {
        $this->users[0]['password'] = password_hash('admin123', PASSWORD_DEFAULT);
        $this->users[1]['password'] = password_hash('user123', PASSWORD_DEFAULT);
    }

    public function login()
    {
        return view('auth/login');
    }

    public function loginPost()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        foreach ($this->users as $user) {
            if ($user['username'] === $username && password_verify($password, $user['password'])) {
                session()->set([
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'logged_in' => true
                ]);

                return redirect()->to('/' . $user['role']);
            }
        }

        return redirect()->back()->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
