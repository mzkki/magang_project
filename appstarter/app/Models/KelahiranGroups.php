<?php

namespace App\Models;

use CodeIgniter\Model;

class KelahiranGroups extends Model
{
    protected $table = 'kelahiran';

    
    protected $allowedFields = ['user_id', 'tempat', 'waktu'];
}