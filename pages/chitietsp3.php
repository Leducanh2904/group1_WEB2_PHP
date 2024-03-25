<!DOCTYPE html>

<html>

<head>
    <title>Chi tiết sản phẩm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="../css/styleTLWeb1.css">
    <link rel="stylesheet" href="../css/product2.css">
    <script src="../js/function.js"></script>
    <script>
        function addToCart() {
            var selectedSize = document.querySelector('input[name="size"]:checked');
            if(isLogin){
            if (selectedSize) {
                alert('Thêm vào giỏ hàng thành công');
            } else {
                alert('Chưa chọn size, vui lòng chọn lại');
            }
        }
        else if(!isLogin){
        alert("Bạn phải đăng nhập mới thêm vào giỏ hàng được !!")
    }
}
    </script>
</head>

<body onload="changAccountName()">
   <?php
   include ("../pages/mainmenu2.php");
   ?>
    <div>
        <div class="bodywrap">	
			<a src = "ttuyen.jpg" ></a>
			<section class="bread-crumb">
	<div class="container">
<section class="layout-product product" >
	  </div>
		<div class="container">
			
		<div class="details-product">
			<div class="row">
				<div class="col-lg-9 col-col-md-9 col-sm-12 col-xs-12">
					<div class="row">
						<div class="product-detail-left product-images col-12 col-md-6 col-lg-5">
							<div class="product-image-block relative">
																<div class="swiper-container gallery-top swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
								</div>
								<div class="swiper-container gallery-thumbs swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-free-mode swiper-container-thumbs">
									<div class="swiper-wrapper">
                                                    <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" data-hash="0" style="width: 60px; margin-right: 5px;">
											<div class="p-100">
												<img height="400" width="400" src="../images/giay-cau-long-kawasaki-3306-xanh-chinh-hang.1090.png" alt="Giày cầu lông Giày Cầu Lông Kawasaki 3306 Xanh Chính Hãng chính hãng" data-image="giay-cau-long-kawasaki-065-trang-chinh-hang-1090.png" class="swiper-lazy swiper-lazy-loaded">
											</div>	
										</div>
													<div class="swiper-slide swiper-slide-visible swiper-slide-next" data-hash="1" style="width: 60px; margin-right: 5px;">
											<div class="p-100">
												<img height="400" width="400" src="../images/giayso23.webp" alt="Giày cầu lông Giày Cầu Lông Kawasaki 3306 Xanh Chính Hãng chính hãng" data-image="giay-cau-long-kawasaki-065-trang-chinh-hang-1090.png" class="swiper-lazy swiper-lazy-loaded">
											</div>	
										</div>
													<div class="swiper-slide swiper-slide-visible" data-hash="3"style="width: 60px; margin-right: 5px;">
										</div>
                                                    <div class="swiper-slide swiper-slide-visible" data-hash="4"style="width: 60px; margin-right: 5px;">

										</div>
													<div class="swiper-slide" data-hash="5"style="width: 60px; margin-right: 5px;">
										</div>
									</div>
									<div class="swiper-button-next">
									</div>
									<div class="swiper-button-prev swiper-button-disabled">
									</div>
								</div>
							</div>
						</div>
						<div class="details-pro col-12 col-md-6 col-lg-7">
							<h1 class="title-product">Giày cầu lông Giày Cầu Lông Kawasaki 3306 Xanh Chính Hãng chính hãng</h1>
							<div class="product-top clearfix">
								<div class="sku-product clearfix">
																
																		<span class="variant-sku"  content="TQDA017091">Mã: <span class="a-sku">TQDA017094</span></span>
								</div>
							</div>
							<div class="inventory_quantity">
									<span class="mb-break">
									<span class="stock-brand-title">Thương hiệu:</span>
									<a class="a-vendor" >

										<a class="a-vendor" ><strong><a>Kawasaki</a></strong>
									</a>
								</span>
								<span class="line">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
																<span class="mb-break">
									<span class="stock-brand-title">Tình trạng:</span>
																		<span class="a-stock">Còn hàng</span>
								</span>
							</div>
							<form enctype="multipart/form-data" data-cart-form="" id="add-to-cart-form" action="javascript:;" method="post" class="form-inline">
								<div class="price-box clearfix">

									<input type="hidden" name="sp_id" value="17091">
									<style>
										@keyframes highlight {
											0% { background-color: #FFFFFF; }
											70% { background-color: #fffb00; }
											120% { background-color: #FFFFFF; }
										}
										
										.product-price {
											animation: highlight 1s infinite;
										}
									</style>
									<span class="special-price">
										
										<span class="price product-price"><b style = "font-size: x-large;">1.090.000 ₫</b> </span>
									</span>
									<span class="old-price">Giá niêm yết: <del class="price product-price-old">1.590.000 ₫</del></span>	
								</div>			
																<fieldset class="pro-discount uu_dai">
									<legend>
										<img width="32" height="32" alt="Khuyến mãi" src="../images/khuyenmai.gif"> ƯU ĐÃI
									</legend>
									<div class="product-promotions-list-content">
									<p>✔ Tặng 1 đôi vớ cầu lông TQDA (vớ TQDA dài nhiều màu hoặc vớ TQDA ngắn)

                                    </p>

<p>✔ Sản phẩm cam kết chính hãng</p>

<p>✔ Tặng bao đơn hoặc bao nhung bảo vệ vợt</p>

<p>✔ Thanh toán sau khi kiểm tra và nhận hàng (Giao khung vợt)</p>

<p>✔ Bảo hành chính hãng theo nhà sản xuất (Trừ hàng nội địa, xách tay)</p>

<p>&nbsp;</p>

<p><span style="font-family:verdana,geneva,sans-serif"><strong>🎁Ưu đãi thêm khi mua sản phẩm tại <a>TQDA Premium</a></strong></span></p>

<p><span style="font-family:verdana,geneva,sans-serif">✅ <a>Sơn logo mặt vợt</a> miễn phí</span></p>

<p><span style="font-family:verdana,geneva,sans-serif">✅ <a >Bảo hành lưới đan</a> trong 72 giờ</span></p>

<p><span style="font-family:verdana,geneva,sans-serif">✅&nbsp;<a >Thay gen vợt</a> miễn phí trọn đời</span></p>

<p><span style="font-family:verdana,geneva,sans-serif">✅ <a>Tích luỹ điểm thành viên</a> Premium</span></p>

<p><span style="font-family:verdana,geneva,sans-serif">✅ <a>Voucher giảm giá</a> cho lần mua hàng tiếp theo</span></p>										</div>
</fieldset>
<div class="form-product">
    <div class="select-swatch">
        <div class="swatch clearfix" data-option-index="0">
            <div class="header">Chọn size:</div>
            <div class="swatch-element soldout size-36" data-value="36">
                <input type="radio" name="size" value="36">
                <label for="Size 36">36</label>
            </div>
            <div class="swatch-element size-37" data-value="37">
                <input type="radio" name="size" value="37">
                <label for="Size 37">37</label>
            </div>
            <div class="swatch-element size-38" data-value="38">
                <input type="radio" name="size" value="38">
                <label for="Size 38">38</label>
            </div>
            <div class="swatch-element size-39" data-value="39">
                <input type="radio" name="size" value="39">
                <label for="Size 39">39</label>
            </div>
            <div class="swatch-element size-40" data-value="40">
                <input type="radio" name="size" value="40">
                <label for="Size 40">40</label>
            </div>
            <div class="swatch-element size-41" data-value="41">
                <input type="radio" name="size" value="41">
                <label for="Size 41">41</label>
            </div>
            <div class="swatch-element size-42" data-value="42">
                <input type="radio" name="size" value="42">
                <label for="Size 42">42</label>
            </div>
        </div>
    </div>
    
    <div class="boz-form">
        <div class="clearfix form-group">
            <div class="flex-quantity">
                <div class="btn-mua button_actions clearfix">
                    <button type="button" class="btn_base" onclick="addToCart()">Thêm vào giỏ hàng</button>
                </div>
            </div>
        </div>
    </div>
     <br>
								</div>
							<div class="clearfix"></div>
							<div class="d-md-none d-lg-none">
<fieldset class="pro-discount cn_con_hang" >
	<legend>
		Đang có hàng tại
	</legend>
</fieldset>
							</div>
						</div>
					</div>
<div class="product-tab e-tabs not-dqtab">
	<ul class="tabs tabs-title clearfix">	
		<li class="tab-link active" data-tab="#tab_gioi_thieu">
			<h3>Mô tả sản phẩm</h3>
		</li>
	</ul>
	<div class="col-md-12">
		<p style="text-align:center"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif"><strong>Giày Cầu Lông Giày Cầu Lông Kawasaki 3306 Xanh Chính Hãng - Vững chãi trên từng bước chạy</strong></span></span></p>

<h2><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif"><strong>1. Giới thiệu giày cầu lông&nbsp;Kawasaki 3306 Xanh</strong></span></span></h2>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Mặc dù đã được cho ra mắt vào năm 2017 nhưng đến nay vẫn không ngừng hết hot đó chính là&nbsp;giày cầu lông Giày Cầu Lông Kawasaki 3306 Xanh Chính Hãng,&nbsp;đây&nbsp;là một trong những&nbsp;mẫu giày mới nhất trong năm 2017 của hãng Kawasaki. Giày được thiết kế rất sang trọng và chuyên nghiệp.</span></span></p>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">-&nbsp;Đây là một trong những&nbsp;tầm trung (giá mềm)<strong>&nbsp;</strong>của hãng Kawasaki nhưng lại&nbsp;được đầu tư rất tốt về mặt thiết kế, giày cũng được quan tâm rất kĩ về chất lượng, giày đi khá&nbsp;êm chân và nhẹ nhàng, &nbsp;giúp bạn thanh thoát hơn trong các bước chạy.</span></span></p>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Đôi giày được thiết kế hiện đại với màu trắng&nbsp;rất cá tính kết hợp với cái chi tiết nhỏ cùng logo chữ K&nbsp;màu xanh dương&nbsp;nhìn toàn diện sản phẩm&nbsp;trông rất hoàn hảo.</span></span></p>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Phần đế giày chất lượng, êm ái mang đến cảm giác thoải mái nhất cho đôi chân. Phần đế cao su bám sân tốt, đảm bảo an toàn trên từng bước di chuyển của bạn.</span></span></p>

<h2><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif"><strong>2. Tổng quan giày cầu lông hiện đại&nbsp;Giày Cầu Lông Kawasaki 3306 Xanh Chính Hãng</strong></span></span></h2>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Màu sắc&nbsp;giày cầu lông hiện đại Giày Cầu Lông Kawasaki 3306 Xanh Chính Hãng:&nbsp;Trắng/ Xanh dương</span></span></p>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Size: 36-45</span></span></p>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Thân giày/ Upper: Da PU, lưới thoáng khí nhiều lớp</span></span></p>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">-&nbsp;Đế giữa/ Midsole: EVA đàn hồi cao, đế đàn hồi Popcorn, đế chống xoắn TPU</span></span></p>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">-&nbsp;Đế ngoài/ Outsole: Sợi carbon ổn định, cao su chống mài mòn</span></span></p>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Bên trong/ Inner materials: Lưới thoáng khí nhiều lớp</span></span></p>

<h3><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif"><strong>* Bảng size&nbsp;bao gồm giày cầu lông hiện đại&nbsp;<a>Giày Cầu Lông Kawasaki 3306 Xanh Chính Hãng</a></strong></span></span></h3>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif"><img alt="Size giày cầu lông Giày Cầu Lông Kawasaki 3306 Xanh Chính Hãng" src="bangsizegiay.webp"></span></span></p>

<h2><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif"><strong>3. Ưu điểm của giày cầu lông bền bỉ&nbsp;Giày Cầu Lông Kawasaki 3306 Xanh Chính Hãng</strong></span></span></h2>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">-&nbsp;Giày cầu lông Giày Cầu Lông Kawasaki 3306 Xanh Chính Hãng&nbsp;là mẫu giày phân khúc tầm trung&nbsp;của <a >KAWASAKI</a> với mức giá vừa phải nhưng vẫn mang trong mình công nghệ tốt nhất để bảo vệ cho đôi chân bạn. Các nét điểm chi tiết có thiết kế mạnh mẽ hơn, tạo nên một form giầy cực chuẩn, điểm nhấn cho sự cá tính, năng động cho các bạn.</span></span></p>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Giày có thiết kế ôm chân và phù hợp với cả nam lẫn nữ.</span></span></p>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Màu sắc hài hòa, trẻ trung</span></span></p>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Phần đế làm từ chất liệu cao su cao cấp, dẻo và êm chân. Phần keo bền, giữ lâu</span></span></p>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Đây&nbsp;là sự lựa chọn của rất nhiều bạn trẻ thích sự mạnh mẽ, yêu thích khỏe khoắn, năng động.</span></span></p>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Cải tiến với chất liệu giày, cao cấp được xem như một phần của hệ thống chóng sốc, hỗ trợ khi tập luyện.</span></span></p>

<p><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">-&nbsp;Giày cầu lông bền bỉ&nbsp;Giày Cầu Lông Kawasaki 3306 Xanh Chính Hãng&nbsp;sẽ là sự lựa chọn hoàn hảo cho những người chơi cần cải thiện tốc độ, giúp bạn chạy nhảy linh hoạt hơn mà vẫn tạo sự thoải mái nhất.<br>
<br>
		</div>
	<div class="tab-float">
		<div id="tab_gioi_thieu" class="tab-content content_extab active">
			<div class="rte product_getcontent">
				<div id="content">
	</div>
			</div>
		</div>
	</div>
</div>

			  <div id="page_comment_list" class="list-comment"><hr> 


					  </footer>
					</div>
				  </div>
			</div>
</div>
	<legend>
		ĐANG CÓ HÀNG TẠI 
	</legend>
    <p>1. TQDA PREMIUM Quận 1 20 Cao Bá Nhạ, Quận 1, TPHCM </p>
    <p>2. TQDA Quận 1 Số 6 Nguyễn Hữu Cầu Phường Tân Định Quận 1</p>
	
</fieldset>
								</div>
							</div>
    
                            <div>
                                <?php
                                include ("../pages/footer.php");
                                include("../pages/ontop1.php");
                                ?>
                            </div>
</body>

</html>