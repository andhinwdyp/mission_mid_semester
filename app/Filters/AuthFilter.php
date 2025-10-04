<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        // konsisten pakai 'isLoggedIn'
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // cek role jika ada
        if (!empty($arguments)) {
            if (!in_array($session->get('role'), $arguments)) {
                return redirect()->to('/no-access');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // optional
    }
}
