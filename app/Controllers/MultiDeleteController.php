<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;

use App\Models\MultideleteModel;
use App\Models\ImportExcelModel;

class MultiDeleteController extends BaseController
{
    public function index()
    {
        $sess_data = $session = session();
        if($sess_data->get('guid') == '' ){redirect('Login');}
        $model = new MultideleteModel();
        $data['product_list'] = $model->get_product_list();
       
        return view("Admin/multidelete",$data);
    }

    public function delete_products() {
        $sess_data = $session = session();
        if($sess_data->get('guid') == '' ){redirect('Login');}
		if ('post' === $this->request->getMethod() && $this->request->getPost('ids')) {
			
			$ids = explode(',', $this->request->getPost('ids'));
			
			$model = new MultideleteModel();
			
			$results = $model->delete_products_by_ids($ids);
			
			if ($results === true) {
				echo '<span style="color:green;">Users(s) successfully deleted</span>';
			} else {
				echo '<span style="color:red;">Something went wrong during product deletion</span>';
			}
		} else {
			echo '<span style="color:red;">You must select at least one product row for deletion</span>';
		}
	}


   

    public function delete($id = null)
    {
        $sess_data = $session = session();
        if($sess_data->get('guid') == '' ){redirect('Login');}
        
        $model = new MultideleteModel();
        //$model->delete($id);
        $results = $model->delete_product($id);
        return redirect()->back()->with('status2', 'Delete Successfully');
    }



    public function Addimport()
    {
        $sess_data = $session = session();
        if($sess_data->get('guid') == '' ){redirect('Login');}
         return view("Admin/Importfile");
    }



     public function importCsvToDb()
    {
        $sess_data = $session = session();
        if($sess_data->get('guid') == '' ){redirect('Login');}
        $input = $this->validate([
            'file' => 'uploaded[file]|max_size[file,2048]|ext_in[file,csv],'
        ]);
        if (!$input) {
            $data['validation'] = $this->validator;
            return view('index', $data); 
        }else{
            if($file = $this->request->getFile('file')) {
            if ($file->isValid() && ! $file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move('public/csvfile', $newName);
                $file = fopen("public/csvfile/".$newName,"r");
                $i = 0;
                $numberOfFields = 4;
                $csvArr = array();
                
                while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                    $num = count($filedata);
                    if($i > 0 && $num == $numberOfFields){ 
                        $csvArr[$i]['name'] = $filedata[0];
                        $csvArr[$i]['email'] = $filedata[1];
                        $csvArr[$i]['phone'] = $filedata[2];
                        $csvArr[$i]['created_at'] = $filedata[3];
                    }
                    $i++;
                }
                fclose($file);
                $count = 0;
                foreach($csvArr as $userdata){
                    $students = new ImportExcelModel();
                    $findRecord = $students->where('email', $userdata['email'])->countAllResults();
                    if($findRecord == 0){
                        if($students->insert($userdata)){
                            $count++;
                        }
                    }
                }
                session()->setFlashdata('message', $count.' rows successfully added.');
                session()->setFlashdata('alert-class', 'Import successfully');
            }
            else{
                session()->setFlashdata('message', 'CSV file coud not be imported.');
                session()->setFlashdata('alert-class', 'alert-danger');
            }
            }else{
            session()->setFlashdata('message', 'CSV file coud not be imported.');
            session()->setFlashdata('alert-class', 'alert-danger');
            }
        }
        return redirect()->route('MultiDelete');         
    }
	
}