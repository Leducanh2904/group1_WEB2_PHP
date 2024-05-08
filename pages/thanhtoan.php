<?php
    session_start(); // Bắt đầu session
    include("mainmenu2.php");
    include("connection.php");

    // display account information
    $a= $_COOKIE["user"];
    $sql3 = "SELECT * FROM account WHERE fullName = '$a'";
    $result3 = mysqli_query($conn, $sql3);
    $row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);

    // set orderID 
    $sql = "SELECT * FROM orders";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result); 

    //insert new Order
    if(isset($_POST["submit"])){
        $orderID = "TDQ" .$count + 1;
        $username = $row3['username'];
        $fullName = $_POST["fullName"];
        $address = $_POST['address'];
        $phoneNum = $_POST["phoneNum"];
        $payment = $_POST["payment"];
        $date = date("Y-m-d");
        $sql1 = "INSERT INTO orders (order_id, username, fullName, address, phone_number, payment, order_date, status) 
                VALUES ('$orderID', '$username', '$fullName', '$address', '$phoneNum', '$payment', '$date', 0)";
        $result1 = mysqli_query($conn, $sql1);

        // insert new Order details
        $totalPrice = 0;
        foreach ($_SESSION['cart'] as $product) {
            $productID = $product['ProductID'];
            $amount = $product['Quantity'];
            $totalPrice += $product['Price'] * $product['Quantity'];
            $sql2 = "INSERT INTO order_detail (order_id, ProductID, amount)
                    VALUES ('$orderID', '$productID', $amount)";
            $result2 = mysqli_query($conn, $sql2);
        }
        $sql1 ="UPDATE orders SET total_amount = '$totalPrice' WHERE order_id = '$orderID' ";
        $result1 = mysqli_query($conn, $sql1);
        
        unset($_SESSION['cart']);
        echo"
            <script>
            window.location.href = 'taikhoan.php';
            </script>"
        ;
    }
    mysqli_close($conn);
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
                            <form name="pay" method="post" onsubmit="return validateForm()">
                                <div>
                                    <input type="text" placeholder="Họ và tên người nhận" id="fullName" name="fullName" <?php echo "value = '". $row3['fullName']."'" ?> required>
                                    <input type="text" placeholder="Số điện thoại" id="phoneNumber" name="phoneNum" <?php echo "value = '". $row3['phone_number']."'" ?> required>
                                    <input type="text" id="address" placeholder="Địa chỉ" name="address" required>
                                    <input type="radio" name="rd1" value="Chon" onchange="changeAddress()"> Chọn địa chỉ
                                    từ tài khoản <br>
                                    <input type="radio" name="rd1" value="Nhap" onchange="changeAddress()"> Nhập địa chỉ
                                    mới
                                    <script>
                                        function changeAddress(){
                                            if(document.pay.rd1.value == "Chon"){
                                                document.getElementById("address").value="<?php echo $row3['address']?>";
                                            }
                                            if(document.pay.rd1.value == "Nhap"){
                                                document.getElementById("address").value=null;
                                            }
                                        }               
                                    </script>
                                </div>

                                <div>
                                    <p><b>Phương thức thanh toán</b></p>
                                    <div>
                                        <label>
                                            <input type="radio" name="payment" value="0" id="option1" required>
                                            <b>Thanh toán khi nhận hàng</b>
                                        </label>
                                    </div>
                                    <label>
                                        <input type="radio" name="payment" value="1" id="option2" required>
                                        <b>Thanh toán online (Thẻ visa, Thẻ ngân hàng, Momo)</b>
                                        <p class="thanhtoantext3">
                                            Momo: 0963261328<br>
                                            Tên: Phạm Ngọc Triều<br>
                                            (Nội dung chuyển khoản: Tên + SDT đặt hàng)
                                        </p>
                                    </label>
                                    <p class="thanhtoantext9">
                                        <input type="submit" name="submit" value="ĐẶT HÀNG" style="background-color: orange;
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

                                            echo '<a href="../pages/chitiet100zz.php?id='.$productId.'">';
                                            echo '<div class="thanhtoananh1">';
                                            echo '<img src="../images/' . $product['ImageURL'] . '">';
                                            echo '<div class="product-info">';
                                            echo '<p class="thanhtoantext4">Tên sản phẩm: ' . $product['ProductName'] . '</p>';
                                            echo '<p class="thanhtoantext4">Giá tiền: ' . number_format($product['Price'], 0, ',', '.') . '₫</p>';
                                            echo '<p class="thanhtoantext4">Số lượng: ' . $product['Quantity']. '</p>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</a>';
                                            echo '<hr>';

                                        } else {
                                            echo "Lỗi: Dữ liệu sản phẩm không hợp lệ.";
                                        }
                                    }
                                }
                    ?>
                    <div class="total-container">
                        <p class="thanhtoantext6">Tổng cộng:</p>
                        <?php
                        if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                            $totalPrice = 0;
                            foreach ($_SESSION['cart'] as $product) {
                                $totalPrice += $product['Price'] * $product['Quantity'];
                            }
                            echo '<p class="thanhtoantext7">' . number_format($totalPrice, 0, ',', '.') . ' ₫</p>';
                        } else {
                            echo '<p class="thanhtoantext7">0 ₫</p>';
                        }
                        ?>
                    </div>

                    <!-- <div>
                        <p class="thanhtoantext6">Tổng cộng:</p>
                        <?php
                                    if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                        $totalPrice = array_sum(array_column($_SESSION['cart'], 'Price'));
                                        echo '<p class="thanhtoantext7">' . number_format($totalPrice, 0, ',', '.') . '₫</p>';
                                    }
                                    ?>
                    </div> -->
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