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
            <div>

            </div>
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