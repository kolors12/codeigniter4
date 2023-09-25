<?php

namespace App\Models;

use CodeIgniter\Model;

class  StudentModel extends  Model
{
  
    protected $table = 'student';
    protected $primaryKey = 'guid';
    protected $allowedFields = ['name','email','phone','cource'];

    public function __construct() {

    parent::__construct();
    $db = \Config\Database::connect();
    $builder = $db->table('student');
  }
    

  


}


?>