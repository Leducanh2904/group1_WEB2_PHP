<!DOCTYPE html>

<html>

<head>
    <title>Tìm kiếm nâng cao</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="../css/detail.css">
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
    <link rel="stylesheet" href="../css/carousel.css">
    <script src="../js/function.js"></script>
    <link rel="stylesheet" href="../css/test.css">
</head>

<body onload="changAccountName()">
<?php
    include("../pages/mainmenu2.php");
    ?>   
<div class="khungtimkiem">
    <form action="#" method="GET" id="advanced-search-form" >
        <label for="timkiem">Tên sản phẩm</label>
        <input type="text" placeholder="Nhập tên sản phẩm " style="width: 575px; margin-top: 8px;" required> <br>
        <label for="search">Chọn loại sản phẩm</label> 
        <select id="chonsanpham" name="phanloai"  style="margin-top: 8px;" required> 
            <option value="allin">[None]</option>
            <option value="votcaulong">Tất cả</option>
            <option value="votcaulong">Vợt cầu lông</option>
            <option value="giaycaulong">Giày cầu lông</option>
            <option value="balocaulong">Balo, túi cầu lông</option>
            <option value="balocaulong">Phụ kiện cầu lông</option>
            <option value="balocaulong">Quần áo cầu lông</option>

        </select>

        <br> <br>
        <label for="brand">Thương hiệu</label>
        <select name="thuonghieu" id="chonthuonghieu"  style="margin-top: 8px;" required>
            <option value="yonex">[None]</option>
            <option value="yonex">Yonex</option>
            <option value="yonex">Lining</option>
            <option value="yonex">Sunbata</option>
            <option value="yonex">Kumpoo</option>
            <option value="yonex">Kawasaki</option>
            <option value="yonex">Victor</option>

        </select> 
        <br> <br> <br>
        <div class="price-range-container"> <div> <label for="price"><b style="font-size: large;">Mức giá</b> </label></div>
           
            <input type="range" id="price" name="price" min="0" max="100000000" step="100000" value="5000000" oninput="updatePriceValue(this.value)">
            <span id="price-display">4,500,000 <b>đ</b></span>
        </div>
 
        <label for="price-range">Phong cách chơi</label>
        <select id="price-range" name="price-range"  style="margin-top: 8px;">
            <option value="allin">[None]</option>
            <option value="attack">Đa dụng</option>
            <option value="attack">Tấn công</option>
            <option value="medium">Công thủ toàn diện</option>
            <option value="protected">Phản tạt, phòng thủ</option>
        </select> <br> <br>
        <label for="location">Chi nhánh</label>
        <select name="chinhanh" id="local"  style="margin-top: 8px;">
            <option value="allin">[None]</option>

        <option value="TQDA">TQDA PREMIUM Quận 1</option>
        <option value="TQDA">TQDA Quận 2 </option>
        <option value="TQDA">TQDA Quận 3</option>
        <option value="TQDA">TQDA Quận 4 </option>
        <option value="TQDA">TQDA Quận 5 </option>
        <option value="TQDA">TQDA Quận 6 </option>
        <option value="TQDA">TQDA Quận 7 </option>
        <option value="TQDA">TQDA Quận 8 </option>
        <option value="TQDA">TQDA Quận 9 </option>
        <option value="TQDA">TQDA Quận 10 </option>
        <option value="TQDA">TQDA Quận 11 </option>
        <option value="TQDA">TQDA Quận 12</option>
        <option value="TQDA">TQDA Quận Bình Tân </option>
        <option value="TQDA">TQDA Quận Phú Nhuận</option>
        <option value="TQDA">TQDA Quận Gò Vấp </option>
        <option value="TQDA">TQDA Quận Tân Bình</option>
        

    </select> <br> <br> 
     <button class="custom-button" type="button" onclick="window.location.href='../pages/danhmuctknangcao.php'" >Tìm</button>
    </form>
</div>
    <script>function updatePriceValue(value) {
        document.getElementById('price-display').textContent = formatCurrency(value);
    }
    
    function formatCurrency(amount) {
        // Sử dụng biểu thức chính quy để chèn dấu phẩy vào giữa mỗi ba chữ số
        return amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '₫' ;
    }
    
    </script>
  <div>
    <?php
    include ("../pages/footer.php");
    ?>
    </div>
</body>

</html>