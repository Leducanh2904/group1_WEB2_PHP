<?php
include("../admin/config.php");
include("../pages/mainmenu1.php");

// Số sản phẩm hiển thị trên mỗi trang
$products_per_page = 4;

// Kiểm tra và lấy giá trị của biến trang hiện tại
if (isset($_GET['trang'])) {
    $current_page = $_GET['trang'];
} else {
    $current_page = 1;
}

// Tính vị trí bắt đầu của sản phẩm trong câu truy vấn
$start = ($current_page - 1) * $products_per_page;

// Kiểm tra xem từ khóa tìm kiếm đã được gửi từ form GET hay không
if (isset($_GET['search_query'])) {
    $search_query = $_GET['search_query'];

    // Tính tổng số sản phẩm
    $sql_count = "SELECT COUNT(*) AS total FROM products WHERE ProductName LIKE '%$search_query%'";
    $result_count = $mysqli->query($sql_count);
    $row_count = $result_count->fetch_assoc();
    $total_products = $row_count['total'];

    // Tính tổng số trang
    $total_pages = ceil($total_products / $products_per_page);

    // Thực hiện truy vấn để lấy dữ liệu sản phẩm cho trang hiện tại
    $sql = "SELECT * FROM products WHERE ProductName LIKE '%$search_query%' LIMIT $start, $products_per_page";
    $result = $mysqli->query($sql);
} else {
    // Nếu không có từ khóa tìm kiếm, không hiển thị sản phẩm nào
    $total_products = 0;
    $total_pages = 1;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Danh mục tìm kiếm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="../css/detail.css">
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
    <link rel="stylesheet" href="../css/carousel.css">
    <script src="../js/function.js"></script>
</head>

<body onload="changAccountName()">
    <div style="font-size: xx-large; margin-left: 70px; margin-top: 35px; margin-bottom: 30px;">
        &nbsp; <a href="../pages/timkiemnangcao.php" style="font-size: large; color: blue;">Tìm kiếm nâng cao</a>
    </div>
    <div class="khungcacsanpham">
        <div class="khungsanphammoi">
            <?php
            if ($total_products > 0 && isset($result) && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='sanpham'>";
                    echo "<img src='../images/{$row['ImageURL']}' alt='{$row['ProductName']}'>";
                    echo "<div class='tenvot'>";
                    echo "<p class='vot'>" . $row['ProductName'] . "</p>";
                    echo "<b class='giavot'>" . number_format($row['Price']) . " <u>đ</u></b>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "Không có sản phẩm nào phù hợp với từ khóa tìm kiếm.";
            }
            ?>
        </div>
    </div>

    <!-- Phân trang -->
    <div class="footer_end">
        <div class="ctrang">
            <?php
            // Hiển thị nút chuyển trang
            for ($i = 1; $i <= $total_pages; $i++) {
                echo '<button class="chuyentrang"';
                if ($i == $current_page) {
                    echo ' style="background: red;"';
                }
                echo '><a href="danhmuctimkiem.php?search_query=' . urlencode($search_query) . '&trang=' . $i . '">' . $i . '</a></button>';
            }
            ?>
        </div>
    </div>

    <?php
    include("../pages/footer.php");
    include("../pages/ontop1.php");
    ?>
</body>

</html>