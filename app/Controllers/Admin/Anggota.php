<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;

class Anggota extends BaseController
{
    protected $anggotaModel;

    public function __construct()
    {
        $this->anggotaModel = new AnggotaModel();
    }

    public function index()
    {
        $data['anggota'] = $this->anggotaModel->findAll();
        return view('layout/header')
             . view('admin/anggota/index', $data)
             . view('layout/footer');
    }

    public function create()
    {
        return view('layout/header')
             . view('admin/anggota/create')
             . view('layout/footer');
    }

    public function store()
    {
        $this->anggotaModel->save([
            'nama_depan' => $this->request->getPost('nama_depan'),
            'nama_belakang' => $this->request->getPost('nama_belakang'),
            'gelar_depan' => $this->request->getPost('gelar_depan'),
            'gelar_belakang' => $this->request->getPost('gelar_belakang'),
            'jabatan' => $this->request->getPost('jabatan'),
            'status_pernikahan' => $this->request->getPost('status_pernikahan'),
            'jumlah_anak' => $this->request->getPost('jumlah_anak'),
        ]);

        return redirect()->to('/admin/anggota')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data['anggota'] = $this->anggotaModel->find($id);
        return view('layout/header')
             . view('admin/anggota/edit', $data)
             . view('layout/footer');
    }

    public function update($id)
    {
        $this->anggotaModel->update($id, [
            'nama_depan' => $this->request->getPost('nama_depan'),
            'nama_belakang' => $this->request->getPost('nama_belakang'),
            'gelar_depan' => $this->request->getPost('gelar_depan'),
            'gelar_belakang' => $this->request->getPost('gelar_belakang'),
            'jabatan' => $this->request->getPost('jabatan'),
            'status_pernikahan' => $this->request->getPost('status_pernikahan'),
            'jumlah_anak' => $this->request->getPost('jumlah_anak'),
        ]);

        return redirect()->to('/admin/anggota')->with('success', 'Data anggota berhasil diperbarui');
    }

    public function delete($id)
    {
        $this->anggotaModel->delete($id);
        return redirect()->to('/admin/anggota')->with('success', 'Data berhasil dihapus');
    }
}
