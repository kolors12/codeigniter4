<?php

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ImportExcelModel extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'guid';
    protected $allowedFields = [
        'name', 
        'email', 
        'phone',
        'created_at'
    ];
}




?>