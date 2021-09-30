<?php

namespace App\Models;

use CodeIgniter\Model;

class PelajarModels extends Model
{
    protected $table = 'pelajar';

    
    protected $allowedFields = ['user_id', 'full_name', 'nis', 'jurusan', 'kelas', 'jenis_kelamin', 'alamat', 'agama', 'no_hp'];
}