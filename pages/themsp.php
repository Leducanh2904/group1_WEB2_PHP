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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten_sanpham = $_POST['ten_sanpham'];
    $ma_sanpham = $_POST['ma_sanpham'];
    $gia = $_POST['gia'];
    $mo_ta = $_POST['mo_ta'];

    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO ten_bang (ten_sanpham, ma_sanpham, gia, mo_ta) VALUES ('$ten_sanpham', '$ma_sanpham', '$gia', '$mo_ta')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Thêm sản phẩm thành công');</script>";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}
?>

<div class="modal-content3">
                    <div class="modal-header3">
                      <span class="close3">&times;</span>
                      <h2 style="text-align: center">Thêm sản phẩm</h2>
                    </div>
                    <div class="modal-body3">
                      <div class="row3">
                        <div
                          class="column3"
                          style="margin-right: -20px; margin-left: 10px"
                        >
                          <form name="frm" onsubmit="alert('Thêm thành công')">
                            <div>
                                <p class="title1">Tên sản phẩm</p>
                                <input
                                  class="tsp"
                                  type="text"
                                  required
                                />
                                <p class="title1">Mã sản phẩm</p>
                                <input class="tsp" type="text" required />
                                <p class="title1">Giá</p>
                                <input
                                  class="tsp"
                                  type="text"
                                  style="margin-bottom: -10px"
                                  required
                                />
                              </div>
                              <div
                                 style="
                                  margin-top: 30px;
                                  border-top: 1px dashed rgb(238, 227, 227);
                                "
                              >
                                <div style="margin-top: 20px">
                                  <p class="title1">Phân loại</p>
                                  <select name="loaisanpham" id="loaisanpham" class="tsp" onchange="changeSize('loaisanpham','sizeVot','sizeGiay','sizeQuanAo','sizeBalo')">
                                    <option value="vot">Vợt cầu lông</option>
                                    <option value="giay">Giày cầu lông</option>
                                    <option value="quanao">Quần áo cầu lông</option>
                                    <option value="balo">Balo cầu lông</option>
                                    <option value="phukien">Phụ kiện cầu lông</option>
                                  </select>
                                  <p class="title1">Thương hiệu</p>
                                  <select class="tsp" required>
                                    <option value="Yonex">Yonex</option>
                                    <option value="Lining">Lining</option>
                                    <option value="Victor">Victor</option>
                                    <option value="Apacs">Apacs</option>
                                  </select>
                                 <div class= "Size_Vot">Chọn size: </div> 
                                 <div class ="SuaSize" date-value= "2U">
                                 <input type="radio" name="size" value="2U">
                                  <label for="Size 2U">2U</label>
                                 </div>
                                 <div class ="SuaSize" date-value= "3U">
                                 <input type="radio" name="size" value="3U">
                                  <label for="Size 3U">3U</label>
                                 </div>
                                 <div class ="SuaSize" date-value= "4U">
                                 <input type="radio" name="size" value="4U">
                                  <label for="Size 4U">4U</label>
                                 </div>
                                 <div class ="SuaSize" date-value= "5U">
                                 <input type="radio" name="size" value="5U">
                                  <label for="Size 5U">5U</label>
                                 </div>
                                  <input type="number" name="sizeGiay" id="sizeGiay" class="tsp"  style="display: none;" min="36" max="48"  value="36" required>
                                  <select class="tsp" name="sizeQuanAo" id="sizeQuanAo" style="display: none;" required>
                                    <option value="Yonex">S</option>
                                    <option value="Lining">M</option>
                                    <option value="Victor">L</option>
                                    <option value="Apacs">XL</option>
                                  </select>
                                  <div style="margin-bottom: 10px;">
                                    <span id="sizeBalo" style="display: none;"> &nbsp;&nbsp;&nbsp; Free Size</span>
                                  </div>
                                  
                                  <p class="title1">Số lượng</p>
                                  <input type="number" class="tsp" required>
                                  <script>
                                    function changeSize(loaisanpham,vot,giay,quanao,balo){
                                        if(document.getElementById(loaisanpham).value == "vot"){
                                            document.getElementById(vot).style.display="inline";
                                            document.getElementById(giay).style.display="none";
                                            document.getElementById(quanao).style.display="none";
                                            document.getElementById(balo).style.display="none";
                                        }
                                        else if(document.getElementById(loaisanpham).value == "giay"){
                                            document.getElementById(vot).style.display="none";
                                            document.getElementById(giay).style.display="inline";
                                            document.getElementById(quanao).style.display="none";
                                            document.getElementById(balo).style.display="none";
                                            
                                        }
                                        else if(document.getElementById(loaisanpham).value == "quanao"){
                                            document.getElementById(vot).style.display="none";
                                            document.getElementById(giay).style.display="none";
                                            document.getElementById(quanao).style.display="inline";
                                            document.getElementById(balo).style.display="none";
                                        }
                                        else if(document.getElementById(loaisanpham).value == "balo"){
                                            document.getElementById(vot).style.display="none";
                                            document.getElementById(giay).style.display="none";
                                            document.getElementById(quanao).style.display="none";
                                            document.getElementById(balo).style.display="inline";
                                        }
                                        else{
                                            document.getElementById(vot).style.display="none";
                                            document.getElementById(giay).style.display="none";
                                            document.getElementById(quanao).style.display="none";
                                            document.getElementById(balo).style.display="inline";
                                        }
                                    }
                                  </script>
                                </div>
                              </div>
                              <br />
                          
                        </div>
                        <div
                          class="column3"
                          style="
                            background-color: white;
                            border-left: 1px dashed rgb(238, 228, 228);
                          "
                        >
                          <div style="margin-left: 30px">
                            <p>Mô tả sản phẩm</p>
                            <textarea
                              rows="10"
                              cols="50"
                              placeholder="Mô tả chi tiết sản phẩm: "
                            ></textarea
                            >
                            <br />
                            <br />
                            <div style="margin-top: 28px">
                              <p>Thêm hình ảnh</p>
                              <input
                                class="tsp"
                                type="file"
                                accept="image/*"
                                id="themsanphamkhungcon2"
                                onchange="displayImage1(this)"
                                required
                              />
                              <br />
                              <img
                                id="previewImage1"
                                src="#"
                                alt="Hiển thị ảnh tại đây"
                                style="max-width: 200px; max-height: 200px"
                              />
                              <br>
                              <div id="delBtn1" style="display: none;">
                                <button class="status1 inProgress"  type="button" onclick="deleteImg('delBtn1','previewImage1')">Xóa hình ảnh</button>
                            </div>
                            </div>
                          </div>
                        </div>
                        <script>
                            function displayImage1(input) {
                              var file = input.files[0];
                              if (file) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                  document.getElementById("previewImage1").src =
                                    e.target.result;
                                };
                                reader.readAsDataURL(file);
                              }
                              document.getElementById("delBtn1").style.display="inline"; 
                            }
                          </script>
                      </div>
                    </div>
                    <div class="modal-footer" style="text-align: center">
                      <button
                        class="saveBtn"
                        type="submit"
                        style="width: 200px;"
                      >
                        Thêm sản phẩm
                      </button>
                    </form>
                    </div>
                  </div>
                        <script>
                            function displayImage1(input) {
                              var file = input.files[0];
                              if (file) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                  document.getElementById("previewImage1").src =
                                    e.target.result;
                                };
                                reader.readAsDataURL(file);
                              }
                              document.getElementById("delBtn1").style.display="inline"; 
                            }
                          </script>
                      </div>
                    </div>
                    <div class="modal-footer" style="text-align: center">
                      <button
                        class="saveBtn"
                        type="submit"
                        style="width: 200px;"
                      >
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
                    btn1.onclick = function () {
                      modal1.style.display = "block";
                    };

                    // When the user clicks on <span> (x), close the modal
                    span1.onclick = function () {
                      modal1.style.display = "none";
                    };

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function (event) {
                      if (event.target == modal1) {
                        modal1.style.display = "none";
                      }
                    };
                  </script>