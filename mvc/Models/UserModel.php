<?php
   require_once "./mvc/Database/DB.php";

  class UserModel extends Database{
    public function addNew($data = []){
      $sql = "INSERT INTO users (username,password,roleid,fullname,about) VALUES (?,?,?,?,?)";
      return $this->create($sql,$data);
    }
    public function selectOne($id){
      $sql = "SELECT * from users WHERE id = $id";
      return $this->readOne($sql);
    }
    public function readAll(){
      $sql = "SELECT * from users";
      return $this->showAll($sql);
    }
    public function updateRow($data = []){
      $sql = "UPDATE users SET masv = ? ,hoten=?, sodt=?, diachi= ? WHERE id=?";
      $result =  $this->update($sql,$data);
      if($result) return 1;
      return 0;
    }
    public function checkUser($data = []){
      $sql = "SELECT * FROM users WHERE username = ? and password = ?";
      $sth = $this->conn->prepare($sql);
      $this->setParameter($sth,$data);
      $sth->setFetchMode(PDO::FETCH_ASSOC);
      $sth->execute();
      $result = $sth->fetchAll();
      return $result;
   }
   public function changeRole($data=[]){
    $sql = "UPDATE users SET roleid =? WHERE id = ?";
    return $this->update($sql,$data);
   }
   public function deleteUser($data=[]){
    $sql = "DELETE FROM users WHERE id = ?";  
    return $this->delete($sql,$data);
   }
   public function checkExits($username){
       $sql = "SELECT * FROM users WHERE username = ?";
       $sth = $this->conn->prepare($sql);
       $this->setParameter($sth,[$_POST['username']]);
       $sth->setFetchMode(PDO::FETCH_ASSOC);
       $sth->execute();
       $result = $sth->fetchAll();
       if($result) return 1;
       return 0;
     }
   }

?>