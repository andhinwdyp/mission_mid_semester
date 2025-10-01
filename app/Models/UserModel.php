<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $returnType = 'array';
    protected $allowedFields = ['username', 'password', 'email', 'role', 'nama_depan', 'nama_belakang'];
}