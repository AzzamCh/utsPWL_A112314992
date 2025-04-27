<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        $role = $session->get('role');

        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $uri = service('uri')->getSegment(1);

        if ($uri === 'admin' && $role !== 'admin') {
            return redirect()->to('/user')->with('error', 'Akses ditolak.');
        }

        if ($uri === 'user' && $role !== 'user') {
            return redirect()->to('/admin')->with('error', 'Akses ditolak.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}
