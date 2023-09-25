<?php

namespace App\Controllers;

use App\Models\UsersModel;

class UsersController extends BaseController
{
    public function index()
    {
        
       $sess_data = $session = session();
       if($sess_data->get('guid') == '' ){redirect('Login');}

       $user = new UsersModel();
       if($this->request->getGet('q')){
       $q=$this->request->getGet('q');
       $data['users']= $user->like('F_name',$q)->findAll();
       } else {
        $data['users']= $user->findAll();
       }
      
       return view("Admin/Users",$data);
    
    }

    public function Createusers()
    {
        $sess_data = $session = session();
        if($sess_data->get('guid') == '' ){redirect('Login');}
        return view("Admin/Addusers");
    }


    public function add()
    {
        $user = new UsersModel();
        $data = [

        'F_name' => $this->request->getPost('F_name'),
        'L_name' => $this->request->getPost('L_name'),
        'Password' => $this->request->getPost('Password'),
        'Company' => $this->request->getPost('Company'),
        'Contect_no' => $this->request->getPost('Contect_no'),
        'Message' => $this->request->getPost('Message')
       // return view("Admin/Addusers");
       //echo "hello";

        ];
        $user->save($data);
        return redirect("Users")->with('status','User Successfully Inserted');
    }


    public function edit($id = null)
    {

        $sess_data = $session = session();
        if($sess_data->get('guid') == '' ){redirect('Login');}
        $user = new UsersModel();

        $data['users'] = $user->find($id);
        
        return view ('Admin/edituser', $data);
        
    }

    public function updateuser($id = null)
    {
        $sess_data = $session = session();
        if($sess_data->get('guid') == '' ){redirect('Login');}
        $id = $_POST['guid'];

        $user = new UsersModel();

        $data = [

        'F_name' => $this->request->getPost('F_name'),
        'L_name' => $this->request->getPost('L_name'),
        'Password' => $this->request->getPost('Password'),
        'Company' => $this->request->getPost('Company'),
        'Contect_no' => $this->request->getPost('Contect_no'),
        'Message' => $this->request->getPost('Message')
        ];
        $user->update($id, $data);
        session()->setFlashdata('status_text','Your User Data has Been Updated');
        return redirect()->to(base_url('Users'))
        ->with('status_icon', 'success')
        ->with('status1', 'User Updated Successfully');
        
    }



    public function deleteuser($id = null)
    {
        $sess_data = $session = session();
        if($sess_data->get('guid') == '' ){redirect('Login');}
        
        var_dump($id);
        $user = new UsersModel();
        $user->delete($id);
        return redirect()->back()->with('status2', 'Student Delete Successfully');
    }
}