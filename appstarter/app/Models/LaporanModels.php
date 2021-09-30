<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModels extends Model
{
    protected $table = 'laporan';

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    
    protected $allowedFields = ['pelajar_id', 'hari', 'tanggal', 'kegiatan', 'keterangan', 'approve_guru', 'approve_pembimbing', 'jam_masuk', 'jam_keluar', 'created_at', 'updated_at'];
}