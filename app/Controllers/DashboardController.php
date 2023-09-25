<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {

    
      $sess_data = $session = session();
      if($sess_data->get('guid') == '' ){redirect('Login');}

        $db = \Config\Database::connect();
        $builder = $db->table('products');
        $query = $builder->select("COUNT(id) as count, sell as s, DAYNAME(created_at) as day");
        $query = $builder->where("DAY(created_at) GROUP BY DAYNAME(created_at), s")->get();
        $record = $query->getResult();
        $products = [];
        foreach($record as $row) {
            $products[] = array(
                'day'   => $row->day,
                'sell' => floatval($row->s)
            );
        }
        
        $data['products'] = ($products);    
        //return view('chart', $data);                
    
      return view("Admin/Dashboard",$data);
    }




}
