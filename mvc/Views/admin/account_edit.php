<?php
    //  include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($data['table']))
            {
                foreach ($data['table'] as $key => $value) {
                   echo '<form action="" method="POST">
                   <input type="hidden" name="edit_id" value='.$value["id"].'>

                   <div class="form-group">
                       <label> Username </label>
                       <input type="text" name="edit_username" value='.$value["username"].' class="form-control"
                           placeholder="Enter Username">
                   </div>
                   <div class="form-group">
                       <label>Password</label>
                       <input type="text" name="edit_email" value='.$value["password"].' class="form-control"
                           placeholder="Enter Email">
                   </div>
                   <div class="form-group">
                       <label>RoldId</label>
                       <input type="text" name="edit_password" value='.$value["roleid"].'
                           class="form-control" placeholder="Enter Password">
                   </div>
                   <div class="form-group">
                   <label>About</label>
                   <input type="text" name="edit_password" value='.$value["about"].'
                       class="form-control" placeholder="Enter Password">
                     </div>
                    
                   <a href="./AdminManager" class="btn btn-danger"> CANCEL </a>
                   <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

               </form>';
                }
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