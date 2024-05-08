<?php
    include("connection.php");

    if(isset($_POST["submit"])){
        $name = $_POST["uname"];
        $email = $_POST["email"];
        $password = $_POST["psw"];
        $phonenum = $_POST["phonenumb"];
        $fullName = $_POST["fullName"];
        $address = $_POST["address"];
        $sql = "SELECT * FROM account WHERE username = '$name'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if($count==0){
            $query ="INSERT INTO account (username, email, password, phone_number,fullName,address, statusA) VALUES('$name', '$email','$password','$phonenum','$fullName','$address', 1) ";
            mysqli_query($conn, $query);
            header('Location: dangnhap.php');
        }
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>

<html>  

<head>
    <title>Đăng kí tài khoản</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
    <link rel="stylesheet" href="../css/dangnhap.css">
    <script src="../js/function.js"></script>

    
</head>

<body>
    <?php
    include("../pages/mainmenu2.php");
    ?>
    <div>
        <form class="form1" method="post" autocomplete="off">
            <div class="imgcontainer">
                <img src="../images/logodangnhap.png" alt="Avatar" class="avatar">
                <p> <b style="font-size: x-large; color: orangered;">ĐĂNG KÍ</b></p>
            </div>

            <div class="container">

                <input type="text" placeholder="Tên tài khoản(*)" name="uname" id="username" title="Bạn phải nhập tài khoản ít nhất 8 kí tự" required>
                <br>
                <input type="text" placeholder="Email" name="email" id="email" >
                <br>
                <input type="text" placeholder="Số điện thoại(*)" name="phonenumb" id="PhoneNum" required>
                <br>
                <input type="password" placeholder="Mật khẩu(*)" name="psw" id="password" required>
                <br>
                <input type="password" placeholder="Nhập lại mật khẩu(*)" name="psw" id="password2"  required>
                <br>
                <input type="text" placeholder="Họ và Tên" name="fullName" id="hoTen" required>
                <br>
                <input type="text" placeholder="Địa Chỉ" name="address" id="diaChi" required>
                <br>
                <?php 
                        if(isset($count) && $count != 0){
                            echo "<p style = 'color :red'>Tài khoản đã tồn tại, vui lòng đăng kí lại</p>";
                        }
                    ?>
                <button type="submit" name="submit">Đăng kí</button>
                <p style="color:black;">Đã có tài khoản, đăng nhập   <a href="../pages/dangnhap.php" style="color: orangered;">tại đây</a> </p>
            </div>
        </form>
        <script>
            function SignUp(){
                var pass = document.getElementById("password");
                var pass2 = document.getElementById("password2");
                if(pass2.value != pass.value){
                    alert("Mật khẩu nhập lại không khớp");
                    pass2.focus();
                }
                else{
                    alert("Đăng kí thành công, vui lòng đăng nhập lại")
                    window.location.href = "dangnhap.php";
                };
                
            }
        </script>
    </div>


   <?php
   include("../pages/footer.php");
   ?>
</body>

</html>