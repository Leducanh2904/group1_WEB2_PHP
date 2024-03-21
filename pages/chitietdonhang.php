<!DOCTYPE html>

<html>

<head>
    <title>Tài khoản</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href = "../css/styleTLWeb1.css" >
    <link rel="stylesheet" href = "../css/taikhoan.css" >
    <script src="../js/function.js"></script>
</head>

<body onload="changAccountName()">
    <header>
        <div class="box-header">
            <div class="LogoChinh">
                <img src="../images/Logochinh.png" alt="Logo trang web" >
            </div>
            <div class="menu-top">
                <div class="logohotline">
                    <img src="../images/logohotline.jpg" alt="Logo hotline">

                </div>
                <div class="PhoneNum">
                    <span> HOTLINE: </span>
                    <b></b>
                    <p style="color: orangered;"><b> 0931335214 | 0963261328 | 0364655945</b> </p>

                </div>
                <div class="search1">
                    <form  class="searchBar" method="get" role="search"action="../pages/danhmuctimkiem.php">
                        <input type="text" id="tim kiem" required
                            class="input-group-field auto-search search-auto form-control" placeholder="Tìm sản phẩm..."
                            style="border-width: 1px; border-color:rgb(16, 122, 131);  ">
                        <button type="submit" aria-label="Tìm kiếm" title="Tìm kiếm">
                            <svg width="20" height="17" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1404 13.4673L19.852 19.1789C20.3008 19.6276 19.6276 20.3008 19.1789 19.852L13.4673 14.1404C12.0381 15.4114 10.1552 16.1835 8.09176 16.1835C3.6225 16.1835 0 12.5613 0 8.09176C0 3.6225 3.62219 0 8.09176 0C12.561 0 16.1835 3.62219 16.1835 8.09176C16.1835 10.1551 15.4115 12.038 14.1404 13.4673ZM0.951972 8.09176C0.951972 12.0356 4.14824 15.2316 8.09176 15.2316C12.0356 15.2316 15.2316 12.0353 15.2316 8.09176C15.2316 4.14797 12.0353 0.951972 8.09176 0.951972C4.14797 0.951972 0.951972 4.14824 0.951972 8.09176Z"
                                    fill="#e95211"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            <div class="logodangnhap1">
               <a href="../pages/dangnhap.php" target="_blank">
                <img src="../images/logodangnhap.png" alt="Logo đăng nhập"><br>
                <span id="taikhoan">TÀI KHOẢN</span>
                
            </a>
            </div>
            <div class="logogiohang">
                <a href="../pages/giohang.php" target="_blank">
                    <img src="../images/logogiohang.png" alt="logo giỏ hàng"><br>
                    <span>GIỎ HÀNG</span>
                    
                </a>
            </div>
        </div>

    </header>
    
   
    <ul class = "main-menu">
        <li class = "main-men"><a href="../index/index.php">Trang chủ</a></li>
        <li class="dropdown"><div class = "main-menu"><a class="dropbtn">Sản phẩm</a></div>
            
            <div class="dropdown-content">
                <ul >
                    <li class="sub-dropdown">
                        <a href="../pages/votcaulong1.php" target="_blank">Vợt cầu lông</a>
                        <div class="sub-dropdown-content">
                        </div>
                    </li>
                    <li><a href="v/giaycaulong1.php" target="_blank">Giày cầu lông</a>
                        <div class="sub-dropdown-content">
                        </div>
                    </li>
                    <li><a href="../pages/quanaocaulong1.php"target="_blank">Quần áo cầu lông</a>
                        <div class="sub-dropdown-content">
                        </div>
                    </li>
                    <li><a href="../pages/balocaulong1.php"target="_blank">Balo, túi cầu lông</a>
                        <div class="sub-dropdown-content">
                        </div>
                    </li>
                    <li><a href="../pages/phukiencaulong1.php"target="_blank">Phụ kiện cầu lông</a>
                        <div class="sub-dropdown-content">
                        </div>
                    </li>
                </ul>
        <li class="nodrop"><a href="/tintuc/tintuc.html">Tin tức</a></li>
        <li class="dropdown"><div class = "main-menu"><a class="dropbtn">Hướng dẫn</a></div>
            
            <div class="dropdown-content">
                <ul >
                    <li class="sub-dropdown">
                        <a href="/huongdan/huongdanchonvot.html" target="_blank">Hướng dẫn chọn vợt</a>
                        <div class="sub-dropdown-content">
                        </div>
                    </li>
                    <li><a href="/huongdan/huongdanthanhtoan.html" target="_blank">Hướng dẫn thanh toán</a>
                        <div class="sub-dropdown-content">
                        </div>
                    </li>
                </ul>
        
                <li class="nodrop"><a href="/gioithieu/gioithieu.html">Giới thiệu</a></li>
                <li class="nodrop"><a href="/lienhe/lienhe.html">Liên hệ</a></li>
    </ul>   
    <div class="table">
        <h1 class="title-head margin-top-0">Chi tiết đơn hàng</h1>
        <div>
            <table class="special-table" >
                <tr>
                    <th class="special-table" style="width:200px ;">Hình ảnh sản phẩm</th>
                    <th class="special-table" style="width:150px ;">Tên sản phẩm</th>
                    <th class="special-table" style="width: 100px ;">Đơn giá</th>
                    <th class="special-table" style="width: 100px ;"> Số lượng </th> 
                    <th class="special-table" style="width: 100px ;">Tổng</th>
                </tr>
                <tr>
                    <td class="special-table" > <img src="../images/100zz01.png" width="40%" > </td>
                    <td class="special-table" >Vợt Cầu Lông Yonex Astrox 100ZZ China Limited 
                        (Nội Địa Trung) </td>
                    <td class="special-table" >9.700.000 ₫</td>
                    <td class="special-table" ><span class="price">1</span></td>
                    <td class="special-table" >9.700.000 ₫</td>
                </tr>
                <tr>
                    <td class="special-table" > <img src="../images/day-cuoc-cang-vot-lining-n63-noi-dia-3.png" width="40%" > </td>
                    <td class="special-table" >Dây cước căng vợt Lining N63 nội địa </td>
                    <td class="special-table" >230.000 ₫</td>
                    <td class="special-table" ><span class="price">1</span></td>
                    <td class="special-table" >230.000 ₫</td>
                </tr>
                <tr>
                    <td class="special-table" > <img src="../images/quan-can-yonex-xin-ac102c-15-ex-1-cuon.png" width="40%" > </td>
                    <td class="special-table" >Quấn cán vợt Yonex xịn AC102C15 </td>
                    <td class="special-table" >135.000 ₫</td>
                    <td class="special-table" ><span class="price">2</span></td>
                    <td class="special-table" >270.000 ₫</td>
                </tr>
            </table>
            <table class="special-table" >
                <tr style="height: 50px;">
                    <td class="special-table" style="width: 200px ;"></td>
                    <td class="special-table" style="width: 150px ;"></td>
                    <td class="special-table" style="width: 100px ;"></td>
                    <td class="special-table" style="width: 150px; text-align: center;"> <b>Tổng tiền</b> </td>
                    <td class="special-table" style="width: 150px; text-align: center;" > <b>10.200.000 ₫</b> </td>
                </tr>
            </table>
        </div>
    </div>  
</body>