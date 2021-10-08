<div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="row">
                        <?php
                           if(isset($data['table'])){
                          foreach ($data['table'] as $key => $value) {
                              echo '<div class="col-6">
                                <div class="card mb-4">
                              <a href=Home/detail/'.$value["slug"].' class="text-decoration-none"><img class="card-img-top" src='.$value["thumbnail"].' alt="..." />
                              <div class="card-body">
                                  <div class="small text-muted">'.$value["updatetime"].'</div>
                                  <h2 class="card-title h4">'.$value["title"].'</h2>
                                  <p class="card-text">'.$value["description"].'</p>
                                  <a class="btn btn-primary" href="#!">Read more →</a>
                              </div>
                              </a>
                              </div>
                          </div>';
                          }
                           }
                        ?>
                     
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>