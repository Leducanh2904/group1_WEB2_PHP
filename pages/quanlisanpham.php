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
  include("../pages/taskbar.php");
  ?>


  <!-- ========================= Main ==================== -->
  <?php
  include("../pages/mainadmin.php");
  ?>

  <!-- ========================= Connection ==================== -->
  <?php
  // Kết nối đến cơ sở dữ liệu
  include("connection.php");
  // Thực hiện truy vấn để lấy dữ liệu sản phẩm
  $sql = "SELECT * FROM products";

  $result = mysqli_query($conn, $sql);

  // Kiểm tra lỗi
  if (!$result) {
    die("Lỗi: " . $conn->error); // Hiển thị thông điệp lỗi cụ thể
  }

  // Kiểm tra xem có dữ liệu trả về hay không

  function delProduct($proID)
  {
    include('connection.php');
    $sql1 = "UPDATE products SET delPro = '0' WHERE ProductID = '$proID'";
    $result1 = mysqli_query($conn, $sql1);
    echo "
        <script>
            alert ('Xóa sản phẩm thành công');
        </script>";
    echo " <meta http-equiv='refresh' content='0'>";
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete'])) {
      delProduct($_POST['delete']);
    }
  }
  if (isset($_POST['submit3'])) {
    $proID = $_POST['proID'];
    $proName = $_POST['proName'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $brand = $_POST['brand'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $sql3 = "INSERT INTO products (ProductID, ProductName, Price, Category, Brand, Description, ImageURL) 
            VALUES ('$proID', '$proName', '$price', '$type', '$brand', '$description', '$image')";
    $result3 = mysqli_query($conn, $sql3);
    //echo " <meta http-equiv='refresh' content='0'>";
  }
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
            <td style="width: 20%">Tên sản phẩm</td>
            <td>Giá</td>
            <td>Phân loại</td>
            <td style="width: 25%">Mô tả</td>
            <td>Thương hiệu</td>
            <td>Số lượng</td>
            <td style=" text-align: center">Ảnh</td>
            <td style="width: 7%">Tình trạng</td>
            <td style=" text-align: center" colspan="2">Tính năng</td>

          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = $result->fetch_assoc()) {
            if ($row['delPro'] == 1) {
              echo "<tr>";
              echo "<td>" . $row["ProductID"] . "</td>";
              echo "<td>" . $row["ProductName"] . "</td>";
              echo "<td>" . $row["Price"] . "</td>";
              echo "<td>" . $row["Category"] . "</td>";
              echo "<td>" . $row["Description"] . "</td>";
              echo "<td>" . $row["Brand"] . "</td>";
              echo "<td>" . $row["Quantity"] . "</td>";
              echo "<td><img src='../images/" . $row["ImageURL"] . "' alt='Product Image' width='100'></td>";
              if ($row['Status'] == 1) {
                echo "<td>Còn hàng</td> ";
              } else {
                echo "<td>Hết hàng</td>";
              }
              echo "
              <form action='chinhsuasp.php' method='post'>
                <td><button type='submit' name='change' value='" . $row["ProductID"] . "' id='button1' class='status inProgress'>Sửa</button></td>
              </form>";
              echo "
                <form method='post'>
                  <td><button id='button1' type='submit' name='delete' value='" . $row["ProductID"] . "' class='status inProgress'>Xóa</button></td>
                </form>";
              echo "</tr>";
            }
          }
          ?>

        </tbody>

      </table>
      <div class="themsanpham">
        <div>
          <button id="button3" class="status4" type="button">
            <span style="font-size: large">Thêm sản phẩm</span>
          </button>
          <div id="myModal3" class="modal3" style="text-align: left; color: black">
            <!-- Modal content -->
            <div class="modal-content3">
              <div class="modal-header3">
                <span class="close3">&times;</span>
                <h2 style="text-align: center">Thêm sản phẩm</h2>
              </div>
              <div class="modal-body3">
                <div class="row3">
                  <div class="column3" style="margin-right: -20px; margin-left: 10px">
                    <form name="frm" method="post" onsubmit="alert('Thêm thành công')">
                      <div>
                        <p class="title1">Tên sản phẩm</p>
                        <input class="tsp" type="text" name="proName" required />
                        <p class="title1">Mã sản phẩm</p>
                        <input class="tsp" type="text" name="proID" required />
                        <p class="title1">Giá</p>
                        <input class="tsp" type="text" name="price" style="margin-bottom: -10px" required />
                      </div>
                      <div style="
                                  margin-top: 30px;
                                  border-top: 1px dashed rgb(238, 227, 227);
                                ">
                        <div style="margin-top: 20px">
                          <p class="title1">Phân loại</p>
                          <select name="type" id="loaisanpham" class="tsp">
                            <option value="Vợt">Vợt cầu lông</option>
                            <option value="Giày">Giày cầu lông</option>
                            <option value="Quần Áo">Quần áo cầu lông</option>
                          </select>
                          <p class="title1">Thương hiệu</p>
                          <select class="tsp" name="brand" required>
                            <option value="Yonex">Yonex</option>
                            <option value="Lining">Lining</option>
                            <option value="Victor">Victor</option>
                            <option value="Apacs">Apacs</option>
                          </select>
                        </div>
                      </div>
                      <br />
                  </div>
                  <div class="column3" style="
                            background-color: white;
                            border-left: 1px dashed rgb(238, 228, 228);
                          ">
                    <div style="margin-left: 30px">
                      <p>Mô tả sản phẩm</p>
                      <textarea rows="10" cols="50" name="description" placeholder="Mô tả chi tiết sản phẩm: "></textarea>
                      <br />
                      <br />
                      <div style="margin-top: 28px">
                        <p>Thêm hình ảnh</p>
                        <input class="tsp" type="file" name="image" accept="image/*" id="themsanphamkhungcon2" onchange="displayImage1(this)" required />
                        <br />
                        <img id="previewImage1" src="#" alt="Hiển thị ảnh tại đây" style="max-width: 200px; max-height: 200px" />
                        <br>
                        <div id="delBtn1" style="display: none;">
                          <button class="status1 inProgress" type="button" onclick="deleteImg('delBtn1','previewImage1')">Xóa hình ảnh</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <script>
                    function deleteImg(delBtn, previewImage, previewImage3) {
                      document.getElementById(previewImage).src = "#";
                      document.getElementById(previewImage3).src = "#";
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
              <div class="modal-footer" style="text-align: center">
                <button class="saveBtn" type="submit" name="submit3" style="width: 200px;">
                  Thêm sản phẩm
                </button>
                </form>
              </div>
            </div>
            <script>
              var modal1 = document.getElementById("myModal3");

              // Get the button that opens the modal
              var btn1 = document.getElementById("button3");

              // Get the <span> element that closes the modal
              var span1 = document.getElementsByClassName("close3")[0];

              // When the user clicks the button, open the modal
              btn1.onclick = function() {
                modal1.style.display = "block";
              };

              // When the user clicks on <span> (x), close the modal
              span1.onclick = function() {
                modal1.style.display = "none";
              };

              // When the user clicks anywhere outside of the modal, close it
              window.onclick = function(event) {
                if (event.target == modal1) {
                  modal1.style.display = "none";
                }
              };
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <!-- ====== ionicons ======= -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</php>