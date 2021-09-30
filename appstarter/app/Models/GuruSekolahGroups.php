<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruSekolahGroups extends Model
{
    protected $table = 'guru_sekolah_groups';

    
    protected $allowedFields = ['guru_id', 'sekolah_id'];
}