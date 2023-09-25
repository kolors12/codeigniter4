<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function index()
    {
        $sess_data = $session = session();
        if($sess_data->get('guid') == '' ){redirect('Login');}
       $product = new ProductModel();
       $data['products']= $product->findAll();
       return view("Admin/Productlist",$data);
    
    }

    public function Createproduct()
    {
        $sess_data = $session = session();
        if($sess_data->get('guid') == '' ){redirect('Login');}
        return view("Admin/Addproduct");
    }


    public function add()
    {
        $sess_data = $session = session();
        if($sess_data->get('guid') == '' ){redirect('Login');}
        $product = new ProductModel();

        $file = $this->request->getFile('image');
        if ($file->isValid() && ! $file->hasMoved()) {
            $imagename = $file->getRandomName();
            $file->move('uploads/', $imagename);
         }
        $data = [

        'productname' => $this->request->getPost('productname'),
        'price' => $this->request->getPost('price'),
        'product_number' => $this->request->getPost('product_number'),
        'description' => $this->request->getPost('description'),
        'image' => $imagename,
        ];
        $product->save($data);
        return redirect("Products")->with('status','Products Successfully Inserted');
    }


    public function edit($id = null)
    {

        $sess_data = $session = session();
        if($sess_data->get('guid') == '' ){redirect('Login');}
        $product = new ProductModel();

        $data['prod'] = $product->find($id);
        
        return view ('Admin/editproduct', $data);
        
    }

    public function updateproduct($id = null)
    {
        $sess_data = $session = session();
        if($sess_data->get('guid') == '' ){redirect('Login');}

        $id = $_POST['guid'];

        $product = new ProductModel();

        $prod_item = $product->find($id);
        $old_img_name = $prod_item['image'];
        $file = $this->request->getFile('image');
        if ($file->isValid() && ! $file->hasMoved()) 
        {
           
            if(file_exists("uploads/".$old_img_name)){
                unlink("uploads/".$old_img_name);
            }

            $imagename = $file->getRandomName();
            $file->move('uploads/', $imagename);
         }else{
            $imagename = $old_img_name;
         }
        $data = [

        'productname' => $this->request->getPost('productname'),
        'price' => $this->request->getPost('price'),
        'product_number' => $this->request->getPost('product_number'),
        'description' => $this->request->getPost('description'),
        'image' => $imagename,
        ];
        $product->update($id, $data);
        session()->setFlashdata('status_text','Your Product Data has Been Updated');
        return redirect()->to(base_url('Products'))
        ->with('status_icon', 'success')
        ->with('status1', 'Product Updated Successfully');
        
    }



    public function deleteproduct($id = null)
    {

        $sess_data = $session = session();
        if($sess_data->get('guid') == '' ){redirect('Login');}
        var_dump($id);
        $product = new ProductModel();
        $product->delete($id);
        return redirect()->back()->with('status2', 'Product Delete Successfully');
    }
}