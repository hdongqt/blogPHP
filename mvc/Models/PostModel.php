<?php
   require_once "./mvc/Database/DB.php";

  class PostModel extends Database{


    public function readAll(){
      $sql = "SELECT * from posts";
      return $this->showAll($sql);
    }
    public function selectOne($id){
      $sql = "SELECT * from posts WHERE id = $id";
      return $this->showAll($sql);
    }
    public function selectDetail($slug){
      $sql = "SELECT posts.*,tags.tagkey,users.username,users.fullname FROM posts INNER JOIN tags ON posts.tagid = tags.id INNER JOIN users ON posts.userid = users.id WHERE posts.slug = '$slug'";
      return $this->showAll($sql);
    }
    public function selectAllByUser($data=[]){
      $sql = "SELECT * from posts WHERE userid = ?";
      $sth= $this->conn->prepare($sql);
      $this->setParameter($sth,$data);
      $sth->setFetchMode(PDO::FETCH_ASSOC);
      $sth->execute();
      $result = $sth->fetchAll();
      return $result;
    }
    public function updateRow($data = []){
      $sql = "UPDATE posts SET title=?, thumbnail=?, description=?, content=?,slug=?,categoryid =?,tagid=? WHERE id = ?";
      return $this->update($sql,$data);
    }
    public function addNew($data=[]){
      $sql = "INSERT INTO posts(title,thumbnail,description,content,slug,categoryid,tagid,userid) VALUES (?,?,?,?,?,?,?,?)";
      return $this->create($sql,$data);
    }
    
    public function readAllShow(){
      $sql = "SELECT * from posts WHERE status =1";
      return $this->showAll($sql);
    }
    public function deleteRow($data=[]){
      $sql = "DELETE FROM posts WHERE id = ?";  
      return $this->delete($sql,$data);
    }
    public function changeStatus($data=[]){
      $sql = "UPDATE posts SET status =? WHERE id = ?";
      return $this->update($sql,$data);
    }
  }


?>