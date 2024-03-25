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
                    <label for="productName">Tên sản phẩm:</label>
                    <input type="text" id="productName" placeholder="Nhập tên sản phẩm...">
                </div>
                <div class="search-row">
                    <label for="productType">Loại sản phẩm:</label>
                    <select id="productType">
                        <option value="">-- Chọn loại sản phẩm --</option>
                        <option value="type1">Vợt cầu lông</option>
                        <option value="type2">Giày cầu lông</option>
                        <option value="type3">Balo cầu lông</option>
                        <option value="type4">Phụ kiện cầu lông</option>
                        <option value="type5">Quần áo cầu lông</option>
                    </select>
                </div>
                <div class="search-row">
                    <label for="startDate">Từ ngày:</label>
                    <input type="date" id="startDate">
                    <label for="endDate">Đến ngày:</label>
                    <input type="date" id="endDate">
                </div>
                <button onclick="search()">Tìm kiếm</button>
            </div> <br>
            <div>
                <h2 id="orderHeader" style="margin-left: 500px; font-size: xx-large; margin-bottom: -200px;">Thống kê doanh thu</h2> 
            </div><br> <br> <br>
            <table>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Loại sản phẩm</th>
                    <th>Giá</th>
                    <th>Ngày bán</th>
                    <th>Số lượng bán</th>
                    <th>Tổng tiền</th>
                </tr>
                <!-- Here you will dynamically generate rows based on search results -->
            </table>
        </div>
    </div>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>

</html>
