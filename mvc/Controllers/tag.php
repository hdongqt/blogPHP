<?php

    class tag extends Controller{
      public $PostModel;
      public $CategoryModel;  
      public $Tag;  
        function __construct(){
            $this->PostModel  = $this->model("PostModel");
            $this->CategoryModel  = $this->model("CategoryModel");
            $this->Tag  = $this->model("TagModel");
        }
        public function index(){
          $this->view("web","404",[
          ]);
        }
        public function create(){
          if(isset($_POST)){   
            $masv=$_POST['masv'];
            $hoten=$_POST['hoten'];
            $sodt=$_POST['sodt'];
            $diachi= $_POST['diachi'];
            echo $this->SinhVienModel->addNew([$masv,$hoten,$sodt,$diachi]);
          } else echo 0;
        }
        public function update(){
            if(isset($_POST)){
                $id= $_POST['id'];
                $masv=$_POST['masv'];
                $hoten=$_POST['hoten'];
                $sodt=$_POST['sodt'];
                $diachi= $_POST['diachi'];
                echo $this->SinhVienModel->updateRow([$masv,$hoten,$sodt,$diachi,$id]);
            } else echo 0;
        }
        public function delete(){
           if(isset($_POST['msv'])){
             $masv =$_POST['msv'];
             echo $this->SinhVienModel->deleteRow([$masv]);
           } else echo 0;
        }
    }
     
     










?>