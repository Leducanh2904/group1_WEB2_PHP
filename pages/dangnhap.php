<?php
    include("connection.php");
    if(isset($_POST["submit"])){
    $name = $_POST["uname"];
    $password = $_POST["psw"];
    $sql = "SELECT * FROM account WHERE username = '$name' AND password = '$password' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    if($count==1){
        echo"
            <script>
            window.location.href = 'taikhoan.php';
            </script>
        ";
        $cookie_name = "user";
        // $row2 = $result2->fetch_assoc();
        $cookie_value = $row["fullName"];
        setcookie($cookie_name, $cookie_value,time() + (86400 * 30), "/");
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
                    <input type="text" placeholder="Tên tài khoản" name="uname" id="username" required>
                    <br>
                    <input type="password" placeholder="Mật khẩu" name="psw" id="password" required>
                    <br>
                    <?php 
                        if(isset($count) && $count !=1){
                            echo "<p style = 'color :red'>Tài khoản hoặc mật khẩu không đúng</p>";
                        }
                    ?>
                    <button type="submit" name="submit">Đăng nhập</button>
                    <br>
                    <input type="checkbox" checked="checked" name="remember"> Ghi nhớ tài khoản
                
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