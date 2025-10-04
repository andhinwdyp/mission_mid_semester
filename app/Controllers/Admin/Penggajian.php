<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenggajianModel;
use App\Models\AnggotaModel;
use App\Models\KomponenModel;

class Penggajian extends BaseController
{
    protected $penggajianModel;
    protected $anggotaModel;
    protected $komponenModel;

    public function __construct()
    {
        $this->penggajianModel = new PenggajianModel();
        $this->anggotaModel = new AnggotaModel();
        $this->komponenModel = new KomponenModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $data['penggajian'] = $this->penggajianModel->getPenggajianWithRelations();
        echo view('layout/header');
        echo view('admin/penggajian/index', $data);
        echo view('layout/footer');
    }

    public function create()
    {
        $data['anggota'] = $this->anggotaModel->findAll();
        $data['komponen'] = $this->komponenModel->findAll();
        echo view('layout/header');
        echo view('admin/penggajian/create', $data);
        echo view('layout/footer');
    }

    public function store()
    {
        $this->penggajianModel->insert([
            'id_anggota' => $this->request->getPost('id_anggota'),
            'id_komponen_gaji' => $this->request->getPost('id_komponen_gaji')
        ]);
        return redirect()->to('/admin/penggajian')->with('success', 'Data penggajian berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data['penggajian'] = $this->penggajianModel->find($id);
        $data['anggota'] = $this->anggotaModel->findAll();
        $data['komponen'] = $this->komponenModel->findAll();
        echo view('layout/header');
        echo view('admin/penggajian/edit', $data);
        echo view('layout/footer');
    }

    public function update($id)
    {
        $this->penggajianModel->update($id, [
            'id_anggota' => $this->request->getPost('id_anggota'),
            'id_komponen_gaji' => $this->request->getPost('id_komponen_gaji')
        ]);
        return redirect()->to('/admin/penggajian')->with('success', 'Data penggajian berhasil diperbarui');
    }

    public function delete($id)
    {
        $this->penggajianModel->delete($id);
        return redirect()->to('/admin/penggajian')->with('success', 'Data penggajian berhasil dihapus');
    }

    public function detail($id)
    {
        $data['penggajian'] = $this->penggajianModel->find($id);
        echo view('layout/header');
        echo view('admin/penggajian/detail', $data);
        echo view('layout/footer');
    }
}
