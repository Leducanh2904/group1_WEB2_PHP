<?php
    include("connection.php");
    if(isset($_POST["submit"])){
    $name = $_POST["uname"];
    $password = $_POST["psw"];
    $sql = "SELECT * FROM sign_up WHERE User_name = '$name' AND Password = '$password";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        echo"login success";
    }
    else{
        echo"login failure";
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title>Đăng nhập tài khoản</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
    <link rel="stylesheet" href="../css/dangnhap.css">
    <script src="../js/function.js"></script>
</head>

<body>
    <?php
    include("../pages/mainmenu2.php");
    ?>
    <div  class="khungdangnhap">
        <form class="form1" method="post" autocomplete="off">
            <div class="imgcontainer">
                <img src="../images/logodangnhap.png" alt="Avatar" class="avatar">
                <p> <b style="font-size: x-large; color: orangered;">ĐĂNG NHẬP</b></p>
            </div>
            

            <div class="container">
                <form></form>
                    <input type="text" placeholder="Tên tài khoản" name="uname" id="username" required>
                    <br>
                    <input type="password" placeholder="Mật khẩu" name="psw" id="password" required>
                    <br>
                    <button type="submit">Đăng nhập</button>
                    <br>
                    <input type="checkbox" checked="checked" name="remember"> Ghi nhớ tài khoản
                </form>
            </div>
            <div class="container" style="background-color:#f1f1f1; text-align: center;" >
                <span >Quên mật khẩu?</a></span>
                <p style="color:black;"> Đăng kí  <a href="../pages/dangki.php" style="color: orangered;">tại đây</a> </p>
                <!-- <p style="color:black;"> Đăng nhập bằng tư cách quản trị viên <a href="admin.html" style="color: orangered;">tại đây</a> </p> -->
            </div>
        </form>
    </div>
    <?php
    include("../pages/footer.php");
    ?>
</body>

</html>