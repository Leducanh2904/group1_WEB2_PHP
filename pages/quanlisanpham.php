<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản lí sản phẩm</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../css/style.css" />
  </head>

  <body>
    <!-- =============== Navigation ================ -->
    

          <?php 
                include ("../pages/taskbar.php");
                ?>
      

      <!-- ========================= Main ==================== -->
      <?php 
      include ("../pages/mainadmin.php");
      ?>
     
<!-- ========================= Connection ==================== -->
<?php
// Kết nối đến cơ sở dữ liệu
include ("connection.php");
// Thực hiện truy vấn để lấy dữ liệu sản phẩm
$sql = "SELECT * FROM products";

$result = $conn->query($sql);

// Kiểm tra lỗi
if (!$result) {
    die("Lỗi: " . $conn->error); // Hiển thị thông điệp lỗi cụ thể
}

// Kiểm tra xem có dữ liệu trả về hay không


// Đóng kết nối
$conn->close();
?>

        <!-- ================ Order Details List ================= -->
        <div class="details">
          <div class="recentOrders2">
            <div class="cardHeader">
              <h2>Danh mục sản phẩm hiển thị</h2>
            </div>
            <table>
              <thead>
                <tr>
                  <td>Mã</td>
                  <td>Tên sản phẩm</td>
                  <td>Giá</td>
                  <td>Phân loại</td>
                  <td>Mô tả</td>
                  <td>Thương hiệu</td>
                  <td>Số lượng</td>
                  <td>Ảnh</td>
                  <td>Sửa</td>
                  <td>Xóa</td>
                </tr>
              </thead>
              <tbody>
              <?php
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["ProductID"] . "</td>";
    echo "<td>" . $row["ProductName"] . "</td>";
    echo "<td>" . $row["Price"] . "</td>";
    echo "<td>" . $row["Category"] . "</td>";
    echo "<td>" . $row["Description"] . "</td>";
    echo "<td>" . $row["Brand"] . "</td>";
    echo "<td>" . $row["Quantity"] . "</td>";
    echo "<td><img src='../images/" . $row["ImageURL"] . "' alt='Product Image' width='100'></td>";
    echo "<td><button id='button1' class='status inProgress'>Sửa</button></td>";
    echo "<td><button id='button1' class='status inProgress'>Xóa</button></td>";
    echo "</tr>";
}
?>

</tbody>

            </table>
            <div class="themsanpham">
              <div>
                <button id="button3" class="status4" type="button">
                  <span style="font-size: large">Thêm sản phẩm</span>
                </button>
                <div
                  id="myModal3"
                  class="modal3"
                  style="text-align: left; color: black"
                >
                  <!-- Modal content -->
                  <?php
                  include ("../pages/themsp.php");
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- ====== ionicons ======= -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</php>
