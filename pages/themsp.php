<?php
// Kết nối đến cơ sở dữ liệu
include ("connection.php");

if (isset($_POST["submit"])) {
    // Lấy dữ liệu từ form
    $ten_sanpham = $_POST['ten_sanpham'];
    $ma_sanpham = $_POST['ma_sanpham'];
    $gia = $_POST['gia'];
    $mo_ta = $_POST['mo_ta'];
    $phân_loại = $_POST['loaisanpham']; // Thêm dòng này để lấy phân loại sản phẩm từ form
    $thuong_hieu = $_POST['thuonghieu']; // Thêm dòng này để lấy thương hiệu sản phẩm từ form
    $size = $_POST['size']; // Thêm dòng này để lấy kích thước sản phẩm từ form
    $so_luong = $_POST['so_luong']; // Thêm dòng này để lấy số lượng sản phẩm từ form
    $link_anh = "uploads/" . $_FILES['anh_sanpham']['name']; // Thêm dòng này để lấy đường dẫn của ảnh từ form

    // Di chuyển tệp ảnh tải lên vào thư mục 'uploads' (nếu cần)
    move_uploaded_file($_FILES['anh_sanpham']['tmp_name'], $link_anh);
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO products (ten_sanpham, ma_sanpham, gia, mo_ta, phan_loai, thuong_hieu, size, so_luong, link_anh) VALUES ('$ten_sanpham', '$ma_sanpham', '$gia', '$mo_ta', '$phân_loại', '$thuong_hieu', '$size', '$so_luong', '$link_anh')";
    mysqli_query($conn, $sql);
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Thêm sản phẩm thành công');</script>";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}
// Đóng kết nối
  mysqli_close($conn);
?>


<div class="modal-content3">
<div class="modal-header3">
    <span class="close3">&times;</span>
    <h2 style="text-align: center">Thêm sản phẩm</h2>
</div>
<div class="modal-body3">
    <div class="row3">
        <div class="column3" style="margin-right: -20px; margin-left: 10px">
            <form name="frm" method="POST" enctype="multipart/form-data">
                <div>
                    <p class="title1">Tên sản phẩm</p>
                    <input class="tsp" type="text" name="ten_sanpham" required />
                    <p class="title1">Mã sản phẩm</p>
                    <input class="tsp" type="text" name="ma_sanpham" required />
                    <p class="title1">Giá</p>
                    <input class="tsp" type="text" name="gia" style="margin-bottom: -10px" required />
                </div>
                <div style="margin-top: 30px; border-top: 1px dashed rgb(238, 227, 227);">
                    <div style="margin-top: 20px">
                        <p class="title1">Phân loại</p>
                        <select name="loaisanpham" id="loaisanpham" class="tsp" onchange="changeSize('loaisanpham','sizeVot','sizeGiay','sizeQuanAo','sizeBalo')">    
                            <option value="vot">Vợt</option>
                            <option value="giay">Giày</option>
                            <option value="quanao">Quần áo</option>
                            <option value="balo">Balo</option>
                            <option value="phukien">Phụ kiện</option>
                        </select>
                        <p class="title1">Thương hiệu</p>
                        <select name="thuonghieu" class="tsp" required>
                            <option value="Yonex">Yonex</option>
                            <option value="Lining">Lining</option>
                            <option value="Victor">Victor</option>
                            <option value="Apacs">Apacs</option>
                        </select>
                        <div class="Size_Vot">Chọn size: </div>
                        <div class="SuaSize" date-value="2U">
                            <input type="radio" name="size" value="2U">
                            <label for="Size 2U">2U</label>
                        </div>
                        <div class="SuaSize" date-value="3U">
                            <input type="radio" name="size" value="3U">
                            <label for="Size 3U">3U</label>
                        </div>
                        <div class="SuaSize" date-value="4U">
                            <input type="radio" name="size" value="4U">
                            <label for="Size 4U">4U</label>
                        </div>
                        <div class="SuaSize" date-value="5U">
                            <input type="radio" name="size" value="5U">
                            <label for="Size 5U">5U</label>
                        </div>
                        <input type="number" name="sizeGiay" id="sizeGiay" class="tsp" style="display: none;" min="36" max="48" value="36" required>
                        <select name="sizeQuanAo" id="sizeQuanAo" class="tsp" style="display: none;" required>
                            <option value="Yonex">S</option>
                            <option value="Lining">M</option>
                            <option value="Victor">L</option>
                            <option value="Apacs">XL</option>
                        </select>
                        <div style="margin-bottom: 10px;">
                            <span id="sizeBalo" style="display: none;"> &nbsp;&nbsp;&nbsp; Free Size</span>
                        </div>
                        <div class="description"> Mô tả sản phẩm <br>
                            <textarea name="descript" id="mota" style="width: 320px; height: 120px;"></textarea>
                        </div>
                        <div style="margin-top: 28px">
                            <p>Thêm hình ảnh</p>
                            <input class="tsp" type="file" accept="image/*" name="anh_sanpham" id="themsanphamkhungcon2" onchange="displayImage1(this)" />
                            <br />
                            <img id="previewImage1" src="#" alt="Hiển thị ảnh tại đây" style="max-width: 200px; max-height: 200px" />
                            <br>
                            <div id="delBtn1" style="display: none;">
                                <button class="status1 inProgress" type="button" onclick="deleteImg('delBtn1','previewImage1')">Xóa hình ảnh</button>
                            </div>
                        </div>
                        <div class="modal-footer" style="text-align: center">
                            <button class="saveBtn" type="submit" name="submit" style="width: 200px;">Thêm sản phẩm</button>
                        </div>
            </form>
        </div>
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
