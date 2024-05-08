<?php
include("connection.php");
$sql = "SELECT * FROM account";
$result = mysqli_query($conn, $sql);

if (isset($_POST['submit'])) {
    include("connection.php");
    $uname = $_POST['uname'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $address = $_POST['address'];
    $phoneNum = $_POST['phone'];
    $query = "INSERT INTO account (username, email, password, phone_number,fullName,address) 
    VALUES('$uname', '$email','$psw','$phoneNum','$fullName','$address') ";
    mysqli_query($conn, $query);
    echo " <meta http-equiv='refresh' content='0'>";
}
mysqli_close($conn);
function deleteAccount($username)
{
    include('connection.php');
    $sql1 = "UPDATE account SET statusA = '0' WHERE username = '$username' ";
    $result1 = mysqli_query($conn, $sql1);
    echo "
        <script>
            alert ('Khoá thành công');
        </script>";
    echo " <meta http-equiv='refresh' content='0'>";
}
function unDeleteAccount($username)
{
    include('connection.php');
    $sql1 = "UPDATE account SET statusA = '1' WHERE username = '$username' ";
    $result1 = mysqli_query($conn, $sql1);
    echo "
        <script>
            alert ('Mở khoá thành công');
        </script>";
    echo " <meta http-equiv='refresh' content='0'>";
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['unlockTK'])) {
        undeleteAccount($_POST["unlockTK"]);
    } else if (isset($_POST['lockTK'])) {
        deleteAccount($_POST["lockTK"]);
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí người dùng </title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <?php
    include("../pages/taskbar.php");
    ?>
    <!-- ========================= Main ==================== -->
    <?php
    include("../pages/mainadmin.php");
    ?>

    <!-- ================ Order Details List ================= -->
    <div class="details">
        <div class="recentOrders2">
            <div class="cardHeader">
                <h2>Thông tin tài khoản</h2>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>Họ và tên</td>
                        <td>Tài khoản</td>
                        <td>Mật khẩu</td>
                        <td>Gmail</td>
                        <td>SĐT</td>
                        <td>Địa chỉ</td>
                        <td>Chỉnh sửa</td>
                        <td colspan="2" style=" text-align: center">Trạng thái</td>
                    </tr>
                </thead>
                <tbody>
                    <style>
                        .password-container {
                            position: relative;
                        }

                        .toggle-password {
                            position: absolute;
                            top: 50%;
                            right: 10px;
                            transform: translateY(-50%);
                            cursor: pointer;
                        }
                    </style>
                    <?php
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo '
                                <tr>
                                    <td>' . $row['fullName'] . '</td>
                                    <td>' . $row['username'] . '</td>
                                    <td>
                                        <div class="password-container">
                                            <input type="text" id="password1" name="password" value="' . $row['password'] . '" readonly>
                                        </div>
            
                                    </td>
                                    <td>' . $row['email'] . '</td>
                                    <td>' . $row['phone_number'] . '</td>
                                    <td>' . $row['address'] . '</td>
                                    <td>
                                        <form action="chinhsuatk.php" method="post">
                                            <input type="text" name="uname1" value="'.$row['username'].'" style="display: none">
                                            <button class="status inProgress" type="submit" name="submit" onclick="toggleButtons()">Chỉnh sửa</button>
                                        </form>
                                    </td>
                                    <td style=" padding: 0">
                                        <form method="post">
                                            <button id="checkLock" onclick="khoataikhoan(checkLock,checkLock1)" class="status2 inProgress" type="submit" name = "lockTK" value="' . $row['username'] . '"
                                            ';
                                                if ($row['statusA'] == 0) {
                                                    echo 'style=" background-color: red; color: white"';
                                                }
                                                echo '
                                            ><span>Khóa</span></button> </td>
                                    <td  style=" padding: 0">
                                            <button id="checkLock1" class="status2 inProgress" type="submit"name = "unlockTK" value="' . $row['username'] . '"
                                            ';
                                                if ($row['statusA'] == 1) {
                                                    echo 'style=" background-color: orange; color: white"';
                                                }
                                                echo '
                                            ><span>Mở khóa</span></button>
                                        </form>
                                    </td>
            
                            </tr> ';
                    }
                    ?>
                    <div class="themsanpham">
                        </tr>
                    </div>
            </table>
            <br> <br>
            <button class="status inProgress" id="button2" type="button" style=" font-size: large; width: 180px; height: 60px;"> Thêm người dùng</button></td>
            <div id="myModal1" class="modal1" style="text-align: left; color: black; ">

                <!-- Modal content -->
                <div class="modal-content1">
                    <div class="modal-header1">
                        <span class="close">&times;</span>
                        <h2 style="text-align: center;">Thêm người dùng</h2>
                    </div>
                    <div class="modal-body1">
                        <div class="row1">
                            <div class="column1">
                                <form style="text-align: center;" method="post" onsubmit="alert('Thêm người dùng thành công')">
                                    <input class="tsp1" type="text" name="fullName" placeholder="Họ và tên" required>
                                    <input class="tsp1" type="text" name="uname" placeholder="Username" required>
                                    <input class="tsp1" type="password" name="psw" placeholder="Mật khẩu" required>
                                    <input class="tsp1" type="text" name="email" placeholder="Email" required>
                                    <input class="tsp1" type="text" name="phone" placeholder="Số điện thoại" required>
                                    <input class="tsp1" type="text" name="address" placeholder="Địa chỉ" required>
                            </div>
                        </div>
                        <script>
                            var modal = document.getElementById("myModal1");

                            // Get the button that opens the modal
                            var btn = document.getElementById("button2");

                            // Get the <span> element that closes the modal
                            var span = document.getElementsByClassName("close")[0];

                            // When the user clicks the button, open the modal 
                            btn.onclick = function() {
                                modal.style.display = "block";
                            }

                            // When the user clicks on <span> (x), close the modal
                            span.onclick = function() {
                                modal.style.display = "none";
                            }

                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                        </script>
                    </div>
                    <div class="modal-footer" style="text-align: center;">
                        <button class="saveBtn1" type="submit" name="submit">
                            Thêm người dùng
                        </button>
                        </form>
                    </div>
                </div>
            </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</php>