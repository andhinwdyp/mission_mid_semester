<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        echo view('layout/header');
        echo view('login');
        echo view('layout/footer');
    }

    public function loginAuth()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id_pengguna'       => $data['id_pengguna'],
                    'username'     => $data['username'],
                    'email'    => $data['email'],
                    'role'    => $data['role'],
                    'nama_depan'    => $data['nama_depan'],
                    'nama_belakang'    => $data['nama_belakang'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                if($data['role'] == 'admin'){
                    return redirect()->to('/admin/dashboard');
                }else{
                    return redirect()->to('/user/dashboard');
                }

            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Username not Found');
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