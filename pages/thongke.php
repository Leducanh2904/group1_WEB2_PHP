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
                            if($orderRow['status']!=3){
                                $orderId = $orderRow['order_id'];
                                $orderLink = "donhang.php?orderId=$orderId"; 

                                echo '<a ' . $orderLink . '">' . $orderId . '</a>&nbsp;';
                                $count = 0;

                                // show order details
                                $order_id = $orderRow['order_id'];
                                $sql5 = "SELECT * FROM order_detail WHERE order_id = '$order_id'";
                                $result5 = mysqli_query($conn, $sql5);
                        
                                echo '
                                
                                    <button name="myBtn1" id="myBtn'.$count.'" value="'.$count.'">Xem chi tiết</button>
                                    <div name="myModal1" class="modal">

                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <span class="close" name="close1" >&times;</span>
                                            <table style="width: 100%">
                                            <tr>
                                            <th style="width: 20%;">Mã sản phẩm</th>
                                            <th style="width: 20%;">Hình ảnh</th>
                                            <th style="width: 20%;">Tên sản phẩm</th>
                                            <th style="width: 20%;">Số lượng</th>
                                            <th style="width: 20%;">Đơn giá</th>
                                            </tr>';
                                                while($row5 = $result5->fetch_assoc()){
                                                    $productID = $row5['productID'];
                                                    $sql6 = "SELECT * FROM products WHERE productID = '$productID'";
                                                    $result6 = mysqli_query($conn, $sql6);
                                                    $row6 = mysqli_fetch_array($result6, MYSQLI_ASSOC);
                                                    $formattedPrice = number_format($row6['Price'], 0, ',', '.');
                                                    echo '
                                                    <tr>
                                                    <td><a style="margin-left: 20%">' . $row5['productID'] . '</a></td> 
                                                    <td><img style="width: 50%; display: flex; margin-left: 55px;" src="../images/' . $row6['ImageURL'] . '"></td>
                                                    <td><p style = "margin-left:20%;">' . $row6['ProductName'] . '</p></td>
                                                    <td><a style ="margin-left: 50%">' . $row5['amount'] . '</a></td>
                                                    <td><a style ="margin-right: 28%">' . $formattedPrice . '</a></td>
                                                </tr>';
                                                }
                                                echo '
                                            </table>
                                        </div>

                                    </div>
                                    <br>
                                ';
                            }
                        }
                        echo '</td>';
                        $totalPrice = number_format($row['total'], 0, ',', '.');
                        echo '<td>' . $totalPrice . '</td>';
                        echo '</tr>';
                    }
                    ?>
                    <script>

                            let tdStatusInput =document.getElementsByName("tdStatusInput");
                            let statusChange =document.getElementsByName("statusChange");
                            let changeStatus =document.getElementsByName("changeStatus");
                            let confirm =document.getElementsByName("confirm");

                                for(let i = 0; i<statusChange.length; i++){
                                    changeStatus[i].onclick=function(){
                                        statusChange[i].style.display = "none";
                                        tdStatusInput[i].style.display = "block";
                                    }
                                }


                            // Get the modal
                            //let modal = document.getElementById("myModal1");
                            let modal = document.getElementsByName("myModal1");

                            // Get the button that opens the modal
                            //let btn = document.getElementById("myBtn1");
                            let btn = document.getElementsByName("myBtn1");

                            // Get the <span> element that closes the modal
                            let span = document.getElementsByName("close1");

                            // When the user clicks on the button, open the modal
                            for (let i = 0; i < modal.length; i++) {
                                btn[i].onclick = function() {
                                modal[i].style.display = "block";
                                }

                                // When the user clicks on <span> (x), close the modal
                                span[i].onclick = function() {
                                    modal[i].style.display = "none";
                                }

                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                    if (event.target == modal[i]) {
                                        modal[i].style.display = "none";
                                    }
                                }
                            }
                    </script>
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