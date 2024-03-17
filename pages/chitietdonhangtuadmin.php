<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí đơn hàng</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../css/style.css">
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
            <!-- ======================= order list ================== -->
            <div class="details">
                <div class="recentOrders" style="width: 1200px;">
                    <div class="cardHeader">
                        <h2 id="orderHeader">Chi tiết đơn hàng </h2> 
                    </div><br>
                    <table>
                        <thead>
                            <tr>
                                <th class="special-table" style="width:200px ;">Hình ảnh sản phẩm</th>
                                <th class="special-table" style="width:250px ; margin-right: 50px">Tên sản phẩm</th>
                                <th class="special-table" style="width: 100px ;">Đơn giá</th>
                                <th class="special-table" style="width: 100px ;"> Số lượng </th> 
                                <th class="special-table" style="width: 100px ;">Tổng</th>
                            </tr>
                        </thead>
                        
                        <tr>
                            <td class="special-table" style="text-align: center;"> <img src="../images/100zz01.png" width="40%" > </td>
                            <td class="special-table" >Vợt Cầu Lông Yonex Astrox 100ZZ China Limited 
                                (Nội Địa Trung) </td>
                            <td class="special-table" >9.700.000 ₫</td>
                            <td class="special-table" style="text-align: center;"><span class="price">1</span></td>
                            <td class="special-table" style="text-align: center;">9.700.000 ₫</td>
                        </tr>
                        <tr>
                            <td class="special-table" style="text-align: center;"> <img src="../images/day-cuoc-cang-vot-lining-n63-noi-dia-3.png" width="40%" > </td>
                            <td class="special-table" >Dây cước căng vợt Lining N63 nội địa </td>
                            <td class="special-table" >230.000 ₫</td>
                            <td class="special-table" style="text-align: center;"><span class="price">1</span></td>
                            <td class="special-table" style="text-align: center;">230.000 ₫</td>
                        </tr>
                        <tr>
                            <td class="special-table" style="text-align: center;"> <img src="../images/quan-can-yonex-xin-ac102c-15-ex-1-cuon.png" width="40%" > </td>
                            <td class="special-table" >Quấn cán vợt Yonex xịn AC102C15 </td>
                            <td class="special-table" >135.000 ₫</td>
                            <td class="special-table" style="text-align: center;"><span class="price">2</span></td>
                            <td class="special-table" style="text-align: center;">270.000 ₫</td>
                        </tr>
                    </table>
                    <table class="special-table" >
                        <tr style="height: 50px;">
                            <td class="special-table" style="width: 200px ;"></td>
                            <td class="special-table" style="width: 150px ;"></td>
                            <td class="special-table" style="width: 100px ;"></td>
                            <td class="special-table" style="width: 150px; text-align: center;"> <b>Tổng tiền</b> </td>
                            <td class="special-table" style="width: 150px; text-align: center;" > <b>10.200.000 ₫</b> </td>
                        </tr>
                    </table>
                </table>        
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        function hienThiDonHang() {
            var startDate = document.getElementById('startDate').value;
            var endDate = document.getElementById('endDate').value;
            var orderHeader = document.getElementById('orderHeader');
            var orderTableBody = document.getElementById('orderTableBody');

            // Kiểm tra xem đã chọn đủ ngày tháng chưa
            if (startDate === '' || endDate === '') {
                alert('Vui lòng chọn cả "Từ ngày" và "Đến ngày".');
                return;
            }

            // Chuyển đổi ngày tháng từ chuỗi sang đối tượng Date
            var startDateTime = new Date(startDate);
            var endDateTime = new Date(endDate);

            // Kiểm tra xem ngày bắt đầu có trước ngày kết thúc không
            if (startDateTime > endDateTime) {
                alert('Ngày bắt đầu không thể sau ngày kết thúc.');
                return;
            }

            // Xử lý logic hiển thị đơn hàng ở đây
            // ...

            // Sau khi xử lý logic, hiển thị thông tin trong bảng
            orderHeader.innerHTML = 'Đơn hàng được hiển thị từ ' + startDate + ' đến ' + endDate;
            orderTableBody.innerHTML = `
                <tr>
                    <td>2021032957845</td>
                    <td>29/12/2023</td>
                    <td>5</td>
                    <td>12.200.000 ₫</td>
                    <td>
                        <select name="trangthai">
                            <option value="1">Đã xử lý</option>
                            <option value="2">Chưa xử lý</option>
                        </select>
                    </td>
                    <td style="text-align: center;">
                        <button class="status inProgress" type="button" onclick="window.location.href='../index/chitietdonhangtuadmin.html' "> Chi tiết</button>
                    </td>
                </tr>
               
            `;
        }
    </script>
   
</body>

</html>