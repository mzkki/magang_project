<?php

namespace App\Models;

use CodeIgniter\Model;

class SekolahGroups extends Model
{
    protected $table = 'sekolah_groups';

    
    protected $allowedFields = ['user_id', 'sekolah_id'];
}