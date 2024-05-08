<?php
include("connection.php");
if (isset($_GET['trang']))
{
    $page = $_GET['trang'];
}
else {
    $page = '';
}
if ($page == '' || $page == '1')
{
    $begin = 0;
}
else 
{
    $begin = ($page*4) - 4;
}

$sql = "SELECT * FROM products WHERE Category = 'Quần áo' order by ProductID DESC limit $begin,5";
$result = mysqli_query($conn, $sql);
$count = 0;
$maxProducts = 4;

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quần áo cầu lông</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="../css/detail.css">
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
    <link rel="stylesheet" href="../css/carousel.css">
    <script src="../js/function.js"></script>
</head>

<body onload="changAccountName()">
<?php
   include ("../pages/mainmenu1.php");
?>
 <div class="khungcacsanpham">
        <div class="khungsanphammoi">
            <?php
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                if ($row['Category'] === 'Quần áo') {
                    if ($row['delPro'] == 1){
                    if ($count < $maxProducts) { 
                echo '<div class="sanpham">';
                echo '<a href="../pages/chitiet100zz.php?id='.$row['ProductID'].'"><img src="../images/'.$row['ImageURL'].'" alt="'.$row['ProductName'].'"></a>';
                echo '<div class="tenvot">';
                echo '<p class="vot">'.$row['ProductName'].'<br><br></p>';
                $formattedPrice = number_format($row['Price'], 0, ',', '.') ;
                echo '<b class="giavot">'.$formattedPrice.' <u>đ</u></b>';
                echo '</div>';
                echo '</div>';
                $count++;
            } else 
            {
                break;
            }
        }}
    }
            ?>
        </div>
    </div>

    <div class="footer_end">
    <div class ="ctrang">
        <?php 
        include("connection.php");
        $sql_trang = mysqli_query($conn,"SELECT * FROM products where Category ='Quần áo'");
        $row_count = mysqli_num_rows($sql_trang);
        $trang = ceil($row_count/4);
        ?>
        <?php
        // Tạo nút chuyển trang
        for ($i = 1; $i <= $trang; $i++) {
            echo '<button class="chuyentrang" ';
            if ($i == $page) {
                echo 'style="background: red;"';
            }
            echo '><a href="quanaocaulong1.php?trang=' . $i . '">' . $i . '</a></button>';
        }
        
        ?>
    </div>
</div>

        <?php
        include ("../pages/footer.php");
        include ("../pages/ontop1.php");
        ?>
</body>
</html>