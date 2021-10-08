<?php
    class AdminManager extends Controller{
      public $PostModel;
      public $TagModel;
      public $CategoryModel;
      public function __construct(){
            $this->PostModel = $this->model("PostModel");
            $this->TagModel = $this->model("TagModel");
            $this->CategoryModel = $this->model("CategoryModel");
      }
      public function index(){
            if(isset($_SESSION['isadmin']) && $_SESSION['isadmin'] == 1){
                $this->view("admin","adminpost",[
                  'table' => $this->PostModel->readAll(),
                ]);
              }else{
                header("Location: ./post");
              }
      }
      public function changeStatus(){
            if(isset($_POST['changeStatus'])){
                  $idpost = $_POST['idpost'];
                  $statusNew = $_POST['statusNew'];
             $this->PostModel->changeStatus([$statusNew,$idpost]);
            }
            header("Location: ../AdminManager");
      } 
 }



?>