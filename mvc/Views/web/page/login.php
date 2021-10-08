<form action="./login/DangNhap" class="was-validated" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" name="btnLogin" class="btn btn-primary">Đăng nhập</button>
    <a href="register" class="btn btn-danger">Đăng ký tài khoản mới</a>
  </form>
  <hr>
  <div class="message">
  <?php
        if(isset($data['mess'])){
          echo $data['mess'];
        }
   ?>
  </div>
