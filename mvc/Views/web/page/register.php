<form action="./Register/DangKy" class="was-validated" method="post" id="formRegister">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
      <div class="text-message"></div>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
    </div>
    <div class="form-group">
      <label for="fullname">Fullname:</label>
      <input type="text" class="form-control" id="fullname" placeholder="Enter fullname" name="fullname" required>
    </div>
    <div class="form-group">
      <label for="about">About:</label>
      <input type="text" class="form-control" id="about" placeholder="Enter about" name="about" required>
    </div>
    <button type="submit" class="btn btn-primary" name="btnRegister">Đăng ký</button>
      <a href="./login" class="btn btn-danger">Đã có tài khoản ? Đăng nhập</a>
  </form>

  <div class="text-danger">
    <?php 
       if(isset($data['result'])){
        if($data['result'] == 1) echo "Thành công !";
        else echo "Sai thông tin";
       }
     ?>
  </div>