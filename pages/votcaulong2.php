<?php
include ("connection.php");
$sql = "SELECT * FROM products";
$result = mysqli_query($conn,$sql);
$maxProducts = 4;
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
    <div class = "khungcacsanpham">
    <div class="khungsanphammoi">
    <?php
   $count = 0;
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    if($row['Status'] == 0){
    echo '<div class="sanpham">';
    echo '<a href="../pages/chitiet100zz.php"><img src="../images/'.$row['ImageURL'].'" alt="'.$row['ProductName'].'"></a>';
    echo '<div class="tenvot">';
    echo '<p class="vot">'.$row['ProductName'].'<br><br></p>';
    // Định dạng giá sản phẩm
    $formattedPrice = number_format($row['Price'],0 , ',','.'). 'vnđ';
    echo '<b class="giavot">'.$formattedPrice.' <u>đ</u></b>';
    echo '</div>';
    echo '</div>';
    $count++;
    if ($count >= $maxProducts) {
        break;
    }}
} 
mysqli_close($conn);
    ?>       
    </div>
</div>
    <?php
    include("../pages/ontop1.php");
    include("../pages/footer.php");
    ?>
</body>
</html>