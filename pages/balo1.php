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
    include("../pages/mainmenu2.php");
    ?>
    <div>
        <div class="bodywrap">	
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
												<img height="400" width="400" src="balo-cau-long-yonex-888-hong-gia-cong.png" alt="Giày cầu lông Balo cầu lông - Hồng trắngXanh Chính Hãng chính hãng" data-image="giay-cau-long-kawasaki-065-trang-chinh-hang-1090.png" class="swiper-lazy swiper-lazy-loaded">
											</div>	
										</div>
													<div class="swiper-slide swiper-slide-visible swiper-slide-next" data-hash="1" style="width: 60px; margin-right: 5px;">
											<div class="p-100">
												
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
							<h1 class="title-product"> Balo cầu lông chính hãng</h1>
							<div class="product-top clearfix">
								<div class="sku-product clearfix">
																		
																		<span class="variant-sku"  content="TQDA017091">Mã: <span class="a-sku">TQDA017095</span></span>
								</div>
							</div>
							<div class="inventory_quantity">
									<span class="mb-break">
									<span class="stock-brand-title">Thương hiệu:</span>
									<a class="a-vendor" >

                                        <a class="a-vendor" ><strong><a>Yonex</a></strong>
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
										
										<span class="price product-price"><b style = "font-size: x-large;">139.000 ₫</b> </span>
									</span>
									<span class="old-price">Giá niêm yết: <del class="price product-price-old">200.000 ₫</del></span>
								</div>			
																<fieldset class="pro-discount uu_dai">
									<legend>
										<img width="32" height="32" alt="Khuyến mãi" src="../index/khuyenmai.gif"> ƯU ĐÃI
									</legend>
									<div class="product-promotions-list-content">
									<p>✔ Thanh toán sau khi kiểm tra và nhận hàng

                                    </p>
                                    <p>✔ Hỗ trợ đổi size</p>

<p><span style="font-family:verdana,geneva,sans-serif"><strong>🎁Ưu đãi thêm khi mua sản phẩm tại <a>TQDA Premium</a></strong></span></p>

<p><span style="font-family:verdana,geneva,sans-serif">✅ <a>Sơn logo mặt vợt</a> miễn phí</span></p>

<p><span style="font-family:verdana,geneva,sans-serif">✅ <a >Bảo hành lưới đan</a> trong 72 giờ</span></p>

<p><span style="font-family:verdana,geneva,sans-serif">✅&nbsp;<a >Thay gen vợt</a> miễn phí trọn đời</span></p>

<p><span style="font-family:verdana,geneva,sans-serif">✅ <a>Tích luỹ điểm thành viên</a> Premium</span></p>

<p><span style="font-family:verdana,geneva,sans-serif">✅ <a>Voucher giảm giá</a> cho lần mua hàng tiếp theo</span></p>										</div>
</fieldset>
 <br>

                                    <div class="form-product">
                                        <div class="select-swatch">
                                            <div class="swatch clearfix" data-option-index="0">
                                                <div class="header">Chọn size:</div>
                                    
                                                <div class="swatch-element soldout size-36" data-value="36">
                                                    <input type="radio" name="size" value="36">
                                                    <label for="Size 36">S</label>
                                                </div>
                                                <div class="swatch-element size-37" data-value="37">
                                                    <input type="radio" name="size" value="37">
                                                    <label for="Size 37">M</label>
                                                </div>
                                                <div class="swatch-element size-38" data-value="38">
                                                    <input type="radio" name="size" value="38">
                                                    <label for="Size 38">L</label>
                                                </div>
                                                <div class="swatch-element size-39" data-value="39">
                                                    <input type="radio" name="size" value="39">
                                                    <label for="Size 39">XL</label>
                                                </div>
                                                <div class="swatch-element size-40" data-value="40">
                                                    <input type="radio" name="size" value="40">
                                                    <label for="Size 40">XXL</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<br>
                                    <div class="boz-form">
                                        <div class="clearfix form-group">
                                            <div class="flex-quantity">
                                                <div class="btn-mua button_actions clearfix">
                                                    <button type="button" class="btn_base" onclick="addToCart()">Thêm vào giỏ hàng</button>
                                                </div> <br>
                                            </div>
                                        </div>
                                    </div>
                                   
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
                    </div>
    <div class="product-tab e-tabs not-dqtab">
	<ul class="tabs tabs-title clearfix">
		<li class="tab-link active" data-tab="#tab_gioi_thieu">
			<h3>Mô tả sản phẩm</h3>
		</li>
	</ul>
    
	<div class="row ababa">
        <div class="col-md-12">
            <p style="text-align:center"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif"><strong>Balo cầu lông - Hồng trắng- Co Dãn Tốt, Thấm Hút Hoàn Hảo, Bền Bỉ Sử Dụng Trong Một Thời Gian Dài</strong></span></span></p>

<h2 style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif"><strong>1. Giới thiệu Balo cầu lông - Hồng trắng&nbsp;chất lượng</strong></span></span></h2>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">-&nbsp;Để có thể chơi cầu lông ngày càng hay hơn thì ngoài việc các lông thủ chọn được cho mình một cây vợt phù hợp, một đôi giày vừa vặn thì bộ <strong>quần áo cầu lông</strong> mặc trên người cũng góp một vai trò rất quan trọng. Không những giúp người chơi thoải mái trong lúc thi đấu mà còn tăng sự đẳng cấp nổi bật lên cá tính riêng biệt của mỗi người và đặc biệt là chiếc quần cầu lông - Nơi chịu rất nhiều tác động mạnh của đôi chân trong suốt quá trình di chuyển, vậy đâu mới là mẫu quần chất lượng? Một trong những gợi ý tốt nhất dành cho bạn chính là Balo cầu lông - Hồng trắngđấy nhé!</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Mẫu <em>Balo cầu lông - Hồng trắng&nbsp;xịn</em>&nbsp;là một sản phẩm thích hợp cho các bạn yêu mến bộ môn cầu lông có thể sử dụng để chơi cầu lông, đi chơi và đi du lịch.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Chất liệu vải sử dụng để may nên chiếc&nbsp;Balo cầu lông - Hồng trắng&nbsp;là vải thun cao cấp 4&nbsp;chiều có đặc tính thấm hút cực nhanh, thoáng mát, hạn chế mồ hôi dính vào người khi tham gia chơi cầu lông. Ngoài các đặc tính trên thì loại vải này cũng không ra màu, không chảy sệ, co giãn rất tốt.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Đặc biệt&nbsp;Logo trên quần&nbsp;có chất lượng cao, không nhão, co giãn gần như tuyệt đối 100%.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Ngoài ra,&nbsp;chiếc&nbsp;Balo cầu lông - Hồng trắngcao cấp&nbsp;còn được phát hành với tận 5 size trải dài tứ S đến XXL phù hợp cho tất cả người chơi có số cân từ 50kg đến 90kg.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">+ Size S: 50 - 60kg.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">+ Size M: 60 - 67kg.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">+ Size L: 68 - 75kg.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">+ Size XL: 76 - 83kg.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">+ Size XXL: 83 - 90kg.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif"></span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif"><img alt="quan-cau-long-lining-92001-den-vang" src="balo-cau-long-yonex-888-hong-gia-cong.png"></span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif"></span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif"><strong>Xem thêm</strong>: Các mẫu <a href="/quan-cau-long.html">quần cầu lông</a> mới nhất tại ShopTQDA</span></span></p>

<h2 style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif"><strong>2. Kết cấu tổng thể của Balo cầu lông - Hồng trắng</strong></span></span></h2>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Sản phẩm: Balo cầu lông - Hồng trắng</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Loại quần: Quần ngắn</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Chất liệu: 100% Polyester</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Size: S, M, L, XL, XXL</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Tính năng:</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">&nbsp; &nbsp; &nbsp;+ Co dãn tốt</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">&nbsp; &nbsp; &nbsp;+ Thấm hút mồ hôi tốt</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">&nbsp; &nbsp; &nbsp;+ Làm mát nhanh</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">&nbsp; &nbsp; &nbsp;+ Chống nhăn</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">&nbsp; &nbsp; &nbsp;+ Khô nhanh</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">&nbsp; &nbsp; &nbsp;+ Siêu bền bỉ.</span></span></p>

<h2 style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif"><strong>3. Ưu điểm của Balo cầu lông - Hồng trắng&nbsp;hiện đại</strong></span></span></h2>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">-&nbsp;Balo cầu lông - Hồng trắng&nbsp;được may bằng loại vải tổng hợp dành riêng cho bộ môn cầu lông&nbsp;nên chiếc&nbsp;quần&nbsp;training cầu lông&nbsp;này sẽ cho khả năng thấm hút cực tốt.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Thiết kế size trải dài từ S đến tận XXL phù hợp cả với những người nhỏ con&nbsp;hoặc có số cân thấp đến những bạn to bự có số cân trên 90kg.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Phần logo trên quần&nbsp;được thiết kế đẹp, hiện đại, bền bỉ&nbsp;dù cho có giặt giũ liên tục và sử dụng trong thời gian dài cũng đảm bảo chẳng bong tróc.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Đặc biệt, mẫu <u>Balo cầu lông - Hồng trắnghiện đại nhất</u>&nbsp;này được phát hành&nbsp;nhiều&nbsp;phiên bản&nbsp;màu sắc đa dạng khác nhau dễ dàng cho các lông thủ lựa chọn.</span></span></p>

<h2 style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif"><strong>4. Chính sách đổi trả sau khi mua hàng</strong></span></span></h2>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Người mua có thể trả các sản phẩm&nbsp;<strong>quần&nbsp;cầu lông </strong>khi không vừa ý trong vòng 1h kể từ khi nhận hàng,TQDA sẽ đổi sản phẩm cho khách. Sản phẩm muốn đổi hoặc trả cần giữ sản phẩm&nbsp;chưa khui bịch, chưa sử dụng.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Sản phẩm mua bị lỗi – Quá hạn sử dụng</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Quý khách vui lòng kiểm tra sản phẩm&nbsp;<strong>quần áo cầu lông giá rẻ</strong>&nbsp;trước khi thanh toán. Trong trường hợp sản phẩm bị hư hại trong quá trình vận chuyển, quý khách vui lòng từ chối và gửi lại sản phẩm cho chúng tôi.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Sản phẩm không sử dụng được ngay khi được giao</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Các mẫu&nbsp;<strong>quần áo cầu lông đẹp</strong>&nbsp;giao không đúng theo đơn đặt hàng.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Bạn nghĩ rằng sản phẩm giao cho bạn không đúng với đơn đặt hàng? Hãy liên hệ với chúng tôi càng sớm càng tốt, hệ thống của chúng tôi sẽ kiểm tra nếu hàng của bạn bị gửi nhầm. Trong trường hợp đó, chúng tôi sẽ thay thế đúng mặt hàng bạn yêu cầu (khi có hàng).</span></span></p>

<p style="text-align:justify"><strong><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">Điều kiện đổi trả hàng</span></span></strong></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Điều kiện về thời gian đổi trả:&nbsp;trong vòng 01 ngày&nbsp;kể từ khi nhận được hàng và phải liên hệ gọi ngay cho chúng tôi theo số điện thoại trên để được xác nhận đổi trả hàng.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Sản phẩm&nbsp;<strong>quần áo chơi cầu lông</strong>&nbsp;gửi lại phải còn nguyên tem và ở nguyên vẹn trong bịch.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Quý khách chịu chi phí vận chuyển, đóng gói, thu hộ tiền, chi phí liên lạc tối đa tương đương 20% giá trị đơn hàng.</span></span></p>

<p style="text-align:justify"><strong><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">Quy trình đổi trả hàng</span></span></strong></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Bước 1: Sau khi nhận được hàng. Yêu cầu quý vị kiểm tra kỹ 1 lần trước khi nhận hàng. Nếu có vấn đề xin vui lòng liên hệ Trung tâm hỗ trợ khách hàng tại thời điểm nhân viên giao hàng còn ở đó.Trường hợp sau khi nhân viên giao hàng đã đi – Nếu muốn đổi trả hàng có thể liên hệ với chúng tôi để được xử lý và hẹn lịch đổi trả hàng.</span></span></p>

<p style="text-align:justify"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">- Bước 2:&nbsp;Sau khi Trung tâm hỗ trợ khách hàng thông báo lịch hẹn nhận hàng trả.</span></span></p>
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
</fieldset>
								</div>
							</div>
    <div class="khungden">
        <div class="cot">THÔNG TIN CHUNG<br>
            TQDA Sports là hệ thống cửa hàng cầu lông với<br> hơn 50 chi nhánh trên toàn quốc, cung cấp sỉ và<br> lẻ các
            mặt hàng dụng cụ cầu lông từ phong trào<br> tới chuyên nghiệp<br>

            Với sứ mệnh: "TQDA cam kết mang đến những<br> sản phẩm, dịch vụ chất lượng tốt nhất phục vụ<br> cho người
            chơi thể thao để nâng cao sức khỏe<br> của chính mình."<br>

            Tầm nhìn: "Trở thành nhà phân phối và sản xuất<br> thể thao lớn nhất Việt Nam"</div>
        <div class="cot">THÔNG TIN LIÊN HỆ<br>
            Hệ thống cửa hàng: 1 shop Premium 59 cửa<br> hàng trên toàn quốc<br>
            Xem tất cả các cửa hàng TQDA<br>

            Hotline: 0931335214 | 0963261328 | 0364655945<br>
            Email: TQDA@gmail.com<br>
            Hợp tác kinh doanh: 0931335214 (Mr. Quân)<br>
            Hotline bán sỉ: 0911 105 211<br>
            Nhượng quyền thương hiệu: 0963261328 (Mr. Nan)<br>
            Than phiền dịch vụ: 0364655945 (Mr. Đức Anh)</div>
        <div class="cot">CHÍNH SÁCH<br>
            Chính sách đổi trả,hoàn tiền<br>
            Chính sách bảo hành<br>
            Chính sách xử lý khiếu nại<br>
            Chính sách vận chuyển<br>
            Điều khoản sử dụng<br>
            Chính Sách Bảo Mật Thông Tin<br>
            Chính sách nhượng quyền</div>
        <div class="cot">HƯỚNG DẪN<br>
            Tìm hiểu công việc tập huấn tennis trước khi<br> tổ chức giải đấu<br>
            Bảng size Lining - Cách chọn size quần áo<br> lining, giày cầu lông Lining<br>
            Hướng dẫn cách tập tennis cho người mới<br> chơi<br>
            Hướng dẫn cách chọn vợt cầu lông cho người<br> mới chơi<br>
            Hướng dẫn thanh toán<br>
            Kiểm tra bảo hành<br>
            Kiểm tra đơn hàng<br>
            HƯỚNG DẪN MUA HÀNG</div>
    </div>
    <div class="khungcam">
        <div class="cot">
            © CÔNG TY TNHH TQDA SPORTS<br>
            GPKD số 0559966452 do Sở KH và ĐT TP Hồ Chí Minh cấp ngày 20/10/2023<br>
            GĐ/Sở hữu by TQDA<bsite:br>
        </div>
    </div>
    <div><button onclick="topFunction()" id="myBtn" title="Go to top"><img src="../index/ontop.png" alt=""></button>
        <script>
           
            let mybutton = document.getElementById("myBtn");
            
            
            window.onscroll = function() {scrollFunction()};
            
            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
              } else {
                mybutton.style.display = "none";
              }
            }
            
         
            function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
            }
            </script></div>
</body>

</html>