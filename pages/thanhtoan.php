<?php
session_start(); // Bắt đầu session
include("../pages/mainmenu2.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Thanh toán</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
    <link rel="stylesheet" href="../css/thanhtoan.css">
    <script src="../js/function.js"></script>
    <script>
    function validateForm() {
        var fullName = document.getElementById('fullName').value;
        var phoneNumber = document.getElementById('phoneNumber').value;
        var email = document.getElementById('email').value;

        if (fullName === "" || phoneNumber === "" || email === "") {
            alert("Vui lòng nhập đầy đủ thông tin");
            return false;
        }

        thanhtoan();
        return false;
    }


function thanhtoan() {
    // Lấy thông tin từ các trường nhập liệu
    var fullName = document.getElementById('fullName').value;
    var phoneNumber = document.getElementById('phone_number').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    var paymentMethod = document.querySelector('input[name="options"]:checked').value;

    // Gửi dữ liệu đặt hàng lên máy chủ
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText); // Hiển thị thông báo từ máy chủ
        }
    };
    xhttp.open("POST", "process_order.php", true); // Thay đổi đường dẫn tới file xử lý PHP
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("fullName=" + fullName + "&phoneNumber=" + phoneNumber + "&email=" + email + "&address=" + address + "&paymentMethod=" + paymentMethod);
}
</script>
</head>

<body onload="changAccountName()">

    <div class="body">
        <div class="khungthanhtoan">
            <div class="khungthanhtoana">
                <div class="inform">
                    <a href="index.php" class="thanhtoantext1">TQDA SPORT</a>
                    <br>
                    <br>
                    <div class="thanhtoantext2">
                        Thông tin khách hàng
                    </div>
                    <br>
                    <div class="khungthanhtoan">
                        <div>
                            <form name="pay" action=".." onsubmit="return validateForm()">
                                <div>
                                    <input type="text" placeholder="Họ và tên người nhận" id="fullName" required>
                                    <input type="text" placeholder="Số điện thoại" id="phoneNumber" required>
                                    <input type="text" placeholder="Email" id="email" required>
                                    <input type="text" id="address" placeholder="Địa chỉ" required>
                                    <input type="radio" name="rd1" value="Chon" onchange="changeAddress()"> Chọn địa chỉ
                                    từ tài khoản <br>
                                    <input type="radio" name="rd1" value="Nhap" onchange="changeAddress()"> Nhập địa chỉ
                                    mới
                                </div>

                                <div>
                                    <p><b>Phương thức thanh toán</b></p>
                                    <div>
                                        <label>
                                            <input type="radio" name="options" id="option1" required>
                                            <b>Thanh toán khi nhận hàng</b>
                                        </label>
                                    </div>
                                    <label>
                                        <input type="radio" name="options" id="option2" required>
                                        <b>Thanh toán online (Thẻ visa, Thẻ ngân hàng, Momo)</b>
                                        <p class="thanhtoantext3">
                                            Momo: 0963261328<br>
                                            Tên: Phạm Ngọc Triều<br>
                                            (Nội dung chuyển khoản: Tên + SDT đặt hàng)
                                        </p>
                                    </label>
                                    <p class="thanhtoantext9">
                                        <input type="submit" value="ĐẶT HÀNG" style="background-color: orange;
                                                            color: white;
                                                            padding: 2px 2px;
                                                            margin-top: 50px ;
                                                            margin-right: -20px;
                                                            border-color: orange;
                                                            cursor: pointer;
                                                            width: 150px;">
                                    </p>
                                </div>
                            </form>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="khungthanhtoanb">
                <div>
                    <p class="thanhtoantext2">
                        <span>ĐƠN HÀNG</span>
                    </p>
                    <hr>

                    <?php
                                if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $productId => $product) {
                                        if (is_array($product)) {
                                            echo '<a href="../pages/chitiet100zz.php">';
                                            echo '<div class="thanhtoananh1">';
                                            echo '<img src="../images/' . $product['ImageURL'] . '">';
                                            echo '<b class="thanhtoantext4">' . $product['ProductName'] . '</b>';
                                            echo '<b class="thanhtoantext5">' . number_format($product['Price'], 0, ',', '.') . '₫</b>';
                                            echo '</div>';
                                            echo '</a>';
                                            echo '<hr>';
                                        } else {
                                            echo "Lỗi: Dữ liệu sản phẩm không hợp lệ.";
                                        }
                                    }
                                }
                                ?>

                    <div>
                        <p class="thanhtoantext6">Tổng cộng:</p>
                        <?php
                                    if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                        $totalPrice = array_sum(array_column($_SESSION['cart'], 'Price'));
                                        echo '<p class="thanhtoantext7">' . number_format($totalPrice, 0, ',', '.') . '₫</p>';
                                    }
                                    ?>
                    </div>
                    <div>
                        <a href="../pages/giohang.php">
                            <p class="thanhtoantext8">Quay về giỏ hàng</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <?php
    include ("../pages/footer.php");
    include ("../pages/ontop1.php");
    ?>
    </div>
</body>

</html>