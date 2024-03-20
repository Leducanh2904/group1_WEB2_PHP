<div
                      id="myModal"
                      class="modal"
                      style="text-align: left; color: black"
                    >
                      <!-- Modal content -->
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
                                  <p class="title1">Tình trạng <select name id class="tsp">
                                    <option value>Còn hàng</option>
                                    <option value>Hết hàng</option>
                                  </select></p>
                                  <p class="title1">Số lượng  <input
                                  class="tsp"
                                  type="number"
                                  value="9700000"
                                  style="margin-bottom: -10px"
                                  required
                                /></p>
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