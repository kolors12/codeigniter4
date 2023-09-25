<?php

namespace App\Models;

use CodeIgniter\Model;

class  ProductModel extends  Model
{
  
    protected $table = 'product';
    protected $primaryKey = 'guid';
    protected $allowedFields = [

      'productname',
      'price',
      'product_number',
      'description',
      'image'
      
    ];


}




?>