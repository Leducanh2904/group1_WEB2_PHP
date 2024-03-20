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
     

        <!-- ================ Order Details List ================= -->
        <div class="details">
          <div class="recentOrders2">
            <div class="cardHeader">
              <h2>Sản phẩm được hiển thị</h2>
            </div>
            <table>
              <thead>
                <tr>
                  <td>Tên sản phẩm</td>
                  <td>Giá sản phẩm</td>
                  <td>Số lượng sản phẩm</td>
                  <td>Thương hiệu</td>
                  <td>Thao tác quản trị viên</td>
                  
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>Vợt Cầu Lông Yonex Astrox 100ZZ China Limited</td>
                  <td>24/10/2023</td>
                  <td>30/11/2023 19:59</td>
                  <td>
                    <button id="button1" class="status inProgress">
                      Chỉnh sửa
                    </button>
                  <?php
                  include ("../pages/chinhsuasp.php");
                  ?>

                    <button
                      class="status1 inProgress"
                      type="button"
                      onclick="confirm('Bạn chắc chắn muốn xóa sản phẩm này?')"
                      style="cursor: pointer"
                    >
                      <span>Xóa</span>
                    </button>
                  </td>
                </tr>
                <script>
                  // Get the modal
                  var modal = document.getElementById("myModal");

                  // Get the button that opens the modal
                  var btn = document.getElementById("button1");

                  // Get the <span> element that closes the modal
                  var span = document.getElementsByClassName("close")[0];

                  // When the user clicks the button, open the modal
                  btn.onclick = function () {
                    modal.style.display = "block";
                  };

                  // When the user clicks on <span> (x), close the modal
                  span.onclick = function () {
                    modal.style.display = "none";
                  };

                  // When the user clicks anywhere outside of the modal, close it
                  window.onclick = function (event) {
                    if (event.target == modal) {
                      modal.style.display = "none";
                    }
                  };
                </script>
                <tr>
                  <td>Giày cầu lông Kawasaki 065 chính hãng</td>
                  <td>24/10/2023</td>
                  <td>30/11/2023 20:00</td>
                  <td>
                    <button
                      class="status inProgress"
                      type="button"
                      onclick="toggleButtons()"
                    >
                      Chỉnh sửa
                    </button>
                   <button
                      class="status1 inProgress"
                      type="button"
                      onclick="confirm('Bạn chắc chắn muốn xóa sản phẩm này?')"
                    >
                      <span>Xóa</span>
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>Áo Cầu Lông Yonex 2071 Nữ - Trắng</td>
                  <td>24/10/2023</td>
                  <td>30/11/2023 20:00</td>
                  <td>
                    <button
                      class="status inProgress"
                      type="button"
                      onclick="toggleButtons()"
                    >
                      Chỉnh sửa
                    </button>
                    <button
                      class="status1 inProgress"
                      type="button"
                      onclick="confirm('Bạn chắc chắn muốn xóa sản phẩm này?')"
                    >
                      <span>Xóa</span>
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>Váy Cầu Lông Donex Pro ASC-898</td>
                  <td>24/10/2023</td>
                  <td>30/11/2023 20:00</td>
                  <td>
                    <button
                      class="status inProgress"
                      type="button"
                      onclick="toggleButtons()"
                    >
                      Chỉnh sửa
                    </button>
                    <button
                      class="status1 inProgress"
                      type="button"
                      onclick="confirm('Bạn chắc chắn muốn xóa sản phẩm này?')"
                    >
                      <span>Xóa</span>
                    </button>
                  </td>
                </tr>

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
