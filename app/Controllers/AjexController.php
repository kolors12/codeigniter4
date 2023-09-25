<?php

namespace App\Controllers;
use App\Models\StudentModel;

class AjexController extends BaseController
{
    public function index()
    {
        // $student = new StudentModel();  
        // $data['students']= $student->orderBy('guid','DESC')->findAll();
        return view("Admin/ajex");
    }



    public function store()
    {
        $student = new StudentModel();
        helper (['form', 'url']);
        //return view("Admin/ajex",$data);
     $data = [

        'name' => $this->request->getVar('name'),
        'email' => $this->request->getVar('email'),
        'phone' => $this->request->getVar('phone'),
        'cource' => $this->request->getVar('cource'),
     ];
     $save = $student->insert($data);
        
     $data = [
        'success' => true,
        'data' => $save,
        'msg' => "Student Instrent Successfully"
       ];
 
       return $this->response->setJSON($data);

    }


    public function getdata()
    {
         $student = new StudentModel();  
         $data['students']= $student->orderBy('guid','DESC')->findAll();
         return $this->response->setJSON($data);
      
    }


    public function viewstudent()
    {
        
         $student = new StudentModel();  
         $stud = $this->request->getPost('stud_id');
         $data['students']= $student->find($stud);
         return $this->response->setJSON($data);
      
    }


    public function edit()
    {
        
         $student = new StudentModel();  
         $stud = $this->request->getPost('stud_id');
         $data['students']= $student->find($stud);
         return $this->response->setJSON($data);
      
    }


    public function update()
    {
        
         $student = new StudentModel();  
         $stud = $this->request->getPost('stud_guid');

         //print_r($stud);
         $data =[
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'cource' => $this->request->getPost('cource'),
         ];
         
         

         $save = $student->update($stud,$data);

         $data = [
            'success' => true,
            'data' => $save,
            'msg' => "Successfully Updated"
           ];
     
           return $this->response->setJSON($data);
    


    }



    public function delete()
    {
        
         $student = new StudentModel();  
         $save =  $student->delete($this->request->getPost('stud_id'));
         $data = [
            'success' => true,
            'data' => $save,
            'msg' => "Successfully delete"
           ];
     
           return $this->response->setJSON($data);
        // $message = ['status'=>'delete Successfully'];
         //return $this->response->setJSON($message);
      
    }
    
}