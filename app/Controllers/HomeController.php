<?php

class HomeController{
    public function index()
    {
        // $data = ["name"=>"mostafa mahfouz"];
        // $this->view('home',$data);
        view::load('home');
    }
}