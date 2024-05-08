<div>
        <p class="text1">
            Sản phẩm mới
        </p>
        <div class="khungsanphammoi">
            <a href="../pages/votcaulong1.php"><p class="text2">
                Vợt cầu lông
            </p>
        </a>
        <div class="khungsanphammoi1">
<?php
include("connection.php");
// Thực hiện truy vấn để lấy danh sách sản phẩm
$sql = "SELECT * FROM products WHERE Category = 'Vợt'";
$result = mysqli_query($conn, $sql);

// Kiểm tra xem có dữ liệu trả về hay không
if (mysqli_num_rows($result) > 0) {
    // Đếm số sản phẩm đã hiển thị
    $count = 0;

    // Duyệt qua từng dòng dữ liệu và tạo HTML cho mỗi sản phẩm
    while ($row = mysqli_fetch_assoc($result)) {
        // Hiển thị chỉ 4 sản phẩm đầu tiên
        if ($row['delPro'] == 1){
        if ($count < 4) {
            
            ?>
            <div class="container">
                <img src="../images/<?php echo $row['ImageURL']; ?>" alt="<?php echo $row['ProductName']; ?>" class="image">
                <div class="middle">
                    <div><a href="../pages/chitiet100zz.php?id=<?php echo $row['ProductID']; ?>" class="textPop">Mua ngay</a></div>
                </div>  
            </div>
            <?php
            // Tăng biến đếm lên sau khi hiển thị sản phẩm
            $count++;
        } else {
            // Kết thúc vòng lặp khi đã hiển thị đủ 4 sản phẩm
            break;
        }
    }
}
} else {
    // Xử lý khi không có sản phẩm nào được tìm thấy
    echo "Không có sản phẩm nào.";
}
?>
</div>

        <div class="khungsanphammoi">
            <a href="../pages/giaycaulong1.php"><p class="text2">
                Giày cầu lông
            </p></a>
            <div class="khungsanphammoi1">
            <?php
            $sql = "SELECT * FROM products WHERE Category = 'Giày'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
    // Đếm số sản phẩm đã hiển thị
    $count = 0;

    // Duyệt qua từng dòng dữ liệu và tạo HTML cho mỗi sản phẩm
    while ($row = mysqli_fetch_assoc($result)) {
        // Hiển thị chỉ 4 sản phẩm đầu tiên
        if ($count < 4) {
            ?>
            <div class="container">
                <img src="../images/<?php echo $row['ImageURL']; ?>" alt="<?php echo $row['ProductName']; ?>" class="image">
                <div class="middle">
                    <div><a href="../pages/chitiet100zz.php?id=<?php echo $row['ProductID']; ?>" class="textPop">Mua ngay</a></div>
                </div>  
            </div>
            <?php
            // Tăng biến đếm lên sau khi hiển thị sản phẩm
            $count++;
        } else {
            // Kết thúc vòng lặp khi đã hiển thị đủ 4 sản phẩm
            break;
        }
    }
} else {
    // Xử lý khi không có sản phẩm nào được tìm thấy
    echo "Không có sản phẩm nào.";
}
?>
        </div>
        <div class="khungsanphammoi">
            <a href="../pages/quanaocaulong1.php"><p class="text2">
                Quần áo cầu lông
            </p></a>
            <div class="khungsanphammoi1">
            <?php
            $sql = "SELECT * FROM products WHERE Category = 'Quần áo'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
    // Đếm số sản phẩm đã hiển thị
    $count = 0;

    // Duyệt qua từng dòng dữ liệu và tạo HTML cho mỗi sản phẩm
    while ($row = mysqli_fetch_assoc($result)) {
        // Hiển thị chỉ 4 sản phẩm đầu tiên
        if ($count < 4) {
            ?>
            <div class="container">
                <img src="../images/<?php echo $row['ImageURL']; ?>" alt="<?php echo $row['ProductName']; ?>" class="image">
                <div class="middle">
                    <div><a href="../pages/chitiet100zz.php?id=<?php echo $row['ProductID']; ?>" class="textPop">Mua ngay</a></div>
                </div>  
            </div>
            <?php
            // Tăng biến đếm lên sau khi hiển thị sản phẩm
            $count++;
        } else {
            // Kết thúc vòng lặp khi đã hiển thị đủ 4 sản phẩm
            break;
        }
    }
} else {
    // Xử lý khi không có sản phẩm nào được tìm thấy
    echo "Không có sản phẩm nào.";
}
?>
        </div>
        <p class="text1">
            <img src="../images/saleoff.png" alt="">
        </p>
        <div class="saleoff">
            <img src="../images/Saleoff1.jpg" alt="sale1">
            <img src="../images/Saleoff2.jpg" alt="sale2">
            <img src="../images/Saleoff3.jpg" alt="sale3">
        </div>
        <p class="text1">
           <img src="../images/tatcasanpham.png" style="margin-left: 85px;">
        </p>
        <div class="sanphamcaulong">
          
             <a href="../pages/votcaulong1.php" target="_blank"> 
            <div class="btn"> 
                
                <img src="../images/Sanphamvotcaulong.jpg" alt="ảnh vọt cầu lông"  > 
            </div>
             </a> 
             <a href="../pages/giaycaulong1.php" target="_blank"> 
            <div class="btn">
                <img src="../images/Sanphamgiaycaulonng.jpg" alt="ảnh giày cầu lông">
            </div>
             </a>
             <a href="../pages/quanaocaulong1.php" target="_blank">
            <div class="btn">
                <img src="../images/Sanphamaocaulong.jpg" alt="ảnh áo cầu lông">
            </div>
            </a>
            <a href="../pages/quanaocaulong1.php"target="_blank">
            <div class="btn">
                <img src="../images/Sanphamvaycaulong.jpg" alt="ảnh váy cầu lông">
            </div>
        </a>
       
        </div>
    </div>