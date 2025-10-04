<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KomponenModel;

class Komponen extends BaseController
{
    protected $komponenModel;

    public function __construct()
    {
        $this->komponenModel = new KomponenModel();
    }

    public function index()
    {
        $data['komponen'] = $this->komponenModel->findAll();
        return view('layout/header')
             . view('admin/komponen/index', $data)
             . view('layout/footer');
    }

    public function create()
    {
        return view('layout/header')
             . view('admin/komponen/create')
             . view('layout/footer');
    }

    public function store()
    {
        $this->komponenModel->save([
            'nama_komponen' => $this->request->getPost('nama_komponen'),
            'kategori' => $this->request->getPost('kategori'),
            'jabatan' => $this->request->getPost('jabatan'),
            'nominal' => $this->request->getPost('nominal'),
            'satuan' => $this->request->getPost('satuan'),
        ]);

        return redirect()->to('/admin/komponen')->with('success', 'Komponen berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data['komponen'] = $this->komponenModel->find($id);
        return view('layout/header')
             . view('admin/komponen/edit', $data)
             . view('layout/footer');
    }

    public function update($id)
    {
        $this->komponenModel->update($id, [
            'nama_komponen' => $this->request->getPost('nama_komponen'),
            'kategori' => $this->request->getPost('kategori'),
            'jabatan' => $this->request->getPost('jabatan'),
            'nominal' => $this->request->getPost('nominal'),
            'satuan' => $this->request->getPost('satuan'),
        ]);

        return redirect()->to('/admin/komponen')->with('success', 'Komponen berhasil diperbarui');
    }

    public function delete($id)
    {
        $this->komponenModel->delete($id);
        return redirect()->to('/admin/komponen')->with('success', 'Komponen berhasil dihapus');
    }
}
