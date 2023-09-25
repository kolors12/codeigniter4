<?php

namespace App\Controllers;
use App\Models\ImportExcelModel;

class AddMoreController extends BaseController
{
    public function index()
    {
        $model = new ImportExcelModel();
        $data['users'] = $model->orderBy('name','DESC')->findAll();
        //$data['users'] = $model->asArray()->where('status', 'active')->orderBy('id','DESC')->findAll();
        return view("Admin/Addmorelist",$data);
    }


    public function addmoreusers()
    {
    
        return view("Admin/addmoreusers");
    }



    public function addstore(){
        $user = new ImportExcelModel();
        
        $nameArr = $_POST['name'];
        $emailArr = $_POST['email'];
        $phoneArr = $_POST['phone'];
        if(!empty($nameArr)){
            for($i = 0; $i < count($nameArr); $i++){
                if(!empty($nameArr[$i])){
                    $data = array(
                        'name' => $nameArr[$i],
                        'email' => $emailArr[$i],
                        'phone' => $phoneArr[$i]);
                        
                         $user->save($data);
                   
                }
            }
        }
      return redirect("AddMoreView")->with('status','User Successfully Inserted');
       
    }
   
   


    public function deleteuser($id = null)
    {
        $sess_data = $session = session();
        if($sess_data->get('guid') == '' ){redirect('Login');}
        
        var_dump($id);
        $user = new ImportExcelModel();
        $user->delete($id);
        return redirect()->back()->with('status2', 'Student Delete Successfully');
    }
}