<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends BaseController
{
    public function admin()
    {
        $data = [
            'title' => 'Dashboard Admin',
            'username' => session('username'),
            'role' => session('role')
        ];

        return view('dashboard/admin', $data);
    }

    public function user()
    {
        $data = [
            'title' => 'Dashboard User',
            'username' => session('username'),
            'role' => session('role')
        ];

        return view('dashboard/user', $data);
    }
    public function pesanGalon()
{
    $data = [
        'title' => 'Pesan Galon',
        'username' => session('username'),
        'role' => session('role')
    ];

    return view('user/pesan_galon', $data);
}
public function kelolaUser()
{
    $data = [
        'title' => 'Kelola User',
        'username' => session('username'),
        'role' => session('role'),
        'users' => [
            ['id' => 1, 'username' => 'admin', 'role' => 'admin'],
            ['id' => 2, 'username' => 'user', 'role' => 'user']
        ]
    ];

    return view('admin/kelola_user', $data);
}

}
