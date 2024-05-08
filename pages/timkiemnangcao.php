<!DOCTYPE html>
<html>

<head>
    <title>Tìm kiếm nâng cao</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="../css/detail.css">
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
    <link rel="stylesheet" href="../css/carousel.css">
    <link rel="stylesheet" href="../css/test.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.css">
</head>

<body onload="changAccountName()">
    <?php
    include("../pages/config.php");
    include("../pages/mainmenu2.php");
    ?>
    <div class="khungtimkiem">
        <form action="../pages/danhmuctknangcao.php" method="GET" id="advanced-search-form">
            <label for="timkiem">Tên sản phẩm</label>
            <input type="text" name="search_query" placeholder="Nhập tên sản phẩm"
                style="width: 575px; margin-top: 8px;" required> <br>


            <label for="search">Chọn loại sản phẩm</label>
            <select id="chonsanpham" name="phanloai" style="margin-top: 8px;" required>
                <option value="null">Tất cả</option>
                <option value="Vợt">Vợt cầu lông</option>
                <option value="Giày">Giày cầu lông</option>
                <option value="Phụ kiên">Phụ kiện cầu lông</option>
                <option value="Quần áo">Quần áo cầu lông</option>
            </select>
            <br> <br>
            <label for="brand">Thương hiệu</label>
            <select name="thuonghieu" id="chonthuonghieu" style="margin-top: 8px;" required>
                <option value="null">Tất cả</option>
                <option value="Yonex">Yonex</option>
                <option value="Lining">Lining</option>
                <option value="Sunbata">Sunbata</option>
                <option value="Kumpoo">Kumpoo</option>
                <option value="Kawasaki">Kawasaki</option>
                <option value="Victor">Victor</option>
            </select>
            <br> <br> <br>
            <div class="price-range-container">
                <div>
                    <label for="price"><b style="font-size: large;">Mức giá</b> </label>
                </div>
                <div id="price"></div>
                <span id="price-min-display">0 <b>đ</b></span>
                <span id="price-max-display">5,000,000 <b>đ</b></span>
                <input type="hidden" id="price-min" name="price_min">
                <input type="hidden" id="price-max" name="price_max">
            </div>
            <button class="custom-button" type="submit">Tìm</button>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js"></script>
    <script>
    var priceSlider = document.getElementById('price');
    var priceMin = document.getElementById('price-min');
    var priceMax = document.getElementById('price-max');
    var priceMinDisplay = document.getElementById('price-min-display');
    var priceMaxDisplay = document.getElementById('price-max-display');

    noUiSlider.create(priceSlider, {
        start: [0, 5000000],
        connect: true,
        step: 500000,
        range: {
            'min': 0,
            'max': 15000000
        }
    });
    priceSlider.noUiSlider.on('update', function(values, handle) {
        var value = values[handle];
        if (handle) {
            priceMax.value = value;
            priceMaxDisplay.textContent = formatCurrency(value);
        } else {
            priceMin.value = value;
            priceMinDisplay.textContent = formatCurrency(value);
        }
    });

    function formatCurrency(amount) {
        return amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '₫';
    }
    </script>
    <?php
    include("../pages/footer.php");
    ?>
</body>

</html>