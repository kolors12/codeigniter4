<?php

namespace App\Controllers;
use App\Models\ImportExcelModel;

class PdfController extends BaseController
{
    public function index()
    {
        $model = new ImportExcelModel();
        $data['users'] = $model->findAll();
        return view("Admin/PDFView",$data);
    }

    function htmlToPDF(){
        $dompdf = new \Dompdf\Dompdf(); 
        $model = new ImportExcelModel();
        $data['users'] = $model->findAll();
        $dompdf->loadHtml(view('Admin/PDFView',$data));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
        
    }
    
}