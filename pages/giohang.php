<!DOCTYPE html>

<html>

<head>
    <title>Giỏ hàng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
    <link rel="stylesheet" href="../css/giohang.css">
    <script src="../js/function.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var quantityContainers = document.querySelectorAll('.anhgiohang');

        quantityContainers.forEach(function (container) {
            var quantityInput = container.querySelector('.qty-num');
            var minusButton = container.querySelector('.qty-minus');
            var plusButton = container.querySelector('.qty-plus');

            minusButton.addEventListener('click', function () {
                updateQuantity(quantityInput, -1);
            });

            plusButton.addEventListener('click', function () {
                updateQuantity(quantityInput, 1);
            });
        });

        function updateQuantity(quantityInput, change) {
            var currentValue = parseInt(quantityInput.value, 10) || 0;
            var newValue = Math.max(currentValue + change, 0);

            quantityInput.value = newValue;
        }
    });
    </script>
</head>

<body onload="changAccountName()">
<?php
   include("../pages/mainmenu2.php");
   ?>
    <div class="body">
        <div class="khunggiohang1">
            <b>Giỏ hàng của bạn</b>
        </div>
       
        <div class="khunggiohang3">
            <hr>
            
            <div class="anhgiohang">
                <img src="../images/Sanphammoi100zz.jpg">
                <div class="khungthongtin">
                    <div class="giohangtext1">
                        <a href="../votcaulong/chitiet100zz.php"><b >Vợt Cầu Lông Yonex Astrox 100ZZ China<br>Limited (Nội Địa Trung)</b></a>
                    </div>
                    <div class="giohangtext2">
                        <b>size:3U</b>
                    </div>
                </div>
                <div class="quantity-container">
                    <button type="button" class="qty-adjust qty-minus" aria-label="-">
                        -
                    </button>
                    <input type="text" name="quantity" class="qty-num" maxlength="3" value="1" min="0" aria-label="quantity" pattern="[0-9]*">
                    <button type="button" class="qty-adjust qty-plus" aria-label="+">
                        +
                    </button>
                </div>
                <div class="giohanggiatext">
                    <b>9.700.000₫</b>
                </div>
                <div>
                    <p class="giohangtext3"><input type="button" value="XÓA KHỎI GIỎ HÀNG" style="background-color: orange;
                        color: white;
                        padding: 2px 2px;
                        margin-top: 70px ;
                        margin-left: 5px;
                        border-color: orange;
                        cursor: pointer;
                        width: 150px;" onclick="confirm('Bạn chắc chắn muốn xóa sản phẩm này?')"></p>
                </div>
            </div>
            
            <hr>
            <hr>
            
            <div class="anhgiohang">
                <img src="../images/quan-cau-long-victor-nam-den-ma-369-1.png">
                <div class="khungthongtin">
                    <div class="giohangtext1">
                        <a href="../pages/chitietsp4.php"><b >Quần cầu lông Lining 92001 - Đen       <br>Hàng chính hãng</b></a>
                    </div>
                    <div class="giohangtext2">
                        <b>size:XXL</b>
                    </div>
                </div>
                <div class="quantity-container">
                    <button type="button" class="qty-adjust qty-minus" aria-label="-">
                        -
                    </button>
                    <input type="text" name="quantity" class="qty-num" maxlength="3" value="1" min="0" aria-label="quantity" pattern="[0-9]*">
                    <button type="button" class="qty-adjust qty-plus" aria-label="+">
                        +
                    </button>
                </div>
                <div class="giohanggiatext">
                    <b>139.000₫ &nbsp; &nbsp;</b>
                </div>
                <div>
                    <p class="giohangtext3"><input type="button" value="XÓA KHỎI GIỎ HÀNG" style="background-color: orange;
                        color: white;
                        padding: 2px 2px;
                        margin-top: 70px ;
                        border-color: orange;
                        cursor: pointer;
                        width: 150px;" onclick="confirm('Bạn chắc chắn muốn xóa sản phẩm này?')"></p>
                </div>
            </div>
            
            <hr>
            <hr>
            
            <div class="anhgiohang">
                <img src="../images/quan-cau-long-yonex-15157ex-den-chinh-hang_500.png">
                <div class="khungthongtin">
                    <div class="giohangtext1">
                        <a href="../pages/chitietsp5.php"><b >Quần cầu lông Lining 9209 - Đen Đỏ<br> Hàng chính hãng</b></a>
                    </div>
                    <div class="giohangtext2">
                        <b>size:XXL</b>
                    </div>
                </div>
                <div class="quantity-container">
                    <button type="button" class="qty-adjust qty-minus" aria-label="-">
                        -
                    </button>
                    <input type="text" name="quantity" class="qty-num" maxlength="3" value="1" min="0" aria-label="quantity" pattern="[0-9]*">
                    <button type="button" class="qty-adjust qty-plus" aria-label="+">
                        +
                    </button>
                </div>
                <div class="giohanggiatext">
                    <b>130.000₫ &nbsp; &nbsp; </b>
                </div>
                <div>
                    <p class="giohangtext3"><input type="button" value="XÓA KHỎI GIỎ HÀNG" style="background-color: orange;
                        color: white;
                        padding: 2px 2px;
                        margin-top: 70px ;
                        border-color: orange;
                        cursor: pointer;
                        width: 150px;" onclick="confirm('Bạn chắc chắn muốn xóa sản phẩm này?')"></p>
                </div>
            </div>
            
            <hr>
            <hr>
            
            <div class="anhgiohang">
                <img src="../images/giay-cau-long-kawasaki-2301-tim-nhat-xanh-chinh-hang_1140.png">
                <div class="khungthongtin">
                    <div class="giohangtext1">
                        <a href="../pages/chitietsp.php">
                        <b >Giày cầu lông Kawasaki 2301 chính hãng</b>
                        </a>
                    </div>
                    <div class="giohangtext2">
                        <b>size:42</b>
                    </div>
                </div>
                <div class="quantity-container">
                    <button type="button" class="qty-adjust qty-minus" aria-label="-">
                        -
                    </button>
                    <input type="text" name="quantity" class="qty-num" maxlength="3" value="1" min="0" aria-label="quantity" pattern="[0-9]*">
                    <button type="button" class="qty-adjust qty-plus" aria-label="+">
                        +
                    </button>
                </div>
                <div class="giohanggiatext">
                    <b>1.090.000₫ </b>
                </div>
                <div>
                    <p class="giohangtext3"><input type="button" value="XÓA KHỎI GIỎ HÀNG" style="background-color: orange;
                        color: white;
                        padding: 2px 2px;
                        margin-top: 70px ;
                        margin-left: 5px;
                        border-color: orange;
                        cursor: pointer;
                        width: 150px;" onclick="confirm('Bạn chắc chắn muốn xóa sản phẩm này?')"></p>
                </div>
            </div>
            
            <hr>
            <hr>
            <div>
                <div class="giohanggiatext2">
                    <b>
                        TỔNG TIỀN:
                    </b>
                </div>
                <div class="giohanggiatext1">
                    <b>11,059,000 ₫</b>
                </div>
            </div>
            <div class="khunggiohang4"  >
                <a href="../pages/thanhtoan.php"> <p class="my-element" style="margin-top: -0px;">ĐẶT HÀNG</p>  </a>

            </div>
        </div>
        

    </div>
    
   <div>
   <?php
    include ("../pages/footer.php");
    include ("../pages/ontop1.php");
    ?>
   </div>
</body>

        </html>