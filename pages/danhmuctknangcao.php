<!DOCTYPE html>
<html>

<head>
    <title>Tìm kiếm nâng cao</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="../css/detail.css">
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
</head>

<body onload="changAccountName()">
    <?php
    include("../admin/config.php");
    include("../pages/mainmenu2.php");
    $products_per_page = 4;
    if (isset($_GET['trang'])) {
        $current_page = $_GET['trang'];
    } else {
        $current_page = 1;
    }
    $start = ($current_page - 1) * $products_per_page;
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['search_query']) && isset($_GET['phanloai']) && isset($_GET['thuonghieu']) && isset($_GET['price_min']) && isset($_GET['price_max'])) {
            $search_query = $_GET['search_query'];
            $category = $_GET['phanloai'];
            $brand = $_GET['thuonghieu'];
            $price_min = $_GET['price_min'];
            $price_max = $_GET['price_max'];
            $query = "SELECT * FROM products WHERE ProductName LIKE '%$search_query%'";
            if ($category !== 'null') {
                $query .= " AND Category = '$category'";
            }
            if ($brand !== 'null') {
                $query .= " AND Brand = '$brand'";
            }
            $query .= " AND Price >= $price_min AND Price <= $price_max LIMIT $start, $products_per_page";
            $result = $mysqli->query($query);
            $sql_count = "SELECT COUNT(*) AS total FROM products WHERE ProductName LIKE '%$search_query%'";
            if ($category !== 'null') {
                $sql_count .= " AND Category = '$category'";
            }

            if ($brand !== 'null') {
                $sql_count .= " AND Brand = '$brand'";
            }
            $sql_count .= " AND Price >= $price_min AND Price <= $price_max";
            $result_count = $mysqli->query($sql_count);
            $row_count = $result_count->fetch_assoc();
            $total_products = $row_count['total'];
            $total_pages = ceil($total_products / $products_per_page);

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
                    if ($row['delPro']== 1){
                    echo "<div class='sanpham'>";
                    echo '<a href="../pages/chitiet100zz.php?id='.$row['ProductID'].'"><img src="../images/'.$row['ImageURL'].'" alt="'.$row['ProductName'].'"></a>';
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
    <div class="footer_end">
        <div class="ctrang">
            <?php
            for ($i = 1; $i <= $total_pages; $i++) {
                echo '<button class="chuyentrang"';
                if ($i == $current_page) {
                    echo ' style="background: red;"';
                }
                echo '><a href="danhmuctknangcao.php?search_query=' . urlencode($search_query) . '&phanloai=' . $category . '&thuonghieu=' . $brand . '&price_min=' . $price_min . '&price_max=' . $price_max . '&trang=' . $i . '">' . $i . '</a></button>';
            }
            ?>
        </div>
    </div>

    <?php
    include("../pages/footer.php");
    ?>
</body>

</html>