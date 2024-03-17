<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo đơn hàng mới</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <script>
        function LogOut(){
            localStorage.clear();
        }
    </script>
    <!-- =============== Navigation ================ -->
    <?php 
                include ("../pages/taskbar.php");
                ?>
        <!-- ========================= Main ==================== -->
        <?php 
                include ("../pages/mainadmin.php");
                ?>

            <!-- ================ Order Details List ================= -->
            <div class="card">
                
                <h1 class ="title1" style="margin-left: 440px;">Tạo đơn hàng</h1> <br>
                <form class="form-sample">
                    <div class="form-group">
                        <form >
                            <label for="code" >Mã đơn hàng*</label> 
                            <input type="text" name="code" id="code" class="form-xnxx" placeholder="Mã đơn hàng" >
                        </form>
                    </div>
                    <div class="form-group">
                        <form >
                            <label for="status">Trạng thái</label>
                            <select name="code" id="code" class="form-xnxx">
                                <option value="đã xử lí">Đã xử lí</option>
                                <option value="đã xử lí">Chưa xử lí</option>

                            </select>
                        </form>
                    </div>
                    <div class="row">
                        <form >
                            <label for="code">Tên khách hàng</label> 
                            <input type="text" name="code" id="code" class="form-xnxx" placeholder="Họ và tên khách hàng">
                            <label for="code">Số điện thoại</label>  
                            <input type="text" name="code" id="code" placeholder="Số điện thoại" pattern="[0-9]{10}" required class="form-xnxx">
                        </form>
                    </div>
                    <div class="row">
                        <form >
                            <label for="code">Ngày tạo</label>
                            <input type="date" name="code" id="code" class="form-xnxx" >
                            <label for="code">Ngày giao</label> 
                            <input type="date" name="code" id="code"  class="form-xnxx">
                        </form>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ nhận hàng</label>
                        <input type="text" class="form-xnxx">
                    </div>
                    <div>
                        <label> Ghi chú đơn hàng</label>
                        <input type="text"  class="form-xnxx1">
                    </div>
                    <div class="form-group">
                        <div class="row d-flex align-items-center">
                            <div class="col-12 col-sm-3 col-md-2" >
                               <span>Chọn sản phẩm</span> 
                            </div>
                            <div class="col-12 col-sm-7 col-md-8">
                                <select class="form-control select2 select2-hidden-accessible" name="selectProduct" id="selectProduct" tabindex="-1" aria-hidden="true">
                                    <option>Chọn sản phẩm</option>
                                    <option value="1">Vợt Cầu Lông Yonex Astrox 100ZZ China Limited
                                        (Nội Địa Trung)</option>
                                    <option value="2">Vợt Cầu Lông Yonex Nanoflare X7
                                        (Mã KR)</option>
                                    <option value="3">Vợt Cầu Lông Lining Axforce 90 Xanh-
                                        Dragon Max Nội Địa Trung</option>
                                    <option value="4">Vợt Cầu Lông Lining 3D Calibar 001 -
                                        Nội Địa Trung</option>
                                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 759.109px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-selectProduct-container"><span class="select2-selection__rendered" id="select2-selectProduct-container" title="Giày Thể Thao Nam MWC NATT- 5472"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div> <br>
                            <div>
                                <button style="background-color: orange; color: white; width: 180px; height: 30px; border-radius: 5px;">Thêm sản phẩm đã chọn</button>
                            </div>

                           
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div id="table-order" class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="10" class="text-center">STT</th>
                                            <th width="60%">Tên sản phẩm</th>
                                            <th width="10%" class="text-right">Đơn giá</th>
                                            <th width="10%">Số lượng</th>
                                            <th width="10%" class="text-right">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" class="text-right">
                                                Phí giao hàng (VNĐ)
                                            </td>
                                            <td class="text-right">
                                                <input type="number" class="text-right" value="0" min="1000" minlength="1000" id="feeShipping" name="feeShipping">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right">
                                                <strong>Tổng tiền</strong>
                                            </td>
                                            <td class="text-right">
                                                <input type="hidden" id="inputTotalPrice">
                                                <strong id="totalPrice">0 VNĐ</strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                   <button class="tao" style=" margin-left: 680px;font-size: x-large; border-radius: 5px; background-color: orange; color: white; width: 250px; height: 40px;" onclick="alert('Tạo đơn hàng thành công')">Tạo</button>
                </form>
            </div>

    <!-- ====== Styles ======= -->
<style>
.tao:hover {
    background-color: orange ;
    border-radius: 2px;
    border: orange ;
    
}
.form-group form label {
    display: block;
    margin-bottom: 10px;
    color: #555;
}
.form-xnxx  {
    width: 1100px;
    padding: 12px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}
.form-xnxx1 {
    width: 1100px;
    padding: 30px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}
/* Add this CSS to your stylesheet */

/* Styles for the product selection */
#selectProduct {
    width: 100%;
}

/* Styles for the table */
.table {
    width: 100%;
    margin-top: 15px;
    border-collapse: collapse;
}

.table th, .table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

/* Styles for the modal button */
.btn-primary {
    margin-top: 15px;
}

/* Styles for the form */
.form-group {
    margin-bottom: 15px;
}

/* Styles for responsive layout */
@media (max-width: 767px) {
    .table th, .table td {
        font-size: 14px;
    }
}

@media (max-width: 575px) {
    .table th, .table td {
        font-size: 12px;
    }
}


.card {
    max-width: 1100px;
  margin: 20px auto;
  background-color: #fff;
  border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
</body>

</html>