<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ Admin</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <style>
        
    </style>
    <script>
        function LogOut(){
            localStorage.clear();
        }
    </script>
    
    <!-- =============== Navigation ================ -->
                <?php 
                include ("../pages/taskbar.php");
                ?>
        <!-- ========================= Main ==================== -->
        <?php 
                include ("../pages/mainadmin.php");
                ?>
            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">891,890</div>
                        <div class="cardName">Lượt xem</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">30,129</div>
                        <div class="cardName">Lượt chia sẻ</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="pricetags-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">5,449</div>
                        <div class="cardName">Bình luận</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">1.320.241.300 </div>
                        <div class="cardName">Doanh số đã thu về </div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Đặt hàng gần đây</h2>
                        
                    </div>
                    <table >
                        <thead>
                            <tr>
                                <td>Tên sản phẩm</td>
                                <td>Giá</td>
                                <td>Thanh toán</td>
                                <td>Trạng thái</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Vợt Cầu Lông Yonex Astrox 100ZZ China Limited</td>
                                <td>9.700.000 <u>đ</u></td>
                                <td>Tiền mặt</td>
                                <td><span class="status pending">Đã xử lí</span></td>
                            </tr>

                            <tr>
                                <td>Giày cầu lông Kawasaki 065 chính hãng</td>
                                <td>1.090.000 <u>đ</u></td>
                                <td>Online</td>
                                <td><span class="status pending">Đã xử lí</span></td>
                            </tr>

                            <tr>
                                <td>Áo Cầu Lông Yonex 2071 Nữ - Trắng </td>
                                <td>160.000 <u>đ</u></td>
                                <td>Tiền mặt</td>
                                <td><span class="status return">Chưa xử lí</span></td>
                            </tr>

                            <tr>
                                <td>Váy Cầu Lông Donex Pro ASC-898</td>
                                <td>269.000 <u>đ</u></td>
                                <td>Online</td>
                                <td><span class="status pending">Đã xử lí</span></td>
                            </tr>

                            <tr>
                                <td>Balo Cầu Lông Yonex BA268 Xanh</td>
                                <td>1.100.000 <u>đ</u></td>
                                <td>Online</td>
                                <td><span class="status return">Chưa xử lí</span></td>
                            </tr>

                            <tr>
                                <td>Vợt Cầu Lông Victor Thruster TTY</td>
                                <td>3.550.000 <u>đ</u></td>
                                <td>Online</td>
                                <td><span class="status pending">Đã xử lí</span></td>
                            </tr>
                            <tr>
                                <td>Túi Cầu Lông Yonex BA02326EX </td>
                                <td>890.000 <u>đ</u></td>
                                <td>Tiền mặt</td>
                                <td><span class="status pending">Đã xử lí</span></td>
                            </tr>

                            <tr>
                                <td>Dây Cước Căng Vợt Lining N61</td>
                                <td>180.00 <u>đ</u></td>
                                <td>Tiền mặt</td>
                                <td><span class="status pending">Đã xử lí</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Khách hàng gần đây</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../images/customer01.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Ngọc Triều<br> <span>0364655945</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../images/customer01.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Minh Quân<br> <span>Việt Nam</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../images/customer03.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Đức Anh<br> <span>Việt Nam</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../images/customer01.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Tuấn Cùi <br> <span>Việt Nam</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../images/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Hiếu Ba Số <br> <span>Việt Nam </span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../images/customer01.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Huy Châu <br> <span>Cali</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../images/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Bình Minh <br> <span>Cali</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../images/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Phúc Du <br> <span>Việt Nam</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</body>

</html>