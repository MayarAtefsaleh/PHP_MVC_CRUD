<?php 


class Product extends DB{
    protected $db;
    protected $table = "products";

    public function __construct()
    {
        // $this->db = new DB();
        // var_dump($this->connect());

        $this->db=$this->connect();
    }

     public function getAllProducts()
    {
        
        return $this->db->get($this->table);
    }


    public function insertProducts($data)
    {
        return $this->db->insert($this->table,$data);
    }

    public function deleteProduct($id)
    {
        $delete = $this->db->where('id',$id);
        return $delete->delete($this->table);
    }

    public function getProduct($id)
    {
        $product = $this->db->where('id', $id);
        return $product->getOne($this->table);
    }

    public function updateProduct($id,$data)
    {
        $product = $this->db->where('id', $id);
        return $product->update($this->table,$data);
    }



    
}