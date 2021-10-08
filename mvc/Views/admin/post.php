<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> List Post
            <a href="./WritterManager/addPost" class="btn btn-success">
              Add Post
            </a>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Title </th>
            <th>Thumnail</th>
            <th>Desc </th>
            <th>content </th>
            <th>status</th>
            <th>slug</th>
            <th>categoryid</th>
            <th>Tagid</th>
           <?php
           if(isset($_SESSION['isadmin']) && $_SESSION['isadmin'] == 1) echo "<th>CHANGE</th>"; else echo "<th>EDIT</th>";
           ?>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
        <?php
          if(!empty($data['table'])){
            foreach ($data['table'] as $key => $value) {
              echo '<tr>
              <td>'.$value['id'].'</td>
              <td> '.$value['title'].'</td>
              <td><img width="50" height="50" src='.$value['thumbnail'].'></img></td>
              <td>'.$value['description'].'</td>
              <td> '.$value['content'].' </td>
              <td> '.$value['status'].' </td>
              <td> '.$value['slug'].'</td>
              <td> '.$value['categoryid'].'</td>
              <td> '.$value['tagid'].'</td>
              <td>
                  <form action="./WritterManager/updatePost" method="post">
                      <input type="hidden"  value='.$value["id"].' name="id" >
                      <button  type="submit" class="btn btn-success"> EDIT</button>
                  </form>
              </td>
              <td>
                  <form action="./WritterManager/deletePost" method="post">
                    <input type="hidden" name="delete_id" value="'.$value["id"].'">
                    <button type="submit" name="deletePostBtn" class="btn btn-danger" > DELETE</button>
                  </form>
              </td>
            </tr>';
            }
          }
      ?>      
        
        
        </tbody>
      </table>
<?php
  if(isset($data['result'])){
    echo $data['result'];
  }

?>
    </div>
  </div>
</div>

</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>