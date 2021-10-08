<?php

    class login extends Controller{
      public $UserModel;
        function __construct(){
            $this->UserModel  = $this->model("UserModel");
        }
        public function index(){
            if(!empty($_SESSION['username']) && !empty($_SESSION['fullname'])){
              header("Location: ./Home");
            }else{
              $this->view("web","main2",[
                "page" => "login",
              ]);
            }
        }
        public function DangNhap(){
          if(isset($_POST['btnLogin'])){
            $username = $_POST['username'];
            $pwd = $_POST['pwd'];
            $kq = $this->UserModel->checkUser([$username,$pwd]);
            if(count($kq) != 0){
               $isAdmin = $kq[0]['roleid'] == 2 ? 1 : 0;
               $_SESSION['username'] = $kq[0]['username']; 
               $_SESSION['fullname'] = $kq[0]['fullname']; 
               $_SESSION['isadmin'] = $isAdmin;
               $_SESSION['userid']   = $kq[0]['id'];
               header("Location: ../Home");
            }else{
              $this->view("web","main2",[
                "page" => "login",
                "mess" => "Thông tin đăng nhập sai"
              ]);
            } 
          }else {
            header("Location: ../login");
          }
        }
        public function logout(){
          if(!empty($_SESSION['username']) && !empty($_SESSION['fullname'])){
            unset($_SESSION['username']);
            unset($_SESSION['fullname']);
            unset($_SESSION['isadmin']);
            unset($_SESSION['userid']);
          }
          header("Location: ../Home");
        }
    }
     
     










?>