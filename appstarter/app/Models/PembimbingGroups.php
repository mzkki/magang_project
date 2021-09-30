<?php

namespace App\Models;

use CodeIgniter\Model;

class PembimbingGroups extends Model
{
    protected $table = 'pembimbing_groups';

    
    protected $allowedFields = ['pelajar_id', 'pembimbing_id'];
}