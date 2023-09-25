<?php

namespace App\Models;

use CodeIgniter\Model;

class  UsersModel extends  Model
{
  
    protected $table = 'users';
    protected $primaryKey = 'guid';
    protected $allowedFields = [

      'F_name',
      'L_name',
      'Password',
      'Company',
      'Contect_no',
      'Message'
    ];


}


?>