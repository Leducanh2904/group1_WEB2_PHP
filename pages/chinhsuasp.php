<?php
include('connection.php');
$proID = $_POST['change'];
$sql1 = "SELECT * FROM products WHERE ProductID = '$proID'";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$image = $row['ImageURL'];

echo $image;
if (isset($_POST['submit1'])) {
    $proID1 = $_POST['proID'];
    $proName = $_POST['proName'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $brand = $_POST['brand'];
    $description = $_POST['description'];
    if(isset($_POST['image']) && ($_POST['image'] != "")){
        $image = $_POST['image'];
        echo 'true image';
        $sql3 = "UPDATE products 
            SET ProductName = '$proName', Price = '$price', Category = '$type', Brand = '$brand', Description = '$description', ImageURL = '$image'
            WHERE ProductID = '$proID1' ";
    }
    else{
        $sql3 = "UPDATE products 
            SET ProductName = '$proName', Price = '$price', Category = '$type', Brand = '$brand', Description = '$description'
            WHERE ProductID = '$proID1' ";
        echo 'false';
    }
    $result3 = mysqli_query($conn, $sql3);
    header('Location: quanlisanpham.php');
  }
  mysqli_close($conn)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa tài khoản</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../css/style.css">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <?php
    include("../pages/taskbar.php");
    ?>
    <!-- ========================= Main ==================== -->
    <?php
    include("../pages/mainadmin.php");
    ?>

    <!-- ================ chinh sua tai day ================= -->

    <div class="div1">
        <!-- Bảng chỉnh sửa thông tin mới -->
        <div class="table-container">
            <h2>Thông tin cần cập nhật</h2> <br>
            <form name="frm" method="post" onsubmit="alert('Chỉnh sửa thành công')">
                <div>
                    <p class="title1">Tên sản phẩm</p>
                    <input class="tsp" type="text" name="proName" value="<?php echo $row['ProductName']?>" required />
                    <p class="title1">Mã sản phẩm</p>
                    <input class="tsp" type="text" name="proID" value="<?php echo $row['ProductID']?>" readonly />
                    <p class="title1">Giá</p>
                    <input class="tsp" type="text" name="price" value="<?php echo $row['Price']?>" style="margin-bottom: -10px" required />
                </div>
                <div style="
                                  margin-top: 30px;
                                  
                                ">
                    <div style="margin-top: 20px">
                        <p class="title1">Phân loại</p>
                        <select name="type" id="loaisanpham" class="tsp">
                            <option value="Vợt" <?php
                                if($row['Category'] == 'Vợt'){
                                    echo 'selected';
                                }
                            ?>>Vợt cầu lông</option>
                            <option value="Giày" <?php
                                if($row['Category'] == 'Giày'){
                                    echo 'selected';
                                }
                            ?>>Giày cầu lông</option>
                            <option value="Quần Áo" <?php
                                if($row['Category'] == 'Quần áo'){
                                    echo 'selected';
                                }
                            ?>>Quần áo cầu lông</option>
                        </select>
                        <p class="title1">Thương hiệu</p>
                        <select class="tsp" name="brand" required>
                            <option value="Yonex" <?php
                                if($row['Brand'] == 'Yonex'){
                                    echo 'selected';
                                }
                            ?>>Yonex</option>
                            <option value="Lining" <?php
                                if($row['Brand'] == 'Lining'){
                                    echo 'selected';
                                }
                            ?>>Lining</option>
                            <option value="Victor" <?php
                                if($row['Brand'] == 'Victor'){
                                    echo 'selected';
                                }
                            ?>>Victor</option>
                            <option value="Apacs" <?php
                                if($row['Brand'] == 'Apacs'){
                                    echo 'selected';
                                }
                            ?>>Apacs</option>
                        </select>
                    </div>
                </div>
                <br />
        </div>
        <div class="column3" style="
                            background-color: white;
                           
                          ">
            <div class="table-container" style="margin-left: 30px">
                <p>Mô tả sản phẩm</p>
                <textarea rows="10" cols="40" name="description" placeholder="Mô tả chi tiết sản phẩm: "><?php echo $row['Description']?></textarea>
                <br />
                <br />
                <div style="margin-top: 5%; text-align:center">
                    <p>Thêm hình ảnh</p>
                    <input type="file" name="image" accept="image/*" id="themsanphamkhungcon2" onchange="displayImage1(this)" />
                    <br />
                    <img id="previewImage1" src="../images/<?php echo $row['ImageURL']?>" alt="Hiển thị ảnh tại đây" style="max-width: 200px; max-height: 200px" />
                    <br>
                    <br>
                    <button class="saveBtn1" type="submit" name="submit1"> Lưu chỉnh sửa </button>
                </div>
            </div>
        </div>
        <script>
            function deleteImg(delBtn, previewImage, themsanphamkhungcon2) {
                document.getElementById(themsanphamkhungcon2).value = "";
                document.getElementById(previewImage).src = "#";
                document.getElementById(delBtn).style.display = "none";
            }

            function displayImage1(input) {
                var file = input.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById("previewImage1").src =
                            e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
                document.getElementById("delBtn1").style.display = "inline";
            }
        </script>
    </div>
    </div>
        </form>
    </div>


    <style>
        .div1 {
            display: flex;
            justify-content: space-between;
            width: 1000px;
            margin: 20px auto;
        }

        .table-container {
            width: 350px;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            margin-top: 70px;
        }

        .img {
            margin: auto;
            width: 30px;
            margin-bottom: 200px;
            margin-left: 100px;

        }


        .div1 label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        .div1 input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        h2 {
            text-align: center;
            color: #333;
        }
    </style>
</body>

</html>