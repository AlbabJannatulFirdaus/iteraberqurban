<?php

namespace App\Models;

use CodeIgniter\Model;

class TabunganModel extends Model
{
    protected $table = 'tabungan';
    protected $primaryKey = 'id_tabungan';
    protected $allowedFields = [
        'username_user',
        'besar_tabungan',
        'bukti_tabungan',
        'tgl_tabungan',
    ];

    public function user()
    {
        return $this->belongsTo(UserModel::class, 'username_user', 'username');
    }

    public function dataTabungan($username_user)
    {
        return $this->where('username_user', $username_user)->findAll();
    }

    public function hapusData($id_tabungan)
    {
        return $this->delete($id_tabungan);
    }
}
