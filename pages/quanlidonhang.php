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
                        <?php
                            include("connection.php");
                            $sql = "SELECT * FROM orders";
                                $result = mysqli_query($conn, $sql);
                            if(isset($_POST['submit'])){
                                $status = $_POST['status'];
                                $startDate = $_POST['startDate'];
                                $endDate = $_POST['endDate'];
                                $sql = "SELECT * FROM orders WHERE status = '$status' AND orders.order_date BETWEEN '$startDate' AND '$endDate' ";
                                $result = mysqli_query($conn, $sql);
                            }

                            if(isset($_POST['confirm'])){
                                $status1 = $_POST['statusInput'];
                                echo $status1;
                                $order_id1 = $_POST['order_id'];
                                $sql1 = "UPDATE orders
                                        SET status='$status1'
                                        WHERE order_id = '$order_id1'";
                                $result1 = mysqli_query($conn,$sql1);
                                header('Location: quanlidonhang.php');
                            }
                        ?>
                        <form method="post" autocomplete="off">
                            <label for="startDate">Từ ngày:</label>
                            <input type="date" id="startDate" name="startDate">
                            <label for="endDate">Đến ngày:</label>
                            <input type="date" id="endDate" name="endDate">
                            <select name="status">
                                <option value="0">Chưa xác nhận</option>
                                <option value="1">Đã xác nhận</option>
                                <option value="2">Đã giao thành công</option>
                                <option value="3">Hủy đơn</option>
                            </select>
                            <button type="submit" name="submit" style="background-color: orange; border-radius: 3px; width: 140px; ">Hiển thị đơn hàng</button>
                        </form>
                    </div> <br>


                    <table>
                        <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Ngày xuất đơn</th>
                                <th>Họ & tên</th>
                                <th>SĐT</th>
                                <th>Địa chỉ giao hàng</th>
                                <th>Tổng giá trị đơn hàng</th>
                                <th>Trạng thái</th>
                                <th colspan="2" style="text-align: center;">Thao tác quản trị viên</th>
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
                        <?php
                            $count = 0;
                            while ($row4 = $result->fetch_assoc()){ 
                            $formattedtotal = number_format($row4['total_amount'], 0, ',', '.');
                                echo "
                                <tr>
                                
                                    <td >".$row4['order_id']. "</td>
                                    <td>".$row4['order_date']. "</td>
                                    <td>".$row4['fullName']. "</td>
                                    <td>".$row4['phone_number']. "</td>
                                    <td>".$row4['address']. "</td>
                                    <td>".$formattedtotal. "&nbsp<u>đ</u></td>";
                                    if($row4['status'] == 0){
                                        echo "
                                            <td name='statusChange'>Chưa xác nhận</td>
                                            <td name='tdStatusInput' style='display: none'>
                                                <form method='post'>
                                                    <input type='hidden' name='order_id' value='".$row4['order_id']."'>
                                                    <select name='statusInput'>
                                                        <option value='0'>Chưa xác nhận</option>
                                                        <option value='1'>Đã xác nhận</option>
                                                        <option value='2'>Đã giao thành công</option>
                                                        <option value='3'>Hủy đơn</option>
                                                    </select>
                                                    <button type='submit' name='confirm'>Xác nhận</button>
                                                </form>
                                            </td>";
                                    }
                                    else if($row4['status'] == 1){
                                        echo "
                                            <td name='statusChange'>Đã xác nhận</td>
                                            <td name='tdStatusInput' style='display: none'>
                                            <form method='post'>
                                                    <input type='hidden' name='order_id' value='".$row4['order_id']."'>
                                                    <select name='statusInput'>
                                                        <option value='0'>Chưa xác nhận</option>
                                                        <option value='1'>Đã xác nhận</option>
                                                        <option value='2'>Đã giao thành công</option>
                                                        <option value='3'>Hủy đơn</option>
                                                    </select>
                                                    <button type='submit' name='confirm'>Xác nhận</button>
                                                </form>
                                            </td>
                                            ";
                                    } 
                                    else if($row4['status'] == 2){
                                        echo "
                                            <td name='statusChange'>Đã giao thành công</td>
                                            <td name='tdStatusInput' style='display: none'>
                                            <form method='post'>
                                                    <input type='hidden' name='order_id' value='".$row4['order_id']."'>
                                                    <select name='statusInput'>
                                                        <option value='0'>Chưa xác nhận</option>
                                                        <option value='1'>Đã xác nhận</option>
                                                        <option value='2'>Đã giao thành công</option>
                                                        <option value='3'>Hủy đơn</option>
                                                    </select>
                                                    <button type='submit' name='confirm'>Xác nhận</button>
                                                </form>
                                            </td>
                                            ";
                                    }
                                    else if($row4['status'] == 3){
                                        echo "
                                            <td name='statusChange'>Hủy đơn</td>
                                            <td name='tdStatusInput' style='display: none'>
                                            <form method='post'>
                                                <input type='hidden' name='order_id' value='".$row4['order_id']."'>
                                                <select name='statusInput'>
                                                    <option value='0'>Chưa xác nhận</option>
                                                    <option value='1'>Đã xác nhận</option>
                                                    <option value='2'>Đã giao thành công</option>
                                                    <option value='3'>Hủy đơn</option>
                                                </select>
                                                <button type='submit' name='confirm'>Xác nhận</button>
                                            </form>
                                            </td>
                                            ";
                                    }
                                    echo '
                                    <td>
                                        <form>
                                            <button type="button" name="changeStatus">Thay đổi</button>
                                        </form>
                                    </td>
                                    ';
                                    // show order details
                                    $order_id = $row4['order_id'];
                                    $sql5 = "SELECT * FROM order_detail WHERE order_id = '$order_id'";
                                    $result5 = mysqli_query($conn, $sql5);
                                    echo '
                                    
                                    <td>
                                        <button name="myBtn1" id="myBtn'.$count.'" value="'.$count.'">Xem chi tiết</button>
                                        <div name="myModal1" class="modal">

                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close" name="close1" >&times;</span>
                                                <table style="width: 100%; table-layout: fixed;">
                                                    <tr>
                                                    <th style="width: 20%;">Mã sản phẩm</th>
                                                    <th style="width: 20%;">Hình ảnh</th>
                                                    <th style="width: 20%;">Tên sản phẩm</th>
                                                    <th style="width: 20%;">Số lượng</th>
                                                    <th style="width: 20%;">Đơn giá</th>
                                                    </tr>';
                                                    while ($row5 = $result5->fetch_assoc()) {
                                                        $productID = $row5['productID'];
                                                        $sql6 = "SELECT * FROM products WHERE productID = '$productID'";
                                                        $result6 = mysqli_query($conn, $sql6);
                                                        $row6 = mysqli_fetch_array($result6, MYSQLI_ASSOC);
                                                        $formattedPrice = number_format($row6['Price'], 0, ',', '.');
                                                    
                                                        echo '
                                                        <tr>
                                                            <td>' . $row5['productID'] . '</td> 
                                                            <td><img style="width: 50%; display: flex; margin-left: 140px;" src="../images/' . $row6['ImageURL'] . '"></td>
                                                            <td><p style = "margin-left:50%;">' . $row6['ProductName'] . '</p></td>
                                                            <td>' . $row5['amount'] . '</td>
                                                            <td>' . $formattedPrice . '</td>
                                                        </tr>';
                                                    }
                                                    echo '
                                                </table>
                                            </div>

                                        </div>
                                    </td>
                                </tr>';
                                $count ++;
                            }
                        ?>            
                    </table>
                    <style>
                    /* The Modal (background) */
                    .modal {
                    display: none; /* Hidden by default */
                    position: fixed; /* Stay in place */
                    z-index: 1; /* Sit on top */
                    left: 0;
                    top: 0;
                    width: 100%; /* Full width */
                    height: 100%; /* Full height */
                    overflow: auto; /* Enable scroll if needed */
                    background-color: rgb(0,0,0); /* Fallback color */
                    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                    }
                   
                    /* Modal Content/Box */
                    .modal-content {
                    background-color: #fefefe;
                    margin: 15% auto; /* 15% from the top and centered */
                    padding: 20px;
                    border: 1px solid #888;
                    width: 80%; /* Could be more or less, depending on screen size */
                    }

                    /* The Close Button */
                    .close {
                    color: #aaa;
                    float: right;
                    font-size: 28px;
                    font-weight: bold;
                    }

                    .close:hover,
                    .close:focus {
                    color: black;
                    text-decoration: none;
                    cursor: pointer;
                    }
                </style>
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