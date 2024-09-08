<?php

namespace App\Models;

use CodeIgniter\Model;

class usermodel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['username', 'password'];
    protected $primaryKey = 'username';
}