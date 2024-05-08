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

$sql = "SELECT * FROM products WHERE Category = 'Phụ kiện' ORDER BY ProductID LIMIT $begin, 20";
$result = mysqli_query($conn, $sql);
$count = 0;
$maxProducts = 4;
?>


<!DOCTYPE html>
<html>
<head>
    <title>Phụ kiện cầu lông</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="../css/detail.css">
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
    <script src="../js/function.js"></script>
</head>

<body>
    <?php
       include("../pages/mainmenu1.php");
    ?>
   
    <div class="khungcacsanpham">
        <div class="khungsanphammoi">
            <?php
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                if ($row['delPro'] == 1){
                if ($row['Category'] === 'Phụ kiện') {
                    if ($count < $maxProducts) { 
                echo '<div class="sanpham">';
                echo '<a href="../pages/chitiet100zz1.php?id='.$row['ProductID'].'"><img src="../images/'.$row['ImageURL'].'" alt="'.$row['ProductName'].'"></a>';
                echo '<div class="tenvot">';
                echo '<p class="vot">'.$row['ProductName'].'<br><br></p>';
                $formattedPrice = number_format($row['Price'], 0, ',', '.');
                echo '<b class="giavot">'.$formattedPrice.' <u>đ</u></b>';
                echo '</div>';
                echo '</div>';
                $count++;
            } else 
            {
                break;
            }
        }
    }
    }
            ?>
        </div>
    </div>
     <div class="footer_end">
    <div class ="ctrang">
        <?php 
        include("connection.php");
        $sql_trang = mysqli_query($conn,"SELECT * FROM products where category ='Phụ kiện'");
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
            echo '><a href="votcaulong1.php?trang=' . $i . '">' . $i . '</a></button>';
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
