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

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders" style="width: 1200px; text-align: center;">
                    <div class="cardHeader">
                        <h2 id="orderHeader">Đơn hàng được hiển thị</h2> 
                    </div><br>
                    <div>
                        <label for="startDate">Từ ngày:</label>
                        <input type="date" id="startDate">
                        <label for="endDate">Đến ngày:</label>
                        <input type="date" id="endDate">
                        <button onclick="hienThiDonHang()" style="background-color: orange; border-radius: 3px; width: 140px; ">Hiển thị đơn hàng</button>
                    </div> <br>


                    <table>
                        <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Ngày xuất đơn</th>
                                <th>Số lượng sản phẩm</th>
                                <th>Tổng giá trị đơn hàng</th>
                                <th>Trạng thái</th>
                                <th style="text-align: center;">Thao tác quản trị viên</th>
                    
                            </tr>
                        </thead>

                        <tbody id="orderTableBody">
                            <script>
                                function toggleButtons() {
                                    // Hiển thị hoặc ẩn nút thêm và nút xóa
                                    var addButton = document.getElementById("addButton");
                                    var deleteButton = document.getElementById("deleteButton");
                        
                                    if (addButton.style.display === "none") {
                                        addButton.style.display = "inline";
                                        deleteButton.style.display = "inline";
                                    } else {
                                        addButton.style.display = "none";
                                        deleteButton.style.display = "none";
                                    }
                                }
                            </script>
                        </tbody>
                            <tr>
                                <td>2021032957845</td>
                                <td style="text-align: center;">14/12/2023</td>
                                <td>4</td>
                                <td>10.200.000 ₫</td>
                                <td>
                                    <select name="trangthai">
                                        <option value="1">Đã xử lý</option>
                                        <option value="2">Chưa xử lý</option>
                                    </select>
                                </td>
 <td style="text-align: center;"><button class="status inProgress" type="button" onclick="window.location.href='../pages/chitietdonhangtuadmin.php' "> Chi tiết</button></td> 
                                
                                

                            </tr>

                            <tr>
                                <td>2021032957928</td>
                                <td style="text-align: center;">24/12/2023</td>
                                <td>10</td>
                                <td>1.120.000 ₫</td>
                                <td>
                                    <select name="trangthai">
                                        <option value="1">Chưa xử lí</option>
                                        <option value="2">Đã xử lí</option>
                                    </select>
                                </td>
<td style="text-align: center;"><button class="status inProgress" type="button" onclick="window.location.href='../pages/chitietdonhangtuadmin.php' ">Chi tiêt</button></td> 
                                

                            </tr>

                            <tr>
                                <td>2021032952785</td>
                                <td style="text-align: center;">11/12/2022</td>
                                <td>1</td>
                                <td>4.270.000 ₫</td>
                                <td>
                                    <select name="trangthai">
                                        <option value="1">Đã xử lý</option>
                                        <option value="2">Chưa xử lý</option>
                                    </select>
                                </td>
<td style="text-align: center;"><button class="status inProgress" type="button" onclick="window.location.href='../pages/chitietdonhangtuadmin.php' ">Chi tiết</button></td> 
                                

                            </tr>

                            <tr>
                                <td>2021032948329</td>
                                <td style="text-align: center;">11/12/2023</td>
                                <td>3</td>
                                <td>3.240.000 ₫</td>
                                <td>
                                    <select name="trangthai">
                                        <option value="1">Đã xử lý</option>
                                        <option value="2">Chưa xử lý</option>
                                    </select>
                                </td>

<td style="text-align: center;"><button class="status inProgress" type="button" onclick="window.location.href='../pages/chitietdonhangtuadmin.php' ">Chi tiết</button></td>    
                            </tr><tr>
                                <td>2870032948229</td>
                                <td style="text-align: center;">13/10/2023</td>
                                <td>4</td>
                                <td>4.560.000 ₫</td>
                                <td>
                                    <select name="trangthai">
                                        <option value="1">Chưa xử lý</option>
                                        <option value="2">Đã xử lý</option>
                                    </select>
                                </td>

<td style="text-align: center;"><button class="status inProgress" type="button" onclick="window.location.href='../pages/chitietdonhangtuadmin.php' ">Chi tiết</button></td>                        
                            </tr> 
                        </table>
                        <div class="tdh">
                            <a href="../pages/donhangmoi.php" class="" >    
                                <button class="saveBtn" type="button" style="font-size: large; border-radius: 5px; border: 2px solid black; width: 180px; height: 60px;" > Tạo đơn hàng mới</button>
                            </a>
                        </div>
                        
                                
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
                        <button class="status inProgress" type="button" onclick="window.location.href='../index/chitietdonhangtuadmin.php' "> Chi tiết</button>
                    </td>
                </tr>
               
            `;
        }
    </script>
   
</body>

</php>