<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggajianModel extends Model
{
    protected $table = 'penggajian';
    protected $primaryKey = 'id_penggajian';
    protected $allowedFields = ['id_anggota', 'id_komponen_gaji'];

    public function getPenggajianWithRelations()
    {
        return $this->select('penggajian.*, anggota.nama_depan, anggota.nama_belakang, komponen_gaji.nama_komponen, komponen_gaji.nominal')
                    ->join('anggota', 'anggota.id_anggota = penggajian.id_anggota')
                    ->join('komponen_gaji', 'komponen_gaji.id_komponen_gaji = penggajian.id_komponen_gaji')
                    ->findAll();
    }
}