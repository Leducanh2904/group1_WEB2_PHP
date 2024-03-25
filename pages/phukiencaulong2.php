<!DOCTYPE html>

<html>

<head>
    <title>Phụ kiện cầu lông</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="../css/detail.css">
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
    <link rel="stylesheet" href="../css/carousel.css">
    <script src="../js/function.js"></script>
</head>

<body onload="changAccountName()">
<?php
   include ("../pages/mainmenu1.php");
   ?>
    <div class = "khungcacsanpham">
    <div class="khungsanphammoi">
        <div class="sanpham">
            <a href="../pages/quancanvot.php"><img src="../images/day-giay-cau-long-mizuno-tron-1.png" alt="100zz"></a>

            <div class ="tenvot">
                <p class = "vot">Dây giày Mizuno tròn 1 </p>
                <b class ="giavot">150.000 <u>đ</u></b>
            </div>
        </div>
        <div class="sanpham">
            
            <a href="../pages/quancanvot.php"><img src="../images/day-giay-cau-long-yonex-ac570-1.png" alt="atroxx7"></a>
            <div class ="tenvot">
                <p class = "vot">Dây giày Yonex AC570 </p>
                <b class ="giavot">160.000 <u>đ</u></b>
            </div>
        </div>
        <div class="sanpham">
            <a href="../pages/quancanvot.php"><img src="../images/banggoilining.png" alt="Ax90"></a>
            <div class ="tenvot">
                <p class = "vot">Băng gối bảo vệ cơ </p>
                <b class ="giavot">80.000 <u>đ</u></b>
            </div>
        </div>
        <div class="sanpham">
            <a href="../pages/quancanvot.php"><img src="../images/ong-cau-long-hai-yen-s100-3.png" alt="001"></a>

            <div class ="tenvot">
                <p class = "vot">Ống cầu lông Hải Yến</p>
                <b class ="giavot">200.000 <u>đ</u></b>
            </div>
        </div>
    </div>
        <div class ="ctrang">
            <button class="chuyentrang" onclick="window.location.href = '../pages/phukiencaulong1.php '">1</button>
            <button class="chuyentrang" onclick="window.location.href = '../pages/phukiencaulong2.php '">2</button>
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