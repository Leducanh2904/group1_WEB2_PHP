<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $sql = "SELECT account.username, account.fullName, account.phone_number, account.address, account.email, SUM(orders.total_amount) AS total
            FROM account
            INNER JOIN orders ON orders.username = account.username
            WHERE orders.order_date BETWEEN '$startDate' AND '$endDate'
            GROUP BY account.username
            ORDER BY total DESC
            LIMIT 5";

    $result = mysqli_query($conn, $sql);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <?php include ("../pages/taskbar.php"); ?>
    <!-- ========================= Main ==================== -->
    <?php include ("../pages/mainadmin.php"); ?>

    <!-- ======================= Statistics Table ================== -->
    <div class="details">
        <div class="recentOrders" style="width: 1500px; display: flex; flex-direction: column;">
            <div class="search-form" style="display: flex; flex-direction: row; justify-content: space-between;">
                <div class="search-row">
                    <form method="POST">
                        <label for="startDate">Từ ngày:</label>
                        <input type="date" id="startDate" name="startDate">
                        <label for="endDate">Đến ngày:</label>
                        <input type="date" id="endDate" name="endDate">
                        <button type="submit" name="submit" style="padding: 10px;">Tìm kiếm</button>
                    </form>
                </div>
            </div> <br>
            <?php if (isset($_POST['submit']) && mysqli_num_rows($result) > 0) { ?>
                <div>
                    <h2 id="orderHeader" style="margin-left: 500px; font-size: xx-large; margin-bottom: -200px;">Thống kê doanh thu</h2>
                </div><br> <br> <br>
                <table>
                    <tr>
                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Đơn hàng</th>
                        <th>Tổng tiền</th>
                    </tr>

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['fullName'] . '</td>';
                        echo '<td>' . $row['phone_number'] . '</td>';
                        echo '<td>' . $row['address'] . '</td>';
                        echo '<td>' . $row['email'] . '</td>';

                        // Lấy danh sách các đơn hàng của khách hàng
                        $username = $row['username'];
                        $orderQuery = "SELECT * FROM orders WHERE username = '$username' AND order_date BETWEEN '$startDate' AND '$endDate'";
                        $orderResult = mysqli_query($conn, $orderQuery);

                        echo '<td>';
                        while ($orderRow = mysqli_fetch_assoc($orderResult)) {
                            $orderId = $orderRow['order_id'];
                            $orderLink = "donhang.php?orderId=$orderId"; 

                            echo '<a ' . $orderLink . '">' . $orderId . '</a>&nbsp;';
                            echo '<button>Xem chi tiết</button><br>';
                        }
                        echo '</td>';
                        $totalPrice = number_format($row['total'], 0, ',', '.');
                        echo '<td>' . $totalPrice . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </table>
            <?php } else if (isset($_POST['submit']) && mysqli_num_rows($result) ==0) { ?>
               <p>Không có dữ liệu thống kê trong khoảng thời gian đã chọn.</p>
            <?php } ?>
        </div>
    </div>
</body>

</html>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>