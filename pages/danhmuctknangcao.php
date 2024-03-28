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
    <div class="khungcacsanpham">
        <div class="khungsanphammoi">
            <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['search_query']) && isset($_GET['phanloai']) && isset($_GET['thuonghieu']) && isset($_GET['price'])) {
            $search_query = $_GET['search_query'];
            $category = $_GET['phanloai'];
            $brand = $_GET['thuonghieu'];
            $price = $_GET['price'];
            $sql = "SELECT * FROM products WHERE Category = '$category' AND Brand = '$brand' AND ProductName LIKE '%$search_query%' AND Price <= $price";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
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
            $result->free();
        }
    }

    ?>
        </div>
    </div>


    <?php
    include("../pages/footer.php");
    ?>
</body>

</html>