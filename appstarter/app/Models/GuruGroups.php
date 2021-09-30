<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruGroups extends Model
{
    protected $table = 'guru_groups';

    
    protected $allowedFields = ['user_id', 'guru_id'];
}