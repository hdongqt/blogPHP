<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>



<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Profile 
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Username </th>
            <th>Password</th>
            <th>Role </th>
            <th>Fullname </th>
            <th>About</th>
            <th>CreateTime</th>
            <th>ChangeRole </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
        <?php
          if(!empty($data['table'])){
            foreach ($data['table'] as $key => $value) {
              $role = $value['roleid'] == 1 ? "writter" : "admin";
              $roleChange = $value['roleid'] == 1 ? 2 : 1;
              echo '<tr>
              <td>'.$value['id'].'</td>
              <td> '.$value['username'].'</td>
              <td> '.$value['password'].'</td>
              <td class="text-danger font-weight-bold">'.$role.'</td>
              <td> '.$value['fullname'].' </td>
              <td> '.$value['about'].' </td>
              <td> '.$value['createtime'].'</td>
              <td>
                  <form action="./User/changeRole" method="post">
                      <input type="hidden"  value='.$value["id"].' name="userid" >
                      <input type="hidden"  value='.$roleChange.' name="roleNew" >
                      <button  type="submit" class="btn btn-success" name="changeRoleBtn">CHANGE</button>
                  </form>
              </td>
              <td>
                  <form action="./User/deleteUser" method="post">
                    <input type="hidden" name="delete_id" value='.$value["id"].'>
                    <button type="submit" name="delete_btn" class="btn btn-danger" > DELETE</button>
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