<?php
include("connection.php");

// Sử dụng prepared statement
$sql = "SELECT * FROM products WHERE ProductID = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $productID);
$productID = 'TQDA290404';
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Kiểm tra xem có kết quả trả về hay không
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
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
<div class="bodywrap">
    <section class="bread-crumb">
        <div class="container">
            <section class="layout-product product">
        </div>
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
                                    <span class="price product-price"><b style="font-size: x-large;"><?php echo $row['Price']; ?> ₫</b></span>
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
                            // Truy vấn cơ sở dữ liệu để lấy chuỗi size
                            $sql = "SELECT * FROM products WHERE Category LIKE 'Vợt'"; // Điều chỉnh điều kiện truy vấn tùy thuộc vào nhu cầu của bạn
                            $result = mysqli_query($conn, $sql);
                            // Kiểm tra xem có kết quả từ truy vấn không
                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                $sizes = explode(", ", $row['Size']); // Phân tách chuỗi size thành một mảng

                                echo '<div class="form-product">';
                                echo '<div class="select-swatch">';
                                echo '<div class="swatch clearfix" data-option-index="0">';
                                echo '<div class="header12">Chọn size:</div> <br>';
                                echo '<select name="size">'; // Thẻ select để hiển thị combobox

                                // Lặp qua mảng các size và tạo một option cho mỗi size
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

                                /* CSS để tùy chỉnh kích thước và kiểu dáng của combobox */
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
    <?php include("../pages/ontop1.php"); ?>
    <div class="khungden">
        <div class="cot">THÔNG TIN CHUNG<br>
            TQDA Sports là hệ thống cửa hàng cầu lông với<br> hơn 50 chi nhánh trên toàn quốc, cung cấp sỉ và<br> lẻ các
            mặt hàng dụng cụ cầu lông từ phong trào<br> tới chuyên nghiệp<br>

            Với sứ mệnh: "TQDA cam kết mang đến những<br> sản phẩm, dịch vụ chất lượng tốt nhất phục vụ<br> cho người
            chơi thể thao để nâng cao sức khỏe<br> của chính mình."<br>

            Tầm nhìn: "Trở thành nhà phân phối và sản xuất<br> thể thao lớn nhất Việt Nam"</div>
        <div class="cot">THÔNG TIN LIÊN HỆ<br>
            Hệ thống cửa hàng: 1 shop Premium 59 cửa<br> hàng trên toàn quốc<br>
            Xem tất cả các cửa hàng TQDA<br>

            Hotline: 0931335214 | 0963261328 | 0364655945<br>
            Email: TQDA@gmail.com<br>
            Hợp tác kinh doanh: 0931335214 (Mr. Quân)<br>
            Hotline bán sỉ: 0911 105 211<br>
            Nhượng quyền thương hiệu: 0963261328 (Mr. Nan)<br>
            Than phiền dịch vụ: 0364655945 (Mr. Đức Anh)</div>
        <div class="cot">CHÍNH SÁCH<br>
            Chính sách đổi trả,hoàn tiền<br>
            Chính sách bảo hành<br>
            Chính sách xử lý khiếu nại<br>
            Chính sách vận chuyển<br>
            Điều khoản sử dụng<br>
            Chính Sách Bảo Mật Thông Tin<br>
            Chính sách nhượng quyền</div>
        <div class="cot">HƯỚNG DẪN<br>
            Tìm hiểu công việc tập huấn tennis trước khi<br> tổ chức giải đấu<br>
            Bảng size Lining - Cách chọn size quần áo<br> lining, giày cầu lông Lining<br>
            Hướng dẫn cách tập tennis cho người mới<br> chơi<br>
            Hướng dẫn cách chọn vợt cầu lông cho người<br> mới chơi<br>
            Hướng dẫn thanh toán<br>
            Kiểm tra bảo hành<br>
            Kiểm tra đơn hàng<br>
            HƯỚNG DẪN MUA HÀNG</div>
    </div>
    <div class="khungcam">
        <div class="cot">
            © CÔNG TY TNHH TQDA SPORTS<br>
            GPKD số 0559966452 do Sở KH và ĐT TP Hồ Chí Minh cấp ngày 20/10/2023<br>
            GĐ/Sở hữu by TQDA<bsite:br>
        </div>
    </div>
</body>
</html>
