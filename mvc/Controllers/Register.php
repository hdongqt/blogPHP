<?php

    class Register extends Controller{
      public $UserModel;
        function __construct(){
            $this->UserModel  = $this->model("UserModel");
        }
        public function index(){
          if(isset($_SESSION['username'])){
            header("Location: ./Home");
          }else{
            $this->view("web","main2",[
              "page" => "register",
            ]);
          }
        }
        public function checkExistUser(){
            if(isset($_POST['username'])){
              echo $this->UserModel->checkExits($_POST['username']);
            }
        }
        public function DangKy(){
          if(isset($_POST["btnRegister"])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $fullname = $_POST['fullname'];
            $about = $_POST['about'];
            $kq = $this->UserModel->addNew([$username,$password,"1",$fullname,$about]);
            $this->view("web","main2",[
              "page" => "register",
              "result"=>$kq
            ]);
          }    
        }
    }

?>
