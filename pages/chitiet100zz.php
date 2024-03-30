<?php
include("connection.php");

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $productID = $_GET['id'];

    // Sử dụng prepared statement
    $sql = "SELECT * FROM products WHERE ProductID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $productID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Kiểm tra xem có kết quả trả về hay không
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    } else {
        // Xử lý khi không tìm thấy sản phẩm
        echo "Không tìm thấy sản phẩm.";
        exit; // Dừng việc thực hiện mã PHP tiếp theo
    }
} else {
    // Xử lý khi không có tham số ProductID trong URL
    echo "Tham số sản phẩm không hợp lệ.";
    exit; // Dừng việc thực hiện mã PHP tiếp theo
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $row['ProductName']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
    <link rel="stylesheet" href="../css/product2.css">
    <script src="../js/function.js"></script>
</head>
<body onload="changAccountName()">
<?php include("../pages/mainmenu2.php"); ?>
<div class="bodywrap"style="margin-top:70px">
    <section class="bread-crumb">
    <div class="container">
        <div class="details-product">
            <div class="row1">
                <div class="col-lg-9 col-col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="product-detail-left product-images col-12 col-md-6 col-lg-5">
                            <?php echo '<img src="../images/' . $row['ImageURL'] . '" alt="' . $row['ProductName'] . '" width="400">'; ?>
                        </div>
                        <div class="details-pro col-12 col-md-6 col-lg-7">
                            <h1 class="title-product"><?php echo $row['ProductName']; ?></h1>
                            <!-- Hiển thị các thông tin khác của sản phẩm -->
                            <div class="sku-product clearfix">
                                <span class="variant-sku">Mã: <span class="a-sku"><?php echo $row['ProductID']; ?></span></span>
                            </div>
                            <div class="inventory_quantity">
                                <span class="mb-break">
                                    <span class="stock-brand-title">Thương hiệu:</span>
                                    <a class="a-vendor"><strong><a><?php echo $row['Brand']; ?></a></strong></a>
                                </span>
                            </div>
                            <!-- Hiển thị giá và ưu đãi -->
                            <div class="price-box clearfix">
                                <span class="special-price">
                                <?php
                                        // Định dạng giá tiền theo mong muốn
                                        $price = number_format($row['Price'], 0, ',', '.'); // Định dạng số tiền với dấu chấm ngăn cách hàng nghìn
                                        echo $price . "₫";
                                    ?>
                                </span>
                            </div>
                            <fieldset class="pro-discount uu_dai">
                                <legend>
                                    <img width="32" height="32" alt="Khuyến mãi" src="../images/khuyenmai.gif"> ƯU ĐÃI
                                </legend>
                                <div class="product-promotions-list-content">
                                    <!-- Hiển thị thông tin ưu đãi -->
                                    <?php echo $row['Promotion']; ?>
                                </div>
                            </fieldset>
                            <br>
                            <?php
                            if ($row['Category'] == 'Vợt') {
                                $sizes = array('2U', '3U', '4U', '5U');
                            } elseif ($row['Category'] == 'Giày') {
                                $sizes = array('40', '41', '42', '43', '44','45');
                            } else {
                                // Nếu không phải vợt hoặc giày, không hiển thị size
                                $sizes = array();
                            }

                            if (!empty($sizes)) {
                                echo '<div class="form-product">';
                                echo '<div class="select-swatch">';
                                echo '<div class="swatch clearfix" data-option-index="0">';
                                echo '<div class="header12">Chọn size:</div> <br>';
                                echo '<select name="size">'; 
                                foreach ($sizes as $size) {
                                    echo "<option value='" . $size . "'>" . $size . "</option>";
                                }

                                echo '</select>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            } else {
                                echo "Không có size nào được tìm thấy.";
                            }

                            ?>
                            <style>
                                .header12 {
                                    font-size: 20px;
                                }
                                select {
                                    padding: 10px; /* Độ dày của các viền xung quanh combobox */
                                    font-size: 20px; /* Cỡ chữ trong combobox */
                                    width: 140px; /* Chiều rộng của combobox */
                                    border-radius: 5px; /* Độ cong của các góc */
                                    border: 1px solid #ccc; /* Màu viền của combobox */
                                    appearance: none; /* Ẩn kiểu mặc định của nút select */
                                    -webkit-appearance: none; /* Đối với các trình duyệt WebKit (như Chrome, Safari) */
                                    background-position: right 10px center; /* Vị trí của hình ảnh mũi tên */
                                    background-repeat: no-repeat; /* Không lặp lại hình ảnh */
                                }
                            </style>
                            <br>
                            <div class="boz-form">
                                <div class="clearfix form-group">
                                    <div class="flex-quantity">
                                        <div class="btn-mua button_actions clearfix">
                                            <button type="button" class="btn_base" onclick="addToCart()">Thêm vào giỏ hàng</button>
                                        </div>
                                    </div>
                                </div>
                            </div> <br>
                        </div>
                    </div>
                    <div class="product-tab e-tabs not-dqtab">
                        <ul class="tabs tabs-title clearfix">
                            <li class="tab-link active" data-tab="#tab_gioi_thieu">
                                <h3>Mô tả sản phẩm</h3>
                            </li>
                        </ul>
                        <div class="row ababa">
                            <div class="col-md-12">
                                <?php
                                echo '<h2 style="text-align:justify">';
                                echo '<span style="font-size:20px;"><span ><strong>' . $row['ProductName'] . '</strong></span></span></h2>';
                                echo '<p style="text-align:justify">';
                                echo '<span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">';
                                echo $row['Description'];
                                echo '</p>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div id="page_comment_list" class="list-comment">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("../pages/ontop1.php");
     include("../pages/footer1.php"); ?>
</body>
</html>
