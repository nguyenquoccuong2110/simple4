@extends('master')
@section('content')

		<div class="rowright_cart">
			<a href="#" class="buy_more blue" title="Mua thêm sản phẩm khác">Tiếp tục mua hàng</a>
			<strong class="textcart">Giỏ hàng</strong>
			<div class="list_procart">
				<div class="each_itemcart">
					<div class="delete_cart">
						<a href="#" title="Xóa sản phẩm này khỏi đơn hàng">&#215;</a>
					</div>
					<div class="main_cart">
						<a href="#" title="#" class="picture_procart boxlazy">
							<img data-src="source/img/lo-vi-song-3.jpg" alt="#" src="source/img/loader.gif" class=" lazyload">
						</a>
						<div class="info_procart">
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
						<div class="number_order">
							<span class="pricecart">1.890.000 VNĐ</span>
							<span class="text_quanti">Số lượng</span>
							<div class="select_numbercart">
				                <div class="subnum"><i></i></div>
				                <div class="number">1</div>
				                <div class="addnum"><i></i><i></i></div>
				            </div>
						</div>
					</div>
				</div>
				<div class="each_itemcart">
					<div class="delete_cart">
						<a href="#" title="Xóa sản phẩm này khỏi đơn hàng">&#215;</a>
					</div>
					<div class="main_cart">
						<a href="#" title="#" class="picture_procart boxlazy">
							<img data-src="source/img/lo-vi-song-3.jpg" alt="#" src="source/img/loader.gif" class=" lazyload">
						</a>
						<div class="info_procart">
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
						<div class="number_order">
							<span class="pricecart">1.890.000 VNĐ</span>
							<span class="text_quanti">Số lượng</span>
							<div class="select_numbercart">
				                <div class="subnum"><i></i></div>
				                <div class="number">1</div>
				                <div class="addnum"><i></i><i></i></div>
				            </div>
						</div>
					</div>
				</div>
				<div class="totalcart">
                    <strong>Tổng tiền:</strong>
                    <span class="red">20.000.000 VNĐ</span>
                </div>
                <form action="#" name="" method="post" class="box_coupon">
                    <span>Sử dụng mã giảm giá</span>
                    <input type="text" name="coupon" id="coupon" value="" class="data_coupon" placeholder="Nhập mã giảm giá">
                    <button type="submit" class="btn_coupon">Sử dụng</button>
                </form>
			</div>
		</div>
    	<div class="rowleft_cart">
			<h3 class="infomationcustomer">
				Thông tin người mua
			</h3>
			<p class="textnote2 textnotedata"><strong class="red">(*)</strong>Thông tin bắt buộc</p>
			<form class="frm_payment" name="datapayment" id="">
				<div class="text_input">
					<div class="rdo_fix">
					    <label>Anh
					    	<input type="radio" id="men" name="sex" checked="checked">
					    	<span class="check"></span>
					    </label>
					</div>
					<div class="rdo_fix rdo_right">
					    <label>Chị
					    	<input type="radio" id="women" name="sex">
					    	<span class="check"></span>
					    </label>
					</div>
				</div>
				<div class="text_input">
                    <label>Họ tên <strong class="red">(*)</strong> </label>
                    <input class="text" name="name" id="name" value="" type="text" placeholder="Nguyễn Văn A" required="required">
                </div>
                <div class="text_input">
                    <label>Số điện thoại <strong class="red">(*)</strong> </label>
                    <input class="text" name="phone" id="phone" value="" type="number" placeholder="123456789" required="required">
                </div>
                <div class="text_input">
                    <label>Email </label>
                    <input class="text" name="email" id="email" value="" type="email" placeholder="abc@gmail.com">
                </div>
                <div class="text_input">
                    <label>Ghi chú </label>
                    <textarea name="note" id="note" placeholder="Nội dung ghi chú ( Không bắt buộc )" class="text" rows="4"></textarea>
                </div>
                <p class="textnotemore textnotedata">Để phục vụ được thuận lợi hãy chọn thêm</p>
                <div class="box_ship">
                	<div class="rdo_fix">
					    <label>Địa chỉ giao hàng
					    	<input type="radio" id="shiphome" name="ship" value="1">
					    	<span class="check"></span>
					    </label>
					</div>
					<div class="rdo_fix fix_right">
					    <label>Đến siêu thị nhận hàng
					    	<input type="radio" id="shipmarket" name="ship" value="2">
					    	<span class="check"></span>
					    </label>
					</div>
					<div class="detailship_home">
						<div class="text_input text_input2">
		                    <label>Tỉnh/Thành phố </label>
		                    <p class="filterprice">
	                        	<select name="price" id="price">
									<option value="0">-- Chọn --</option>
								    <option value="1">An Giang</option>
								    <option value="2">Bến Tre</option>
								    <option value="3">Bà Rịa - Vũng Tàu</option>
								</select>
	                        </p>
		                </div>
		                <div class="text_input text_input2">
		                    <label>Quận/huyện </label>
		                    <p class="filterprice">
	                        	<select name="price" id="price">
									<option value="0">-- Chọn --</option>
								    <option value="1">Quận 1</option>
								    <option value="2">Quận 2</option>
								    <option value="3">Quận 3</option>
								    <option value="4">Quận 4</option>
								</select>
	                        </p>
		                </div>
		                <div class="text_input">
		                    <label>Địa chỉ </label>
		                    <input class="text text2" name="myaddress" id="myaddress" value="" type="text" placeholder="Điền số nhà, tên đường để nhận hàng (không bắt buộc)">
		                </div>
		                <label class="get_vat textnotemore">
		                	<input type="checkbox" name="agree" id="agreevat" class="check_box exportvat" required="">
		                	Chọn để xuất hóa đơn công ty
		                </label>
		                <div class="capacityvat">
		                	<div class="text_input text_inputvat">
			                    <label>Mã số thuế công ty </label>
			                    <input class="text" name="vat" id="vat" type="text" placeholder="ADGHJK K">
			                </div>
			                <div class="text_input text_inputvat">
			                    <label>Tên công ty </label>
			                    <input class="text" name="namecompany" id="namecompany" value="" type="text" placeholder="Công ty ABC">
			                </div>
			                <div class="text_input text_inputvat">
			                    <label>Địa chỉ công ty </label>
			                    <input class="text" name="addresscompany" id="addresscompany" value="" type="text" placeholder="Số nhà, Quận, Tỉnh">
			                </div>
		                </div>
					</div>
					<div class="detailship_market">
						<strong class="text_market">Nhận hàng tại siêu thị</strong>
	                    <p class="filterprice1 filterprice "> 
	                    	<select name="branch" id="branch"> 
	                    		<option value="0">Toàn quốc </option> 
	                    		<option value="1">Tp.Hồ Chí Minh và khu vực lân cận</option> 
	                    		<option value="2">Các tỉnh miền Tây</option> 
	                    		<option value="3">Các tỉnh miền Trung</option>
	                    	</select>
	                    </p>
                        <ul class="list_market">
                        	<li class="branchactive">
	                			<div class="rdo_fix rdo_far">
								    <label>
								    	<span class="branchname">189/4 Trường Chinh, P. Tân Hưng Thuận, Q.12, TP.Hồ Chí Minh.</span>
								    	<input type="radio" name="storebranch">
								    	<span class="check"></span>
									</label>
								</div>
	                		</li>
	                		<li class="branchactive">
	                			<div class="rdo_fix rdo_far">
								    <label>
								    	<span class="branchname">639 Hương Lộ 2,Phường Bình Trị Đông,Quận Bình Tân,TP. Hồ Chí Minh.</span>
								    	<input type="radio" name="storebranch">
								    	<span class="check"></span>
									</label>
								</div>
	                		</li>
	                		<li class="branchactive">
	                			<div class="rdo_fix rdo_far">
								    <label>
								    	<span class="branchname">Siêu thị trang trí Nội thất Thái Lan Index Living Mall, Tòa nhà H2, 196 Hoàng Diệu,P.8 , Q.4, TP.Hồ Chí Minh.</span>
								    	<input type="radio" name="storebranch">
								    	<span class="check"></span>
									</label>
								</div>
	                		</li>
	                		<li class="branchactive">
	                			<div class="rdo_fix rdo_far">
								    <label>
								    	<span class="branchname">Tầng trệt, lầu 1, Cao ốc Lương Định Của, P. An Phú, Q. 2, TP.Hồ Chí Minh.</span>
								    	<input type="radio" name="storebranch">
								    	<span class="check"></span>
									</label>
								</div>
	                		</li>
	                		<li class="branchactive">
	                			<div class="rdo_fix rdo_far">
								    <label>
								    	<span class="branchname">101 Tôn Dật Tiên, Phú Mỹ Hưng, Q.7, TP.Hồ Chí Minh.</span>
								    	<input type="radio" name="storebranch">
								    	<span class="check"></span>
									</label>
								</div>
	                		</li>
	                		<li class="branchhide">
	                			<div class="rdo_fix rdo_far">
								    <label>
								    	<span class="branchname">189/4 Trường Chinh, P. Tân Hưng Thuận, Q.12, TP.Hồ Chí Minh.</span>
								    	<input type="radio" name="storebranch">
								    	<span class="check"></span>
									</label>
								</div>
	                		</li>
	                		<li class="branchhide">
	                			<div class="rdo_fix rdo_far">
								    <label>
								    	<span class="branchname">639 Hương Lộ 2,Phường Bình Trị Đông,Quận Bình Tân,TP. Hồ Chí Minh.</span>
								    	<input type="radio" name="storebranch">
								    	<span class="check"></span>
									</label>
								</div>
	                		</li>
	                		<li class="branchhide">
	                			<div class="rdo_fix rdo_far">
								    <label>
								    	<span class="branchname">Siêu thị trang trí Nội thất Thái Lan Index Living Mall, Tòa nhà H2, 196 Hoàng Diệu,P.8 , Q.4, TP.Hồ Chí Minh.</span>
								    	<input type="radio" name="storebranch">
								    	<span class="check"></span>
									</label>
								</div>
	                		</li>
	                		<li class="branchhide">
	                			<div class="rdo_fix rdo_far">
								    <label>
								    	<span class="branchname">Tầng trệt, lầu 1, Cao ốc Lương Định Của, P. An Phú, Q. 2, TP.Hồ Chí Minh.</span>
								    	<input type="radio" name="storebranch">
								    	<span class="check"></span>
									</label>
								</div>
	                		</li>
	                		<li class="branchhide">
	                			<div class="rdo_fix rdo_far">
								    <label>
								    	<span class="branchname">101 Tôn Dật Tiên, Phú Mỹ Hưng, Q.7, TP.Hồ Chí Minh.</span>
								    	<input type="radio" name="storebranch">
								    	<span class="check"></span>
									</label>
								</div>
	                		</li>
                        </ul>
                        <p class="blue seemoregift hidestore">Xem thêm 32 siêu thị khác </p>
                        <div class="text_input receive">
		                    <label>Thời gian nhận hàng </label>
		                    <p class="filterprice">
	                        	<select name="price" id="price">
								    <option value="1">Hôm nay (01/08/2017)</option>
								    <option value="2">Thứ 3 (02/08/2017)</option>
								    <option value="1">Thứ 4 (03/08/2017)</option>
								</select>
	                        </p>
		                </div>
					</div>
					<p class="agree_rule">Bằng cách thanh toán, bạn đồng ý với <a href="#" title="Quy định website" class="blue">quy định</a> của chúng tôi.</p>
					<a href="#" title="Thanh toán tại nhà" class="btn_payoffline btn_payment" id="btnoffline">
						THANH TOÁN TẠI NHÀ
						<span>Không mua không sao</span>
					</a>
                </div>
			</form>
		</div>
@endsection