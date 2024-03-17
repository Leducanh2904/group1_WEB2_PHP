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
       <?php 
                include ("../pages/taskbar.php");
                ?>
        <!-- ========================= Main ==================== -->
        <?php 
                include ("../pages/mainadmin.php");
                ?>
 <!-- ======================= Cards ================== -->
 <div class="cardBox">
    <div class="card">
        <div>
            <div class="numbers">210,125</div>
            <div class="cardName">Sản phẩm bán ra</div>
        </div>

        <div class="iconBx">
            <ion-icon name="bag-check-outline"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">730</div>
            <div class="cardName">SP Sale</div>
        </div>

        <div class="iconBx">
            <ion-icon name="cart-outline"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">2,730,120</div>
            <div class="cardName">Số lượng bán ra</div>
        </div>

        <div class="iconBx">
            <ion-icon name="documents-outline"></ion-icon>
        </div>

      
    </div>

    <div class="card">
        <div>
            <div class="numbers">1.320.241.000 </div>
            <div class="cardName">Doanh thu hiện tại </div>
        </div>

        <div class="iconBx">
            <ion-icon name="server-outline"></ion-icon>
        </div>
    </div>
</div>
            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders" style="width: 1200px;">
                    <div class="cardHeader">
                        <h2 id="orderHeader" style="margin-left: 400px; font-size: xx-large; margin-bottom: -200px;">Thống kê doanh thu</h2> 
                    </div><br>
                   


                    <table style="margin-top: -190px;">
                        <thead>
                            <tr>
                                <th style="margin-right: 2000px;">Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng bán ra</th>
                                <th>Doanh thu</th>
                                <th></th>
                               
                    
                            </tr>
                        </thead>

                            <tr>
                                <td>ABCDEFGH957845214121</td>
                                <td>Vợt Cầu Lông Mizuno Prototype X-1.1 -
                                    Đen Xanh Chính Hãng</td>
                                <td>17</td>
                                <td>10.200.000 ₫</td>
                                <td> <button class="status inProgress" id="button2"  type="button">Xem chi tiết</button>                                                      <div id="myModal1" class="modal1" style="text-align: left; color: black; ">

                                    <!-- Modal content -->
                                    <div class="modal-content1" style="height: 300px; margin-top: 200px;">
                                    <div class="modal-header1">
                                        <span class="close">&times;</span>
                                        <h2 style="text-align: center;">Thống kê chi tiết</h2>
                                    </div>
                                    <div class="modal-body1">
                                        <div class="row1">
                                            <div class="column1">
                                                <div>
                                         <!-- Bảng thống kê chi tiết -->
                                            <table style="width: 900px; border-collapse: collapse; margin-top: 20px;">
                                                <style>
                                                    .tdd  {
                                                        border: 1px solid #190b0b;
                                                        padding: 8px;   
                                                        text-align: left;
                                                        position: relative;
                                                    }
                                                    
                                                </style>
                                                <thead>
                                                    <tr>
                                                        <th>Mã đơn</th>
                                                        <th>Số lượng</th>
                                                        <th>Đơn giá</th>
                                                        <th>Ngày mua và địa điểm</th>
                                                    </tr>
                                                </thead>
                                                <tbody >
                                                    <!-- Thêm các dòng dữ liệu ở đây (mỗi dòng một sản phẩm) -->
                                                    <tr>
                                                        <td class="tdd">1824982155</td>
                                                        <td class="tdd">2</td>
                                                        <td class="tdd">5,350,000 ₫</td>
                                                        <td class="tdd">  Tại cửa hàng <b>TQDA Thủ Đức</b>.  Ngày 04 Tháng 11 Năm 2023</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tdd">1531511216</td>
                                                        <td class="tdd">7</td>
                                                        <td class="tdd">1,640,000 ₫</td>
                                                        <td class="tdd">   Tại cửa hàng <b>TQDA Hai Bà Trưng </b>. Ngày 01 Tháng 12 Năm 2023</td>

                                                    </tr><tr>
                                                        <td class="tdd">7215878872</td>
                                                        <td class="tdd">6</td>
                                                        <td class="tdd">3,210,000 ₫</td>
                                                        <td class="tdd"> Tại cửa hàng <b>TQDA Quận 2 </b>. Ngày 19 Tháng 10 Năm 2023</td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                                </div>
                                            </div> 
                                           
                                        </div>
                                        <script>
                                            function deleteImg(delBtn,previewImage){
                                                document.getElementById(previewImage).src="#";
                                                document.getElementById(delBtn).style.display="none"; 
                                            }
                                            function displayImage3(input) {
                                              var file = input.files[0];
                                              if (file) {
                                                var reader = new FileReader();
                                                reader.onload = function(e) {
                                                document.getElementById('previewImage3').src = e.target.result;
                                                };
                                                reader.readAsDataURL(file);
                                              }
                                              document.getElementById("delBtn3").style.display="inline"; 
                                            }
                                            var modal = document.getElementById("myModal1");

                                            // Get the button that opens the modal
                                            var btn = document.getElementById("button2");

                                            // Get the <span> element that closes the modal
                                            var span = document.getElementsByClassName("close")[0];

                                            // When the user clicks the button, open the modal 
                                            btn.onclick = function() {
                                                modal.style.display = "block";
                                            }

                                            // When the user clicks on <span> (x), close the modal
                                            span.onclick = function() {
                                            modal.style.display = "none";
                                            }

                                            // When the user clicks anywhere outside of the modal, close it
                                            window.onclick = function(event) {
                                                if (event.target == modal) {
                                                    modal.style.display = "none";
                                                }
                                            }
                                            </script>
                                    </div>


                                    </form>
                                    </div>
                                    </div>
                                </div></td>

                            </tr>

                            <tr>
                                <td>ABCDEFGH957845960971</td>
                                <td>Vợt Cầu Lông Lining Axforce 90 Xanh-
                                    Dragon Max Nội Địa Trung</td>
                                <td>97</td>
                                <td>1.120.000 ₫</td>
                                <td> <button class="status inProgress" id="button2"  type="button">Xem chi tiết</button>                                                      <div id="myModal1" class="modal1" style="text-align: left; color: black; ">

                            
                                 
                                

                            </tr>

                            <tr>
                                <td>ABCDEFGH957845998623</td>

                                <td>Vợt Cầu Lông Mizuno NANOBLADE 909 -
                                    Trắng Chính Hãng
                                    </td>
                                <td>80</td>
                                <td>4.270.000 ₫</td>
                                <td> <button class="status inProgress" id="button2"  type="button" >Xem chi tiết</button>                                                      <div id="myModal1" class="modal1" style="text-align: left; color: black; ">

                                
                                

                            </tr>
                            
                            <tr>
                                <td>ABCDEFGH957845998957</td>

                                <td>Giày cầu lông Kawasaki 3306 chính hãng</td>
                                <td> 340</td>
                                <td>4.270.000 ₫</td>
                                <td> <button class="status inProgress" id="button2"  type="button" >Xem chi tiết</button>                                                      <div id="myModal1" class="modal1" style="text-align: left; color: black; ">


                                

                            </tr>
                            
                            <tr>
                                <td>ABCDEFGH957845785785</td>

                                <td>Giày cầu lông Victor P9200 chính hãng</td>
                                <td>524</td>
                                <td>4.270.000 ₫</td>
                                <td> <button class="status inProgress" id="button2"  type="button" >Xem chi tiết</button>                                                      <div id="myModal1" class="modal1" style="text-align: left; color: black; ">

                                
                                

                            </tr>

                           
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>

</html>