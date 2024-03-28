<?php
include ("connection.php");
$sql = "SELECT * FROM products";
$result = mysqli_query($conn,$sql);
$maxProducts = 4;

// Giả sử $_GET['page'] chứa số trang hiện tại hoặc offset
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $maxProducts;
// Sửa truy vấn SQL của bạn để sử dụng offset
$sql = "SELECT * FROM products LIMIT $offset, $maxProducts";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Vợt cầu lông</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="../css/detail.css">
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
    <script src="../js/function.js"></script>
</head>

<body onload="changAccountName()">
   <?php
   include("../pages/mainmenu1.php");
   ?>
   
    <div class="khungcacsanpham">
        <div class="khungsanphammoi">
            <?php
            $count = 0;
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                // Hiển thị thông tin sản phẩm  
                if($row['Status'] == 1){
                    echo '<div class="sanpham">';
                    echo '<a href="../pages/chitiet100zz.php?id='.$row['ProductID'].'"><img src="../images/'.$row['ImageURL'].'" alt="'.$row['ProductName'].'"></a>';
                    echo '<div class="tenvot">';
                    echo '<p class="vot">'.$row['ProductName'].'<br><br></p>';
                    $formattedPrice = number_format($row['Price'], 6, ',', ',');
                    echo '<b class="giavot">'.$formattedPrice.' <u>đ</u></b>';
                    echo '</div>';
                    echo '</div>';
                    $count++;
                    if ($count >= $maxProducts) {
                        break;
                    }
                }
            } 
            mysqli_close($conn);
            ?>
        </div>
    </div>
    <?php
    include("../pages/footer.php");
    include("../pages/ontop1.php");
    ?>
</body>
</html>
