<!DOCTYPE html>
<html>

<head>
    <title>Tìm kiếm nâng cao</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="../css/detail.css">
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
    <link rel="stylesheet" href="../css/carousel.css">
    <link rel="stylesheet" href="../css/test.css">
</head>

<body onload="changAccountName()">
    <?php
    include("../admin/config.php");
    include("../pages/mainmenu2.php");
    ?>
    <div class="khungtimkiem">
        <form action="../pages/danhmuctknangcao.php" method="GET" id="advanced-search-form">
            <label for="timkiem">Tên sản phẩm</label>
            <input type="text" name="search_query" placeholder="Nhập tên sản phẩm"
                style="width: 575px; margin-top: 8px;" required> <br>


            <label for="search">Chọn loại sản phẩm</label>
            <select id="chonsanpham" name="phanloai" style="margin-top: 8px;" required>
                <option value="Vợt">Vợt cầu lông</option>
                <option value="Giày">Giày cầu lông</option>
                <option value="Balo">Balo, túi cầu lông</option>
                <option value="Phụkiên">Phụ kiện cầu lông</option>
                <option value="Quầnáo">Quần áo cầu lông</option>
            </select>
            <br> <br>
            <label for="brand">Thương hiệu</label>
            <select name="thuonghieu" id="chonthuonghieu" style="margin-top: 8px;" required>
                <option value="Yonex">Yonex</option>
                <option value="Lining">Lining</option>
                <option value="Sunbata">Sunbata</option>
                <option value="Kumpoo">Kumpoo</option>
                <option value="Kawasaki">Kawasaki</option>
                <option value="Victor">Victor</option>
            </select>
            <br> <br> <br>
            <div class="price-range-container">
                <div> <label for="price"><b style="font-size: large;">Mức giá</b> </label></div>

                <input type="range" id="price" name="price" min="0" max="100" step="1" value="5"
                    oninput="updatePriceValue(this.value)">
                <span id="price-display">5 <b>đ</b></span>
            </div>
            <button class="custom-button" type="submit">Tìm</button>
        </form>
    </div>
    <script>
    function updatePriceValue(value) {
        document.getElementById('price-display').textContent = formatCurrency(value);
    }

    function formatCurrency(amount) {
        // Sử dụng biểu thức chính quy để chèn dấu phẩy vào giữa mỗi ba chữ số
        return amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '₫';
    }
    </script>
    <?php
    include("../pages/footer.php");
    ?>
</body>

</html>