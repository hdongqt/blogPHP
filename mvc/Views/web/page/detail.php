<div class="col-lg-8">
    <?php
       if(isset($data['table'])) {
           $detail = $data['table'][0];
           echo '<article>
           <header class="mb-4">
               <h1 class="fw-bolder mb-1">'.$detail['title'].'</h1>
               <div class="text-muted fst-italic mb-2">Posted on '.$detail["updatetime"].' by '.$detail["fullname"].'</div>
               <a class="badge bg-secondary text-decoration-none link-light" href="#!">'.$detail["tagkey"].'</a>
           </header>
           <figure class="mb-4"><img class="img-fluid rounded" src="'.$detail['thumbnail'].'" alt="..."></figure>
           <section class="mb-5">
           <p class="fs-5 mb-4">
           '.$detail["content"].'
           </p>
           </section>
       </article>';
       }
   ?>  
              
              
     </div>