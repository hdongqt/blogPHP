<?php
   require_once "./mvc/Database/DB.php";

  class TagModel extends Database{
    public function addNew($data = []){
      $sql = "INSERT INTO diemthi (masv,mamh,diemso,lanthi) VALUES (?,?,?,?)";
      return $this->create($sql,$data);
    }
    public function readAll(){
      $sql = "SELECT * from tags";
      return $this->showAll($sql);
    }
  }

?>