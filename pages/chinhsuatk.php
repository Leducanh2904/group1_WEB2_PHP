<?php 
    include('connection.php');
    $uname = $_POST['uname1'];
    $sql1 = "SELECT * FROM account WHERE username = '$uname'";
    $result = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo $uname;
    if(isset($_POST['submit1'])){
        $uname2 = $_POST['username']; 
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $psw = $_POST['psw'];
        $address = $_POST['address'];
        $phoneNum = $_POST['phone'];
        $sql2 = "UPDATE account 
                 SET fullName ='$fullName', email = '$email', password='$psw', address='$address', phone_number='$phoneNum' 
                 WHERE username = '$uname2' ";
        $result1 = mysqli_query($conn, $sql2);
        mysqli_close($conn);
        header('Location: quanlitaikhoan.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa tài khoản</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../css/style.css">
    
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
   <!-- =============== Navigation ================ -->
   <?php 
                include ("../pages/taskbar.php");
                ?>
        <!-- ========================= Main ==================== -->
        <?php 
                include ("../pages/mainadmin.php");
                ?>

            <!-- ================ chinh sua tai day ================= -->
         
            <div class="div1">
                <!-- Bảng nhập thông tin ban đầu -->
                <div class="table-container">
                    <h2>Thông tin ban đầu</h2> <br>
                    <form id="initialInfoForm">
                        <label for="originalName">Họ và tên:</label>
                        <input type="text" id="originalName" name="originalName" value="<?php echo $row['fullName']?>" readonly>
                        <label for="username">Tài khoản:</label>
                        <input type="text" id="username" required value="<?php echo $row['username']?>" readonly>
                        <label for="password">Mật khẩu:</label>
                        <input type="text" id="password" required value="<?php echo $row['password']?>" readonly>
                        <label for="email">Email:</label>
                        <input type="email" id="email" required value="<?php echo $row['email']?>" readonly>
                        <label for="phone">Số điện thoại:</label>
                        <input type="text" id="phone" required value="<?php echo $row['phone_number']?>" readonly>
                        <label for="address">Địa chỉ:</label>
                        <input type="text" id="phone" required value="<?php echo $row['address']?>" readonly>
                        <!-- Thêm các trường thông tin khác cần nhập -->
        
                    </form>
                </div>
                <!-- Bảng chỉnh sửa thông tin mới -->
                <div class="table-container">
                    <h2>Thông tin cần cập nhật</h2> <br>    
                    <form id="editInfoForm" method="post" autocomplete="off">
                        <label for="editedName">Họ và tên:</label>
                        <input type="text" id="editedName" name="fullName" value="<?php echo $row['fullName']?>" required placeholder="Họ và tên">
                        <label for="username">Tài khoản:</label>
                        <input type="text" id="username" name="username" value="<?php echo $row['username']?>" required placeholder="Tài khoản" readonly>
            
                        <label for="psw">Mật khẩu:</label>
                        <input type="text" id="password" name="psw" value="<?php echo $row['password']?>" required placeholder="Mật khẩu">
            
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" value="<?php echo $row['email']?>" required placeholder="Email">
            
                        <label for="phone">Số điện thoại:</label>
                        <input type="text" id="phone" name="phone" value="<?php echo $row['phone_number']?>" required placeholder="Số điện thoại">

                        <label for="address">Địa chỉ:</label>
                        <input type="text" id="phone" name="address" value="<?php echo $row['address']?>" required placeholder="Địa chỉ">
                        <!-- Thêm các trường thông tin khác cần chỉnh sửa -->
                        <button class="saveBtn1" type="submit" name="submit1"> Lưu chỉnh sửa </button>
                    </form>
                </div>
            </div>
            
         
         <style>
    .div1 {
    display: flex;
    justify-content: space-between;
    width: 1000px;
    margin: 20px auto;
}
.table-container {
    width: 350px;
    padding: 30px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
    margin-top: 70px;
}
.img {
    margin: auto;
    width: 30px;
    margin-bottom: 200px;
    margin-left: 100px;

}


.div1 label {
    display: block;
    margin-bottom: 8px;
    color: #555;
}

.div1 input {
    width: 100%;
    padding: 10px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}
h2 {
    text-align: center;
    color: #333;
}



</style>
</body>
</html>