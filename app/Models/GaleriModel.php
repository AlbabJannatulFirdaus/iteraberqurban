<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table = 'galeri';
    protected $primaryKey = 'id_galeri';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'judul_galeri',
        'gambar_galeri',
    ];
}
