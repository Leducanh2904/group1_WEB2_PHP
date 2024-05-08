<?php
include("connection.php");
if (isset( $_POST["submit"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $sql = "SELECT * FROM admin where user_name = '$username' and password = '$password'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  if ($count == 1){
    echo"
    <script>
    window.location.href = '../admin/admin.php';
    </script>
";
$cookie_name = "useradmin";
// $row2 = $result2->fetch_assoc();
$cookie_value = $row["username"];
setcookie($cookie_name, $cookie_value,time() + (86400 * 30), "/");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Đăng nhập Admin</title>
    <link rel="stylesheet" href="../css/styadmin.css" />
  </head>
  <body>
    <div class="login-box">
      <h2>Login</h2>
      <form method = "post">
        <?php 
        echo '
        <div class="user-box">
          <input type="text" name="username" required />
         <label>User name</label>
        </div>
        <div class="user-box">
          <input type="password" name="password" required />
          <label>Password</label>
        </div>
        <button type = "submit" name="submit">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Login
        </button>
        '
        ?>
      </form>
    </div>
  </body>
</html>