<div class="card mb-4">
    <div class="card-header">Tag</div>
    <div class="card-body">
    <div class="row">
        <div class="col-sm-6">
            <ul class="list-unstyled mb-0">
            <?php
                if(isset($data["tag"])){
                    foreach ($data['tag'] as $key => $value) {
                            echo '<li><a href=tag/'.$value['slug'].'>'.$value["tagkey"].'</a></li>';
                    }
                }
            ?>
            </ul>
        </div>
    </div>
</div>
</div>