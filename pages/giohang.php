<?php

session_start(); // Bắt đầu session


// Xử lý yêu cầu xóa sản phẩm nếu có
if (isset($_GET['remove'])) {
    $removeProductId = $_GET['remove'];
    // Kiểm tra xem sản phẩm cần xóa có tồn tại trong giỏ hàng không
    if (isset($_SESSION['cart'][$removeProductId])) {
        // Xóa sản phẩm khỏi giỏ hàng
        unset($_SESSION['cart'][$removeProductId]);
        exit(); // Kết thúc kịch bản PHP
    }
}

// Xử lý yêu cầu cập nhật số lượng sản phẩm
if (isset($_GET['update'])) {
    $updateProductId = $_GET['update'];
    $newQuantity = $_GET['quantity'];
    // Kiểm tra xem sản phẩm cần cập nhật có tồn tại trong giỏ hàng không
    if (isset($_SESSION['cart'][$updateProductId])) {
        // Cập nhật số lượng sản phẩm
        $_SESSION['cart'][$updateProductId]['Quantity'] = $newQuantity;
        // Tính lại tổng tiền
        $totalPrice = 0;
        foreach ($_SESSION['cart'] as $product) {
            $totalPrice += $product['Price'] * $product['Quantity'];
        }
        echo number_format($totalPrice, 0, ',', '.') . ' ₫'; // Trả về tổng tiền mới
        exit(); // Kết thúc kịch bản PHP
    }
}
?>
<?php
include("../pages/mainmenu2.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
    <link rel="stylesheet" href="../css/giohang.css">
    <style>
    /* Đặt CSS tại đây */
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

    .quantity-selector {
        display: flex;
        align-items: center;
    }

    .quantity-selector input[type="number"] {
        width: 60px;
        text-align: center;
    }

    .quantity-selector button {
        background-color: #ccc;
        color: #333;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .quantity-selector button:hover {
        background-color: #aaa;
    }
    </style>
    
</head>

<body>
    <div>
        <div class="khunggiohang1">
            <table>
            <tr>
                    <th>
                        <P>Ảnh sản phẩm</P>
                    </th>
                    <th>
                        <P style="margin-left: 300px;">Tên sản phẩm</P>
                    </th>
                    <th>
                        <P style="margin-left: 320px;">Giá</P>
                    </th>
                    <th>
                        <P style="margin-left: 350px;">Số lượng</P>
                    </th>
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

echo '<div class="quantity-selector">';
echo '<input type="number" id="quantity_' . $productId . '" name="quantity" value="' . $product['Quantity'] . '" min="1" onchange="updateQuantity(' . $productId . ', this.value)">';
echo '</div>'; // Đóng quantity-selector

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
                <div class="giohanggiatext1" id="totalPrice">
                    <?php
                    if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                        $totalPrice = 0;
                        foreach ($_SESSION['cart'] as $product) {
                            $totalPrice += $product['Price'] * $product['Quantity'];
                        }
                        echo number_format($totalPrice, 0, ',', '.') . ' ₫';
                    } else {
                        echo '0 ₫';
                    }
                    ?>
                </div>
            </div>
            <div class="khunggiohang4">
                <?php
                // Kiểm tra xem giỏ hàng có sản phẩm hay không
                if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    // Nếu có sản phẩm trong giỏ hàng, hiển thị nút "ĐẶT HÀNG" và chuyển hướng đến trang thanhtoan.php
                    echo '<a href="../pages/thanhtoan.php">';
                    echo '<p class="my-element" style="margin-top: -0px;">ĐẶT HÀNG</p>';
                    echo '</a>';
                } else {
                    // Nếu không có sản phẩm trong giỏ hàng, hiển thị thông báo
                    echo '<p class="my-element" style="margin-top: -0px;">KHÔNG CÓ SẢN PHẢM TRONG GIỎ HÀNG.</p>';
                }
                ?>
            </div>
        </div>
    </div>

    <script>
    // Function to update quantity of a product in the cart
    function updateQuantity(productId, newQuantity) {
        // Send AJAX request to update quantity
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "giohang.php?update=" + productId + "&quantity=" + newQuantity, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Update total price after successfully updating quantity
                document.getElementById("totalPrice").innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    // Function to remove product from cart
    function removeFromCart(productId) {
        // Send AJAX request to remove product from cart
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "giohang.php?remove=" + productId, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Reload the page or update the cart view as desired
                location.reload(); // Reload the page after removing the product
            }
        };
        xhr.send();
    }
    </script>
</body>

</html>

<?php
include("../pages/footer.php");
include("../pages/ontop1.php");
?>