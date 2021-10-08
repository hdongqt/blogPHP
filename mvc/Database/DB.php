<?php
require_once "CONST_DB.php";
class Database {
  protected $conn=null;
  public function __construct(){
      try {
          $this->conn = new PDO(SRC, USERNAME, PASSWORD);
      } catch (PDOException $e) {
        //    echo "Failed to get DB: " . $e->getMessage() . "\n";
           die();
      }       
  }
      //set parameter vào statement
    protected function setParameter($statement,$data = []){   
        $myQuery = ((array)$statement)['queryString'];
        $sumParams = substr_count($myQuery, "?");
        for($i =0 ; $i < $sumParams; $i++){
            $statement->bindValue($i+1,$data[$i]);
        }
    }

    // CRUD
    protected function create($sql,$data = []){
        $statement = $this->conn->prepare($sql);
        $this->setParameter($statement,$data);   
        if($statement->execute()) return 1;
        return 0;
    }

    protected function showAll($sql){   
        $sth = $this->conn->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        $result = $sth->fetchAll();
        return $result;
    }

    protected function update($sql,$data=[])
    {
        $statement= $this->conn->prepare($sql);
        $this->setParameter($statement,$data);
        $statement->execute();
        $count = $statement->rowCount();
        if($count > 0) return 1;
        return 0;
    }

    protected function delete($sql,$data=[]){  
        $sth = $this->conn->prepare($sql);
        $this->setParameter($sth,$data);
        $sth->execute();
        $count = $sth->rowCount();  //Đếm số hàng bị xóa
        if($count > 0) return 1;
        return 0;
   }
  
 
  }
