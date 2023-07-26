<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "id_user";
    protected $allowedFields = ['username_user', 'email_user', 'password_user', 'nama_user', 'no_user', 'alamat_user', 'instansi', 'target_qurban', 'token'];

    /**
     * untuk ambil data
     */
    public function getData($parameter)
    {
        $builder = $this->table($this->table);
        $builder->where('username_user=', $parameter);
        $builder->orWhere('email_user=', $parameter);
        $query = $builder->get();
        return $query->getRowArray();
    }

    /** untuk update / simpan data */
    public function updateData($data)
    {
        $builder = $this->table($this->table);
        if ($builder->save($data)) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserByUsername($username_user)
    {
        // Mengambil satu baris pertama yang cocok berdasarkan username_user
        return $this->where('username_user', $username_user)->first();
    }
}
