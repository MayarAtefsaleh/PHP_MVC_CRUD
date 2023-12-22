<?php

 class ProductController{

    public function index(){

       $db= new Product();
    //    var_dump($db->getAllProducts());
       $data['products'] = $db->getAllProducts();
       View::load('product/index',$data);

       
    }

    public function add (){
      View::load("product/add");
    }


      public function store()
    {
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];

            // $this->conn = new Products();
            $dataInsert = Array ( "name" => $name ,
                            "description" => $description ,
                            "price" => $price ,
                            "qty" => $qty 
                            );

               $db= new Product();
               
                            
            if( $db->insertProducts($dataInsert))
            {
               //  $data['success'] = "Data Added Successfully";
               //  return $this->view('products/add',$data);

               View::load("product/add",["success"=>"Data Added Successfully"]);
            }
            else 
            {
                 View::load("product/add");
            }
        }
      //   return $this->view('product/add');
    }


     public function delete ($id){
      $db= new Product();
      // if($db->deleteProduct($id)){
      //    View::load("product/delete");
      // }
      
      // else {
      //    echo "error";
      // }
      if($db->deleteProduct($id))
        {
             View::load("product/delete",["success"=>"Product Deleted Successfully"]);
        }
        else 
        {
             View::load("product/delete",["error"=>"error in deleting"]);
        } 

         header("refresh:3;url=" . BURL . "product/index");
    exit();

    }


     public function edit($id)
    {
       $db= new Product();
       
       if($db->getProduct($id)){
         
         $data['row']= $db->getProduct($id);
          View::load('product/edit',$data);
       }
       else {
         
         echo "error";
       }
      
    }

    public function update($id)
    {
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];
            $id = $_POST['id'];

           
            $dataInsert = Array ( "name" => $name ,
                            "description" => $description ,
                            "price" => $price ,
                            "qty" => $qty 
                            );
            // data of product
            
             $db= new Product();

           if( $db->updateProduct($id,$dataInsert))
            {
               //  $data['success'] = "Data Added Successfully";
               //  return $this->view('products/add',$data);

               $data['row']= $db->getProduct($id);
               
               View::load("product/edit",["success"=>"Data Edited Successfully",'row'=>$db->getProduct($id)]);
            }
            else 
            {
                 View::load("product/add",['row'=>$db->getProduct($id)]);
            }
        }
      
    }
 }