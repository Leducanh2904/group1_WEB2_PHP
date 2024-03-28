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
    <?php
    include("../admin/config.php");
    include("../pages/mainmenu1.php");
    ?>
    <div style="font-size: xx-large; margin-left: 70px; margin-top: 35px; margin-bottom: 30px;">
        &nbsp; <a href="../pages/timkiemnangcao.php" style="font-size: large; color: blue;">Tìm kiếm nâng cao</a>
    </div>
    <div class="khungcacsanpham">
        <div class="khungsanphammoi">
            <?php
        if (isset($_POST['search_query'])) {
            $search_query = $_POST['search_query'];
            $sql = "SELECT * FROM products WHERE ProductName LIKE '%$search_query%'";
            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
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
            $result->free();
        }
        ?>
        </div>
    </div>
    <!-- ....... -->

    </div>
    <div class="ctrang">
        <button class="chuyentrang" onclick="window.location.href = '../pages/danhmuctimkiem.php '">1</button>
        <button class="chuyentrang" onclick="window.location.href = '../pages/danhmuctimkiem1.php '">2</button>
    </div>




    <div>
        <style>

        </style>
    </div>
    </div>
    <div>
        <?php
    include ("../pages/footer.php");
    include ("../pages/ontop1.php");
    ?>
    </div>
</body>

</html>