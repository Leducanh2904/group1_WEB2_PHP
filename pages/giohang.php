<?php
session_start(); // Bắt đầu session

include("../pages/mainmenu2.php");

// Xử lý yêu cầu xóa sản phẩm nếu có
if (isset($_GET['remove'])) {
    $removeProductId = $_GET['remove'];
    // Kiểm tra xem sản phẩm cần xóa có tồn tại trong giỏ hàng không
    if (isset($_SESSION['cart'][$removeProductId])) {
        // Xóa sản phẩm khỏi giỏ hàng
        unset($_SESSION['cart'][$removeProductId]);
        // Không cần chuyển hướng trở lại trang giỏ hàng, chỉ cần xóa sản phẩm trong session
        exit(); // Kết thúc kịch bản PHP
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
    <link rel="stylesheet" href="../css/giohang.css">
    <script src="../js/function.js"></script>
    <style>
    .product-container {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
    }

    .product {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .product img {
        width: 100px;
        height: auto;
        margin-right: 20px;
    }

    .product-info {
        flex: 1;
    }

    .product-info h3 {
        margin: 0;
    }

    .product-info p {
        margin: 0;
    }

    .product button {
        background-color: #ff6347;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .product button:hover {
        background-color: #ff7f50;
    }
    </style>
</head>

<body>
    <div>
        <div class="khunggiohang1">
        <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    .Thaotac td
    {
        margin-left: 190px;
    }

    /* Tùy chỉnh khoảng cách giữa các cột */
    td {
        padding-right: 20px; /* Chỉnh khoảng cách bên phải */
    }
</style>
           <table>
            <tr>
                <td>Ảnh sản phẩm</td>
                <td>Tên sản phẩm</td>
                <td>Giá</td>
                <td class="Thaotac">Thao tác</td>
            </tr>
           </table>
        </div>
        <div class="khunggiohang3">
            <?php
            if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $productId => $product) {
                    if (is_array($product)) {
                        echo '<div class="product-container">';
                        echo '<div class="product" id="product_' . $productId . '">';
                        echo '<img src="../images/' . $product['ImageURL'] . '" alt="' . $product['ProductName'] . '">';
                        echo '<div class="product-info">';
                        echo '<h3 style= "margin-left: 190px">' . $product['ProductName'] . '</h3>';
                        echo '</div>'; // Đóng product-info
                        echo '<p style = "margin-right: 310px;">Giá: ' . number_format($product['Price'], 0, ',', '.') . '₫</p>';
                        echo '<button onclick="removeFromCart(' . $productId . ')">Xóa sản phẩm</button>';
                        echo '</div>'; // Đóng product
                        echo '</div>'; // Đóng product-container
                    } else {
                        echo "Lỗi: Dữ liệu sản phẩm không hợp lệ.";
                    }
                }
            } else {
                echo '<div>';
                echo '<p>Giỏ hàng của bạn đang trống.</p>';
                echo '</div>';
            }
            ?>
            <div>
                <div class="giohanggiatext2">
                    <b>TỔNG TIỀN:</b>
                </div>
                <div class="giohanggiatext1">
                    <?php
                    if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                        $totalPrice = array_sum(array_column($_SESSION['cart'], 'Price'));
                        echo '<b>' . number_format($totalPrice, 0, ',', '.') . ' ₫</b>';
                    } else {
                        echo '<b>0 ₫</b>';
                    }
                    ?>
                </div>
            </div>
            <div class="khunggiohang4">
                <a href="../pages/thanhtoan.php">
                    <p class="my-element" style="margin-top: -0px;">ĐẶT HÀNG</p>
                </a>
            </div>
        </div>
    </div>

    <script>
    function removeFromCart(productId) {
        // Xóa sản phẩm khỏi DOM
        var productElement = document.getElementById("product_" + productId);
        productElement.parentNode.removeChild(productElement);

        // Gửi yêu cầu xóa sản phẩm đến server bằng AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "giohang.php?remove=" + productId, true);
        xhr.send();

        // Tải lại trang sau khi xóa sản phẩm
        location.reload();
    }
    </script>
</body>

</html>

<?php
include("../pages/footer.php");
include("../pages/ontop1.php");
?>