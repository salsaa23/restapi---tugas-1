<?php

namespace App\Models;

use CodeIgniter\Model;

class usermodel extends Model
{
    protected $table = 'user'; // Pastikan nama tabel sesuai
    protected $primaryKey = 'username';
    protected $allowedFields = ['username', 'password'];
    protected $useTimestamps = false; // Atur sesuai kebutuhan
}
