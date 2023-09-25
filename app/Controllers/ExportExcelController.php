<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



use App\Models\ExportExcelModel;


class ExportExcelController extends BaseController
{
    public function index()
    {
      $user = new ExportExcelModel();

      if($this->request->getGet('q')){
       $q=$this->request->getGet('q');
       $data['users'] = $user->like('name',$q)->findAll();
       }else {
       $data['users']= $user->findAll();
      }
      return view("Admin/export",$data);
    }

   


    public function Export($name='')
	{
	    $taskModel = new ExportExcelModel();

      if($name){
       $tasks = $taskModel->like('name',$name)->findAll();
      }else{
        $tasks = $taskModel->findAll();
      }
	    
     
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Id');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Email');
        $sheet->setCellValue('D1', 'Phone');
        $sheet->setCellValue('E1', 'Phone');
        $rows = 2;
        
        foreach ($tasks as $task){
            $sheet->setCellValue('A' . $rows, $task['id']);
            $sheet->setCellValue('B' . $rows, $task['name']);
            $sheet->setCellValue('C' . $rows, $task['email']);
            $sheet->setCellValue('D' . $rows, $task['phone']);
            $sheet->setCellValue('E' . $rows, $task['created_at']);
            $rows++;
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save('world.xlsx');
        return $this->response->download('world.xlsx', null)->setFileName('sample.xlsx');
        
    }

    


    public function delete($id)
    {
      var_dump($id);
      $user = new ExportExcelModel();
      $user->delete($id);
      return redirect()->back()->with('status2', 'Student Delete Successfully');
    }

    public function viewstudent()
    {
        
         $student = new ExportExcelModel();  
         $stud = $this->request->getPost('stud_id');
         $data['students']= $student->find($stud);
         return $this->response->setJSON($data);
      
    }
    
    

}
