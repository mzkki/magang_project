<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModels extends Model
{
    protected $table = 'guru';

    
    protected $allowedFields = ['user_id', 'full_name', 'nip', 'jenis_kelamin', 'alamat', 'agama', 'jabatan', 'no_hp'];
}