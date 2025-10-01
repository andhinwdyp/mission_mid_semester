<?php namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        if (!empty($arguments)) {
            if (!in_array($session->get('role'), $arguments)) {
                return redirect()->to('/no-access');
            }
        }
        
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}


