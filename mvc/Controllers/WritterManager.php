<?php
    class WritterManager extends Controller{
      public $PostModel;
      public $TagModel;
      public $CategoryModel;
      public function __construct(){
            $this->PostModel = $this->model("PostModel");
            $this->TagModel = $this->model("TagModel");
            $this->CategoryModel = $this->model("CategoryModel");
      }
        public function index(){
          if(isset($_SESSION['userid'])){
            $this->view("admin","post",[
              'table' => $this->PostModel->selectAllByUser([$_SESSION['userid']]),
            ]);
          }else{
            header("Location: ./Home");
          }
      }
       public function updatePost(){
         if(isset($_POST['updateBtn'])){
           $id = $_POST['id'];
           $title = $_POST['title'];
           $thumbnail = $_POST['thumbnail'];
           $desc = $_POST['desc'];
           $content = $_POST['content'];
           $slugcv = $this->covertSlug($title);
           $categoryid = $_POST['categoryid'];
           $tagid = $_POST['tagid'];
           $result = $this->PostModel->updateRow([$title,$thumbnail,$desc,$content,$slugcv,$categoryid,$tagid,$id]);
            if($result !=0){
              header("Location: ../WritterManager");
            }else{
              $this->view("admin","post_edit",[
                'table'=>$this->PostModel->selectOne($_POST['id']),
                'taglist'=>$this->TagModel->readAll(),
                "categorylist"=>$this->CategoryModel->readAll(),
                'error'=>"Thông tin chưa chính xác"
            ]);
            }
         }else{
          $this->view("admin","post_edit",[
            'table'=>$this->PostModel->selectOne($_POST['id']),
            'taglist'=>$this->TagModel->readAll(),
            "categorylist"=>$this->CategoryModel->readAll(),
        ]);
         }
       }
       public function addPost(){
        if(isset($_POST['addPostBtn'])){
          $title = $_POST['title'];
          $thumbnail = $_POST['thumbnail'];
          $desc = $_POST['desc'];
          $content = $_POST['content'];
          $categoryid = $_POST['categoryid'];
          $tagid = $_POST['tagid'];
          $userid= $_SESSION['userid'];
          $slugcv = $this->covertSlug($title);
          $result = $this->PostModel->addNew([$title,$thumbnail,$desc,$content,$slugcv,$categoryid,$tagid,$userid]);
           if($result !=0){
             header("Location: ../WritterManager");
           }else{
              $this->view("admin","post_edit",[
              "taglist"=>$this->TagModel->readAll(),
              "error"=>"Sai thông tin",
              "categorylist"=>$this->CategoryModel->readAll()
              ]);
          } 
         }else{
                $this->view("admin","post_edit",[
                "taglist"=>$this->TagModel->readAll(),
                "categorylist"=>$this->CategoryModel->readAll()
                ]);
         }
      }
      public function deletePost(){
        if(isset($_POST['delete_id'])){
          $idPost =$_POST['delete_id'];
          if($this->PostModel->deleteRow([$idPost])){
            header("Location: ../WritterManager");
          }else{
            $this->view("admin","post_edit",[
              "taglist"=>$this->TagModel->readAll(),
              "error"=>"Xoá không thành công !",
              "categorylist"=>$this->CategoryModel->readAll()
            ]);
          }
        }else{
          header("Location: ../WritterManager");
        }
      }
} 










?>