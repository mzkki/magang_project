<?php

namespace App\Models;

use CodeIgniter\Model;

class PTGroups extends Model
{
    protected $table = 'perusahaan_groups';

    
    protected $allowedFields = ['user_id', 'perusahaan_id'];
}