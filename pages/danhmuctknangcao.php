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

    // Kiểm tra và lấy giá trị của các biến từ trang timkiemnangcao.php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['search_query']) && isset($_GET['phanloai']) && isset($_GET['thuonghieu']) && isset($_GET['price'])) {
            $search_query = $_GET['search_query'];
            $category = $_GET['phanloai'];
            $brand = $_GET['thuonghieu'];
            $price = $_GET['price'];

            // Tính tổng số sản phẩm
            $sql_count = "SELECT COUNT(*) AS total FROM products WHERE Category = '$category' AND Brand = '$brand' AND ProductName LIKE '%$search_query%' AND Price <= $price";
            $result_count = $mysqli->query($sql_count);
            $row_count = $result_count->fetch_assoc();
            $total_products = $row_count['total'];

            // Tính tổng số trang
            $total_pages = ceil($total_products / $products_per_page);

            // Thực hiện truy vấn để lấy dữ liệu sản phẩm cho trang hiện tại
            $sql = "SELECT * FROM products WHERE Category = '$category' AND Brand = '$brand' AND ProductName LIKE '%$search_query%' AND Price <= $price LIMIT $start, $products_per_page";
            $result = $mysqli->query($sql);

            $result_count->free();
        }
    }
    ?>
    <div class="khungcacsanpham">
        <div class="khungsanphammoi">
            <?php
            if (isset($result) && $result->num_rows > 0) {
                echo "<div class='khungcacsanpham'>";
                echo "<div class='row'>";
                $count = 0;
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='sanpham'>";
                    echo "<img src='../images/{$row['ImageURL']}' alt='{$row['ProductName']}'>";
                    echo "<div class='tenvot'>";
                    echo "<p class='vot'>" . $row['ProductName'] . "</p>";
                    echo "<b class='giavot'>" . number_format($row['Price']) . " <u>đ</u></b>";
                    echo "</div>";
                    echo "</div>";
                    $count++;
                    if ($count == 4) {
                        echo "</div>";
                        echo "<div class='row'>";
                        $count = 0;
                    }
                }
                echo "</div>";
                echo "</div>";
            } else {
                echo "<div class='khungcacsanpham'>";
                echo "<p>Không tìm thấy sản phẩm phù hợp.</p>";
                echo "</div>";
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
                    echo ' style="background: red; width: 10px;"';
                }
                echo '><a href="danhmuctknangcao.php?search_query=' . urlencode($search_query) . '&phanloai=' . $category . '&thuonghieu=' . $brand . '&price=' . $price . '&trang=' . $i . '">' . $i . '</a></button>';
            }
            ?>
        </div>
    </div>

    <?php
    include("../pages/footer.php");
    ?>
</body>

</html>