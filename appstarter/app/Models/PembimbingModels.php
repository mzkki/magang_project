<?php

namespace App\Models;

use CodeIgniter\Model;

class PembimbingModels extends Model
{
    protected $table = 'pembimbing';

    
    protected $allowedFields = ['user_id', 'full_name', 'no_induk', 'agama', 'jenis_kelamin', 'alamat', 'no_hp', 'jabatan'];
}