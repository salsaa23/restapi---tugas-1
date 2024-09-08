<?php

namespace App\Models;

use CodeIgniter\Model;

class todolistmodel extends Model
{
    protected $table = 'todolist2'; // Pastikan nama tabel sesuai
    protected $primaryKey = 'idKegiatan';
    protected $allowedFields = ['idKegiatan', 'kegiatan', 'status', 'user'];
    protected $useTimestamps = false; // Atur sesuai kebutuhan
}
