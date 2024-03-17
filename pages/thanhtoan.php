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
    
            alert('Đặt hàng thành công');
        }
    </script>
</head>

<body onload="changAccountName()">
<?php
   include("../pages/mainmenu2.php");
   ?>
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
                                    <input type="radio" name="rd1" value="Chon" onchange="changeAddress()"> Chọn địa chỉ từ tài khoản <br>
                                    <input type="radio" name="rd1" value="Nhap" onchange="changeAddress()"> Nhập địa chỉ mới
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
                            <div>

                            </div>
                        </div>
                    </div>
                    </div>
                    
                </div>
                <div class="khungthanhtoanb">
                    <p class="thanhtoantext2">
                        <span>ĐƠN HÀNG</span> 
                    </p>
                    <hr>
                    
                        <a href="../pages/chitiet100zz.php">
                            <div class="thanhtoananh1">
                            <img src="../images/Sanphammoi100zz.jpg">
                            <b class="thanhtoantext4">Vợt Cầu Lông Yonex Astrox 100ZZ<br>
                                China Limited (Nội Địa Trung)</b>
                            <b class="thanhtoantext5">9.700.000 ₫</b> 
                        </div>
                        </a>
                           
                    
                    <hr>
                    <hr>
                    <a href="../pages/chitietsp4.php">
                    <div class="thanhtoananh1">
                        <img src="../images/quan-cau-long-lining-92001-den-vang.png">
                        <b class="thanhtoantext4">Quần cầu lông Lining 92001 - Đen<br>
                            Vàng Xanh Chính Hãng chính hãng</b>
                        <b class="thanhtoantext5">139.000 ₫</b>    
                    </div>
                    </a>
                    <hr>
                    <hr>
                    <a href="../pages/chitietsp5.php">
                    <div class="thanhtoananh1">
                        <img src="../images/quan-cau-long-lining-9209-den-vang.png">
                        <b class="thanhtoantext4">Quần cầu lông Lining 9209 - Đen <br>
                            Vàng Xanh Chính Hãng chính hãng</b>
                        <b class="thanhtoantext5">130.000 ₫</b>    
                    </div>
                    </a>
                    <hr>
                    <hr>
                    <a href="../pages/chitietsp.php">
                    <div class="thanhtoananh1">
                        <img src="../images/giay-cau-long-kawasaki-065-trang-chinh-hang-1090.png">
                        <b class="thanhtoantext4">Giày cầu lông Kawasaki 065 chính<br>hãng</b>
                        <b class="thanhtoantext5">1.090.000 ₫</b>    
                    </div>
                    </a>
                    <hr>
                    <div>
                        <p class="thanhtoantext6">Tổng cộng:</p>
                        <p class="thanhtoantext7">11,059,000 ₫</p>
                    </div>
                    <div>
                        <a href="../pages/giohang.php">
                        <p class="thanhtoantext8">Quay về giỏ hàng</p></a>
                        <!-- <p class="thanhtoantext9"><input type="button" value="ĐẶT HÀNG" style="background-color: orange;
                            color: white;
                            padding: 2px 2px;
                            margin-top: 0px ;
                            margin-left: 5px;
                            border-color: orange;
                            cursor: pointer;
                            width: 150px;"  onclick="alert('Đặt hàng thành công')"></p> -->
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