<?php

namespace App\Models;

use CodeIgniter\Model;

class PembimbingPTGroups extends Model
{
    protected $table = 'pembimbing_perusahaan_groups';

    
    protected $allowedFields = ['pembimbing_id', 'perusahaan_id'];
}