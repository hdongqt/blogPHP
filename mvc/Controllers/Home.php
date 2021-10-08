<?php

    class Home extends Controller{
      public $PostModel;
      public $CategoryModel;  
      public $Tag;  
        function __construct(){
            $this->PostModel  = $this->model("PostModel");
            $this->CategoryModel  = $this->model("CategoryModel");
            $this->Tag  = $this->model("TagModel");
        }
        public function index(){
            $this->view("web","main",[
              "category"=>$this->CategoryModel->readAll(),
              "tag"=>$this->Tag->readAll(),
              "page" => "entries",
              "table" => $this->PostModel->readAllShow()
            ]);
        }
        public function detail($slug){
          $this->view("web","main",[
            "category"=>$this->CategoryModel->readAll(),
            "tag"=>$this->Tag->readAll(),
            "page" => "detail",
            "table" => $this->PostModel->selectDetail($slug)
          ]);
        }
    }
     
     










?>