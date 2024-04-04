
   <?php
    session_start(); // Start session

    // Check if the cart session exists, if not, initialize it
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    include("connection.php");
    include("../admin/config.php");
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $productID = $_GET['id'];

        $sql = "SELECT * FROM products WHERE ProductID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $productID);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            // Add product information to the cart session
            $_SESSION['cart'][] = $row;
        } else {
            echo "Không tìm thấy sản phẩm.";
            exit;
        }
    } else {
        echo "Tham số sản phẩm không hợp lệ.";
        exit;
    }
    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title><?php echo $row['ProductName']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <link rel="stylesheet" href="../css/styleTLWeb1.css">
        <link rel="stylesheet" href="../css/product2.css">
        <script src="../js/function.js"></script>
    </head>

    <body onload="changAccountName()">
        <?php include("../pages/mainmenu2.php"); ?>
        <div class="bodywrap" style="margin-top:70px">
            <section class="bread-crumb">
                <div class="container">
                    <div class="details-product">
                        <div class="row1">
                            <div class="col-lg-9 col-col-md-9 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="product-detail-left product-images col-12 col-md-6 col-lg-5">
                                        <?php echo '<img src="../images/' . $row['ImageURL'] . '" alt="' . $row['ProductName'] . '" width="400">'; ?>
                                    </div>
                                    <div class="details-pro col-12 col-md-6 col-lg-7">
                                        <h1 class="title-product"><?php echo $row['ProductName']; ?></h1>
                                        <!-- Other product information -->
                                        <div class="sku-product clearfix">
                                            <span class="variant-sku">Mã: <span
                                                    class="a-sku"><?php echo $row['ProductID']; ?></span></span>
                                        </div>
                                        <div class="inventory_quantity">
                                            <span class="mb-break">
                                                <span class="stock-brand-title">Thương hiệu:</span>
                                                <a class="a-vendor"><strong><a><?php echo $row['Brand']; ?></a></strong></a>
                                            </span>
                                        </div>
                                        <!-- Price and promotions -->
                                        <div class="price-box clearfix">
                                            <span class="special-price">
                                                <span class="price product-price"><b
                                                        style="font-size: x-large;"><?php echo $row['Price']; ?>
                                                        ₫</b></span>
                                            </span>
                                        </div>
                                        <fieldset class="pro-discount uu_dai">
                                            <legend>
                                                <img width="32" height="32" alt="Khuyến mãi" src="../images/khuyenmai.gif">
                                                ƯU ĐÃI
                                            </legend>
                                            <div class="product-promotions-list-content">
                                                <!-- Promotion information -->
                                                <?php echo $row['Promotion']; ?>
                                            </div>
                                        </fieldset>
                                        <br>
                                        <?php
                                        // Fetch product sizes from database
                                        $sizes = explode(", ", $row['Size']);
                                        if (!empty($sizes)) {
                                            echo '<div class="form-product">';
                                            echo '<div class="select-swatch">';
                                            echo '<div class="swatch clearfix" data-option-index="0">';
                                            echo '<div class="header12">Chọn size:</div> <br>';
                                            echo '<select name="size">';
                                            foreach ($sizes as $size) {
                                                echo "<option value='" . $size . "'>" . $size . "</option>";
                                            }
                                            echo '</select>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</div>';
                                        } else {
                                            echo "Không có size nào được tìm thấy.";
                                        }
                                        ?>
                                        <style>
                                        .header12 {
                                            font-size: 20px;
                                        }

                                        select {
                                            padding: 10px;
                                            font-size: 20px;
                                            width: 140px;
                                            border-radius: 5px;
                                            border: 1px solid #ccc;
                                            appearance: none;
                                            -webkit-appearance: none;
                                            background-position: right 10px center;
                                            background-repeat: no-repeat;
                                        }
                                        </style>
                                        <br>
                                        <!-- Add to cart button -->
                                        <div class="boz-form">
                                        <div class="clearfix form-group">
                                            <div class="flex-quantity">
                                                <div class="btn-mua button_actions clearfix">
                                                    <?php
                                                    if (!empty($sizes)) {
                                                        echo '<button type="button" class="btn_base" onclick="addToCart()">Thêm vào giỏ hàng</button>';
                                                    } else {
                                                        echo 'Không có size nào được chọn.';
                                                    }
                                                    ?>
                                                    <script>
                                                    function addToCart() {
                                                        var selectedSize = document.querySelector('select[name="size"]').value;
                                                        if (selectedSize === '') {
                                                            alert('Vui lòng chọn kích thước trước khi thêm vào giỏ hàng.');
                                                        } else {
                                                            // Nếu kích thước đã được chọn, chuyển hướng đến trang giỏ hàng
                                                            window.location.href = '../pages/giohang.php';
                                                        }
                                                    }
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="product-tab e-tabs not-dqtab">
                                    <ul class="tabs tabs-title clearfix">
                                        <li class="tab-link active" data-tab="#tab_gioi_thieu">
                                            <h3>Mô tả sản phẩm</h3>
                                        </li>
                                    </ul>
                                    <div class="row ababa">
                                        <div class="col-md-12">
                                            <?php
                                            echo '<h2 style="text-align:justify">';
                                            echo '<span style="font-size:20px;"><span ><strong>' . $row['ProductName'] . '</strong></span></span></h2>';
                                            echo '<p style="text-align:justify">';
                                            echo '<span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">';
                                            echo $row['Description'];
                                            echo '</p>';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="page_comment_list" class="list-comment">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include("../pages/ontop1.php");
        include("../pages/footer1.php"); ?>
    </body>

    </html>