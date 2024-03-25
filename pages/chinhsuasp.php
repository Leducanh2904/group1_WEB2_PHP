 <!-- Modal content -->
 <div id="myModal" class="modal">
 <div class="modal-content">
                        <div class="modal-header">
                          <span class="close">&times;</span>
                          <h2 style="text-align: center">Chỉnh sửa sản phẩm</h2>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div
                              class="column"
                              style="margin-right: -20px; margin-left: 10px"
                            >
                            <form name="frm1" onsubmit="alert('Chỉnh sửa thành công')">
                              <div>
                                <p class="title1">Tên sản phẩm</p>
                                <input
                                  class="tsp"
                                  type="text"
                                  value="Vợt Cầu Lông Yonex Astrox 100ZZ China Limited"
                                  required
                                />
                                <p class="title1">Mã sản phẩm</p>
                                <input
                                  class="tsp"
                                  type="text"
                                  value="VNB017045"
                                  required
                                />
                                <p class="title1">Giá</p>
                                <input
                                  class="tsp"
                                  type="number"
                                  value="9700000"
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
                                  <select name="loaisanpham1" id="loaisanpham1" class="tsp" onchange="changeSize('loaisanpham1','sizeVot1','sizeGiay1','sizeQuanAo1','sizeBalo1')">
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
                                  <p class="title1">Size</p>
                                  <select class="tsp" name="sizeVot" id="sizeVot1" required>
                                    <option value="Yonex">2U</option>
                                    <option value="Lining">3U</option>
                                    <option value="Victor">4U</option>
                                    <option value="Apacs">5U</option>
                                  </select>
                                  <input type="number" name="sizeGiay" id="sizeGiay1" class="tsp"  style="display: none;" min="36" max="48"  value="36" required>
                                  <select class="tsp" name="sizeQuanAo" id="sizeQuanAo1" style="display: none;" required>
                                    <option value="Yonex">S</option>
                                    <option value="Lining">M</option>
                                    <option value="Victor">L</option>
                                    <option value="Apacs">XL</option>
                                  </select>
                                  <div style="margin-bottom: 10px;">
                                    <span id="sizeBalo1" style="display: none;"> &nbsp;&nbsp;&nbsp; Free Size</span>
                                  </div>
                                  <p class="title1">Tình trạng</p>
                                  <select name id class="tsp">
                                    <option value>Còn hàng</option>
                                    <option value>Hết hàng</option>
                                  </select>
                                </div>
                              </div>
                              <br />
                            </div>
                            <div
                              class="column"
                              style="
                                background-color: rgb(255, 255, 255);
                                border-left: 1px dashed rgb(238, 228, 228);
                              "
                            >
                              <div style="margin-left: 30px">
                                <p>Mô tả sản phẩm</p>
                                <textarea
                                  rows="10"
                                  cols="58"
                                  required
                                  placeholder="Mô tả chi tiết sản phẩm: "
                                >Vợt cầu lông Yonex Astrox 100ZZ China Limited (Nội Địa Trung) là phiên bản giới hạn được mong chờ nhất năm 2023 với màu sắc hoàn toàn mới, đem lại những trải nghiệm tuyệt vời cho người chơi, được nhiều VĐV trên thế giới hàng đầu tin dùng và đạt được nhiều thành công lớn, tiêu biểu là tay vợt nam nổi tiếng Axelsen.

Theo đánh giá mới nhất về các cây vợt Astrox trong Astrox Series, Astrox 100 ZX và Astrox 100 ZZ có điểm cân bằng là nặng đầu nhất và cứng nhất, gần như những gì tốt nhất đang được tập trung trên 2 siêu phẩm này.
Vẫn là những hoạ tiết quen thuộc trên các phiên bản cũ, tuy nhiên ở phiên bản Yonex Astrox 100ZZ China Limited lần này, hãng Yonex đã khéo léo lựa chọn tông màu chủ đạo đen nâu trầm tối để làm nổi bật lên các hoạ tiết trông vô cùng bắt mắt, tạo nên sự huyền bí, mạnh mẽ đầy cuốn hút của cây vợt ngay từ cái nhìn đầu tiên.

Thiết kế cắt gió, giảm thiểu tối đa lực cản không khí giúp những truyền lực vào quả cầu nhanh và mạnh hơn. Ngoài ra, mặt vợt rộng ISOMETRIC còn giúp gia tăng hiệu suất đánh cầu chính xác, tiếng nổ khi đánh cầu cũng trở nên bắt tai hơn, tạo hiệu ứng sức mạnh giúp người chơi có thêm cảm hứng khi đánh.</textarea
                                >
                                <br />
                                <br />
                              </div>
                              <div style="margin-top: 28px">
                                <p>Thêm hình ảnh</p>
                                <input
                                  class="status5"
                                  type="file"
                                  accept="image/*"
                                  id="themsanphamkhungcon2"
                                  onchange="displayImage(this)"
                                  multiple="multiple"
                                />
                                <br />
                                <img
                                  id="previewImage"
                                  src="../images/100zz01.png"
                                  alt="Hiển thị ảnh tại đây"
                                  style="max-width: 200px; max-height: 200px"
                                />
                                <img
                                  id="previewImage3"
                                  src="../images/100zz0.png"
                                  alt="Hiển thị ảnh tại đây"
                                  style="max-width: 200px; max-height: 200px"
                                />
                                <br>
                                <div id="delBtn">
                                    <button class="status1 inProgress"  type="button" onclick="deleteImg('delBtn','previewImage','previewImage3')">Xóa hình ảnh</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <script>
                            function deleteImg(delBtn,previewImage,previewImage3){
                                    document.getElementById(previewImage).src="#";
                                    document.getElementById(previewImage3).src="#";
                                    document.getElementById(delBtn).style.display="none"; 
                            }
                            function displayImage(input) {
                              var file = input.files[0];
                              var file1 = input.files[1];
                              if (file) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                  document.getElementById("previewImage").src =
                                    e.target.result;
                                };
                                reader.readAsDataURL(file);
                              }
                              if (file1) {
                                var reader1 = new FileReader();
                                reader1.onload = function (e1) {
                                  document.getElementById("previewImage3").src =
                                    e1.target.result;
                                };
                                reader1.readAsDataURL(file1);
                              }
                              document.getElementById("delBtn").style.display="inline"; 
                            }
                          </script>
                        </div>
                        <div class="modal-footer" style="text-align: center">
                          <button
                            class="saveBtn"
                            type="submit"
                          >
                            Lưu chỉnh sửa
                          </button>
                        </form>
                        </div>
                      </div>
                    </div>
                    </button>
                  </td>
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
                