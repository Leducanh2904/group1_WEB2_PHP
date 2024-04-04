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
    <?php include "../pages/taskbar.php"; ?>

    <!-- ========================= Main ==================== -->
    <?php include "../pages/mainadmin.php"; ?>

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
                    <?php
                   include ("connection.php");

                    // Truy vấn SQL để lấy dữ liệu từ bảng orders
                    $sql = "SELECT * FROM orders";
                    $result = mysqli_query($conn, $sql);

                    // Hiển thị dữ liệu từ cơ sở dữ liệu
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['order_code'] . "</td>";
                            echo "<td>" . $row['order_date'] . "</td>";
                            echo "<td>" . $row['quantity'] . "</td>";
                            echo "<td>" . $row['total_price'] . "</td>";
                            echo "<td>";
                            echo "<select name='trangthai'>";
                            echo "<option value='1'>Đã xử lý</option>";
                            echo "<option value='2'>Chưa xử lý</option>";
                            echo "</select>";
                            echo "</td>";
                            echo "<td style='text-align: center;'><button class='status inProgress' type='button' onclick='window.location.href=\"../pages/chitietdonhangtuadmin.php\"'> Chi tiết</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Không có dữ liệu</td></tr>";
                    }

                    // Đóng kết nối
                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>

            <div class="tdh">
                <a href="../pages/donhangmoi.php" class="">
                    <button class="saveBtn" type="button" style="font-size: large; border-radius: 5px; border: 2px solid black; width: 180px; height: 60px;"> Tạo đơn hàng mới</button>
                </a>
            </div>

        </div>
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

</html>
