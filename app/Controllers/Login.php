<?php

namespace App\Controllers;
use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        return view("Admin/Login");
    }


    public function Register()
    {
        return view("Admin/Register");
    }



    public function store()
    {
       
        $user = new LoginModel();
        $data = [

            'F_name'     => $this->request->getVar('F_name'),
            'L_name'     => $this->request->getVar('L_name'),
            'eamil'    => $this->request->getVar('eamil'),
            'Contect_no'    => $this->request->getVar('Contect_no'),
            'Password' => $this->request->getVar('Password')
         ];
        $user->save($data);
        return redirect("Login")->with('status','User Successfully Inserted');

          
    }

    public function loginAuth()
    {
        $session = session();
        $userModel = new LoginModel();
        $eamil = $this->request->getVar('eamil');
        $Password = $this->request->getVar('Password');
        //print_r( $Password);
        $data = $userModel->where('eamil', $eamil)->first();
        
        if($data){
            $pass = $data['Password'];
            //print_r($pass);
            //$authenticatePassword = password_verify($Password, $pass);
            
            if($pass ==  $Password){
                $ses_data = [
                    'guid' => $data['guid'],
                    'Password' => $data['Password'],
                    'eamil' => $data['eamil'],
                    'F_name' => $data['F_name'],
                    'isLoggedIn' => TRUE
                ];
                // print_r($ses_data);exit;
                $sess_data =  $session->set($ses_data);
                
                return redirect()->to('/Dashboard');
                
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/Login');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/Login');
        }
    }


    function logout() {
		$session = session();
		
        $session->set(array('guid' => '', 'F_name' => ''));
        $session->destroy();
        return redirect()->to('/Login');
    }
    
}