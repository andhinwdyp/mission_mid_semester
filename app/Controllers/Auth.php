<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        echo view('layout/header');
        echo view('auth/login');
        echo view('layout/footer');
    }

    public function loginAuth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id_pengguna'   => $data['id_pengguna'],
                    'username'      => $data['username'],
                    'email'         => $data['email'],
                    'role'          => $data['role'],
                    'nama_depan'    => $data['nama_depan'],
                    'nama_belakang' => $data['nama_belakang'],
                    'isLoggedIn'    => TRUE
                ];
                $session->set($ses_data);

                if ($data['role'] == 'admin') {
                    return redirect()->to('/admin/dashboard');
                } else {
                    return redirect()->to('/public/dashboard');
                }
            } else {
                $session->setFlashdata('error', 'Password salah');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('error', 'Email tidak ditemukan');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
