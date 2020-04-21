@extends('master')
@section('content')
		<div class="rowleft_cart boxcompletecart">
			<h3 class="textcomplete">
				ĐƠN HÀNG ĐÃ HOÀN TẤT !
			</h3>
			<div class="des_complete">
                <p>Xin chào: Anh / Chị <strong>Nguyễn Văn A</strong>.</p>
                <p>Cảm ơn bạn đã đặt hàng trên website của chúng tôi. Số đơn hàng của bạn là:<span class="blue"> 2014260615062882361</span></p>
                <p>Chúng tôi sẽ liên hệ lại với bạn sau 15p để xác nhận đơn đặt hàng của bạn.</p>
                <p>Khi cần hỗ trợ vui lòng gọi : <span class="red">028.3856 3388</span> (từ 8:30 - 21:00)</p>
        	</div>
        	<h3 class="bold16">
        		Thông tin người mua
        	</h3>
        	<div class="order_detail">
                  <div>
                      <strong>Họ và Tên</strong>
                      <span>Nguyễn Văn A</span>
                  </div>
                   <div>
                      <strong>Điện thoại</strong>
                      <span>0919456789</span>
                  </div>
                  <div>
                      <strong>Email</strong>
                      <span>nguyenvana@gmail.com</span>
                  </div>
                  <div>
                      <strong>Ghi chú</strong>
                      <span>Không</span>
                  </div>
            </div>
            <h3 class="bold16">
        		Hình thức giao hàng
        	</h3>
        	<p class="ship_place">Giao hàng tại địa chỉ</p>
        	<div class="order_detail">
                  <div>
                      <strong>Địa chỉ</strong>
                      <span>123 Nguyễn Trãi, Phường 11</span>
                  </div>
                   <div>
                      <strong>Quận/huyện</strong>
                      <span>Quận 5</span>
                  </div>
                  <div>
                      <strong>Tỉnh/Thành phố</strong>
                      <span>TP. Hồ Chí Minh</span>
                  </div>
            </div>
            <h3 class="bold16">
        		Xuất hóa đơn công ty
        	</h3>
        	<div class="order_detail">
                  <div>
                      <strong>Mã số thuế công ty</strong>
                      <span>ABCDQWERTY</span>
                  </div>
                   <div>
                      <strong>Tên công ty</strong>
                      <span>Công ty ABC</span>
                  </div>
                  <div>
                      <strong>Địa chỉ công ty</strong>
                      <span>126 Dương Bá Trạc, P.5, Q.8, TP.Hồ Chí Minh</span>
                  </div>
            </div>
            <p class="boxotherbuy"><a href="#" title="Mua thêm sản phẩm khác" class="btnotherbuy">
            	Mua thêm sản phẩm khác
            </a></p>
		</div>
		<div class="rowright_cart">
			<strong class="textcart textcomp">Sản phẩm bạn đã mua sắm</strong>
			<div class="list_procart">
				<div class="each_itemcart">
					<div class="main_cart">
						<a href="#" title="#" class="picture_procart boxlazy">
							<img data-src="source/img/lo-vi-song-3.jpg" alt="#" src="source/img/loader.gif" class=" lazyload">
						</a>
						<div class="info_procart info_procartcomple">
							<h3 class="title_name">
                            	<a href="#" target="_blank" title="#">
                            	LÒ VI SÓNG KITCHENLUX 20MG65-L/800W
                            	</a>
                            </h3>
                            <div class="blue seemoregift hidegift">
                            	Xem tất cả quà tặng kèm
                            	<div class="gift_cart">
	                            	<ul class="main_gift">
										<li>
											<a>- PMH 100.000 VNĐ</a>
										</li>
									</ul>
	                            </div>
                            </div>
						</div>
						<div class="number_order numbercart_comp">
							<span class="pricecart">1.890.000 VNĐ</span>
							<span class="text_quanti">Số lượng:</span>
							<span class="text_quanti">1</span>
						</div>
					</div>
				</div>
				<div class="each_itemcart">
					<div class="main_cart">
						<a href="#" title="#" class="picture_procart boxlazy">
							<img data-src="source/img/lo-vi-song-3.jpg" alt="#" src="source/img/loader.gif" class=" lazyload">
						</a>
						<div class="info_procart info_procartcomple">
							<h3 class="title_name">
                            	<a href="#" target="_blank" title="#">
                            	LÒ VI SÓNG KITCHENLUX 20MG65-L/800W
                            	</a>
                            </h3>
                            <div class="blue seemoregift hidegift">
                            	Xem tất cả quà tặng kèm
                            	<div class="gift_cart">
	                            	<ul class="main_gift">
										<li>
											<a>- PMH 100.000 VNĐ</a>
										</li>
									</ul>
	                            </div>
                            </div>
						</div>
						<div class="number_order numbercart_comp">
							<span class="pricecart">1.000.000 VNĐ</span>
							<span class="text_quanti">Số lượng:</span>
							<span class="text_quanti">1</span>
						</div>
					</div>
				</div>
				<div class="totalcart">
                    <strong>Tổng cộng:</strong>
                    <span class="red">20.000.000 VNĐ</span>
                </div>
			</div>
		</div>
 @endsection