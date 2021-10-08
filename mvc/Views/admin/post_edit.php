<?php
    //  include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php if(isset($data['table']))  echo "Edit post"; else echo "Add Post"; ?></h6>
            <h5 class="text-danger">
                <?php if (isset($data['error'])) echo $data['error']; 
            ?></h5>
        </div>
        <div class="card-body">
        <?php
            $taglist="";
            if(isset($data['taglist'])) {
                foreach ($data['taglist'] as $key => $value) {
                    $taglist.= '<option value="'.$value["id"].'">'.$value["tagkey"].'</option>';
                }
            }  
            $categorylist="";
            if(isset($data['categorylist'])) {
                foreach ($data['categorylist'] as $key => $value) {
                    $categorylist.= '<option value="'.$value["id"].'">'.$value["categoryname"].'</option>';
                }
            }   
            if(isset($data['table']))
            {
               $value = $data['table'][0];
                   echo '<form action="./WritterManager/updatePost" method="post">
                   <input type="hidden" name="id" value="'.$value["id"].'">
                   <div class="form-group">
                       <label> Title </label>
                       <input type="text" name="title" value="'.$value['title'].'" class="form-control" required="true">
                   </div>
                   <div class="form-group">
                       <label>Thumbnail</label>
                       <textarea class="form-control" rows="5" name="thumbnail">'.$value["thumbnail"].'</textarea>
                   </div>
                   <div class="form-group">
                       <label>description</label>
                       <textarea class="form-control" name="desc" rows="5">'.$value["description"].'
                      </textarea>
                   </div>
                   <div class="form-group">
                   <label for="content">Content</label>
                   <textarea class="form-control" rows="5" name="content" required="true">'.$value["content"].'</textarea>
                     </div>
                     <div class="form-group">
                     <label for="category">Category:</label>
                     <select class="form-control" id="category" name="categoryid">
                        '.$categorylist.'
                     </select>
                     </div>
                  <div class="form-group">
                    <label for="tag">Tag:</label>
                    <select class="form-control" id="tag" name="tagid">
                       '.$taglist.'
                    </select>
                    </div>
                   <a href="./WritterManager" class="btn btn-danger"> CANCEL </a>
                   <button type="submit" name="updateBtn" class="btn btn-primary"> Update </button>

               </form>';
                }else{
                    echo '<form action="./WritterManager/addPost" method="post">
                    <div class="form-group">
                        <label> Title </label>
                        <input type="text" name="title" placeholder="Nhập title" class="form-control" required="true">
                    </div>
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <textarea class="form-control" rows="5" name="thumbnail" placeholder="Nhập thumbnail"></textarea>
                    </div>
                    <div class="form-group">
                        <label>description</label>
                        <textarea class="form-control" name="desc" rows="5" placeholder="Nhập desc"></textarea>
                    </div>
                    <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" rows="5" name="content" placeholder="Nhập content" required="true"></textarea>
                      </div> 
                      <div class="form-group">
                      <label for="category">Category:</label>
                      <select class="form-control" id="category" name="categoryid">
                         '.$categorylist.'
                      </select>
                      </div>
                   <div class="form-group">
                    <label for="tag">Tag:</label>
                    <select class="form-control" id="tag" name="tagid" required="true">
                       '.$taglist.'
                    </select>
                    </div>
                    <a href="./WritterManager" class="btn btn-danger"> CANCEL </a>
                    <button type="submit" name="addPostBtn" class="btn btn-primary"> Add Post </button>
                </form>';
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