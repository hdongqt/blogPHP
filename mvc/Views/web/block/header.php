<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="./Home">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="./Home">Home</a></li>
                        <li class="nav-item">
                            <?php
                            if(!empty($_SESSION['username']) && !empty($_SESSION['fullname'])){
                                echo '<a class="nav-link active" href="">'.$_SESSION['fullname'].'</a>';
                            }else echo '<a class="nav-link" href="./login">Đăng nhập</a>';
                            ?>
                        </li>
                            <?php
                               if(isset($_SESSION['isadmin'])){
                                    if($_SESSION['isadmin'])
                                     echo '<li class="nav-item"><a class="nav-link" href="./AdminManager">Quản lý</a></li>
                                     <li class="nav-item"><a class="nav-link" href="./login/logout">Đăng xuất</a></li>
                                     ';
                                    else  echo '<li class="nav-item"><a class="nav-link" href="./WritterManager">Quản lý</a></li>
                                    <li class="nav-item"><a class="nav-link" href="./login/logout">Đăng xuất</a></li>';
                               }
                            ?>
                    </ul>
                </div>
            </div>
        </nav>