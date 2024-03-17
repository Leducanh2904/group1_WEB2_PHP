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
                        <input type="text" id="originalName" name="originalName" value="Lê Đức Anh">
                        <label for="username">Tài khoản:</label>
            <input type="text" id="username" name="username" required value="ldanhsguk22">

            <label for="password">Mật khẩu:</label>
            <input type="text" id="password" name="password" required value="leducanhdeptrai">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required value="ldanhsguk22@gmail.com">

            <label for="phone">Số điện thoại:</label>
            <input type="tel" id="phone" name="phone" required value="0364655945">
                        <!-- Thêm các trường thông tin khác cần nhập -->
        
                    </form>
                </div>
        
                <!-- Nút lưu chỉnh sửa -->
                
               <a class="img" href="" onclick="alert('Chỉnh sửa thành công ')"> <img src="../images/change.png" alt="chuyen doi"> </a>
        
                <!-- Bảng chỉnh sửa thông tin mới -->
                <div class="table-container">
                    <h2>Thông tin cần cập nhật</h2> <br>    
                    <form id="editInfoForm">
                        <label for="editedName">Họ và tên:</label>
                        <input type="text" id="editedName" name="editedName" required placeholder="Họ và tên">
                        <label for="username">Tài khoản:</label>
                        <input type="text" id="username" name="username" required placeholder="Tài khoản">
            
                        <label for="password">Mật khẩu:</label>
                        <input type="password" id="password" name="password" required placeholder="Mật khẩu">
            
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required placeholder="Email">
            
                        <label for="phone">Số điện thoại:</label>
                        <input type="tel" id="phone" name="phone" required placeholder="Số điện thoại">
                        <!-- Thêm các trường thông tin khác cần chỉnh sửa -->
        
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