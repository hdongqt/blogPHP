<?php
    class User extends Controller{
      public $UserModel;
      public function __construct(){
            $this->UserModel = $this->model("UserModel");
        }
        public function index(){
          if(isset($_SESSION['username'])){
            if($_SESSION['isadmin'] == 1){
              $this->view("admin","account",[
                'table' => $this->UserModel->readAll(),
              ]);
            }else{
              header("Location: ./Writtermanager");
            }
          }else {
            header("Location: ./Home");
          }
      }
        public function changeRole(){
          if(isset($_SESSION['isadmin'])){
            if($_SESSION['isadmin'] == 1){
              if(isset($_POST['changeRoleBtn'])){
                $userid= $_POST['userid'];
                $roleNew=$_POST['roleNew'];
                $this->UserModel->changeRole([$roleNew,$userid]);
              }
                header("Location: ../User");
            }
          }else{
            header("Location: ../User");
          }
        } 
        public function deleteUser(){
          if(isset($_POST['delete_btn'])){
            $delete_id= $_POST['delete_id'];
            $this->UserModel->deleteUser([$delete_id]);
          }
          header("Location: ../User");
        }
    }









?>