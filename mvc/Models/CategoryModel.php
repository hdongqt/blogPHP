<?php
   require_once "./mvc/Database/DB.php";

  class CategoryModel extends Database{
    public function readAll(){
      $sql = "SELECT * from category";
      return $this->showAll($sql);
    }
  }

?>