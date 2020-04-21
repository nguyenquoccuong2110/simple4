 @extends('master')
 @section('content') 
  <section>
    	<div class="bannermain">
			<a href="#" title="#" class="boxlazy">
				<img data-src="source/img/banner-special.jpg" src="source/img/loader.gif" class="lazyload" alt="banner sofa">
			</a>
		</div>
		<div class="contentdetail">	
				
			<h1 class="fullnamepro">		
				{{$sanpham->name}}
			</h1>
			<div class="col_leftpro">
	            <i id="btn_clickup" class="iconsprites_clicktop top"></i>
	            <div class="list_img_style">
	                <ul class="">
	                  	<li class="item_img click_change_img active_img boxlazy">
	                    	<img class="img_each lazyload" id="01" alt="#" data-src="source/img/lo-vi-song-small1.jpg" src="source/img/loader.gif" val="source/img/{{$sanpham->image}}" >
	                  	</li>
	                  	<li class="item_img click_change_img boxlazy">
	                    	<img class="img_each lazyload" id="02" alt="#" data-src="source/img/lo-vi-song-small2.jpg" src="source/img/loader.gif" val="source/img/lo-vi-song-big2.jpg" >
	                  	</li>
	                  	<li class="item_img click_change_img boxlazy">
	                    	<img class="img_each lazyload" id="03" alt="#" data-src="source/img/lo-vi-song-small3.jpg" src="source/img/loader.gif" val="source/img/lo-vi-song-big3.jpg" >
	                  	</li>
	                  	<li class="item_img click_change_img boxlazy">
	                    	<img class="img_each lazyload" id="04" alt="#" data-src="source/img/lo-vi-song-small4.jpg" src="source/img/loader.gif" val="source/img/lo-vi-song-big4.jpg" >
	                  	</li>                    
	                </ul>
	            </div>
	            <i id="btn_clickdown" class="iconsprites_clickdown down"></i>
	            <div class="img_main">
	                <a href="#" class="zoom_main boxlazy" title="#">
	                    <img class="lazyload" id="zoom_index" alt="#" data-src="source/img/lo-vi-song-big1.jpg" src="source/img/loader.gif">
	                </a>
	                <div class="btn_zoom">
	                	<i class="iconsprites_zoombig"></i>	
	                	<i class="iconsprites_zoomsmall"></i>
	                </div>
	            </div>
          	</div>
          	<div class="col_rightpro">
          		<p class="namemanu">Nhà sản xuất: <span>Simplehome</span></p>
          		<div class="info_general">
          			<p class="info_sap">
						<span>Mã SAP: <b class="sapcode"> 135176</b></span> <span class="text_margin">|</span>
						<span>Loại: <b class="sapcode">A</b></span>
	            	</p>
	            	<div class="info_review">
						<a href="#" title="share facebook" class="box_face_like">
							<img src="source/img/demo-share.jpg" alt="#">
						</a>
                	</div>
          		</div>
            	<div class="box_price pricemarket">
                    <span class="titleprice">Giá thị trường:</span>
                    <span class="price_line">{{number_format($sanpham->unit_price)}} Đ</span>                                                             
				</div>
            	<div class="box_price">
                    <span class="titleprice">Giá bán:</span>
                    <span class="price_sale">{{number_format($sanpham->promotion_price)}}s Đ</span>                                                             
				</div>
				<div class="status_info">
                    <span>CÒN HÀNG</span> 
					<span class="popup_limit_stock"> Xem siêu thị còn hàng</span>
                </div>
                <p class="supplier"> Bán & Giao bởi <a href="#" title="Siêu thị điện máy Chợ Lớn">DIENMAYCHOLON</a></p>
                <button type="submit" class="btnfunction btnbuy"><span>Đặt mua</span></button>
                <button type="submit" class="btnfunction btncontact"><span>Liên hệ</span></button>
          	</div>
          	<div class="infomation_property">
          		<div class="box_fulltem">
          			<h3 class="name_property">
	          			THÔNG TIN CHUNG
	          		</h3>
	          		<div class="row_template">
	          			<div class="row_table">
	          				<div>Loại Sản Phẩm</div>
	          				<div>Lò Vi Sóng - Nướng Kết Hợp</div>
	          			</div> 
	          			<div class="row_table">
	          				<div>Model</div>
	          				<div>20MG65-L</div>
	          			</div>
	          			<div class="row_table">
	          				<div>Dung Tích</div>
	          				<div>20 Lít</div>
	          			</div>
	          			<div class="row_table">
	          				<div>Mức Công Suất</div>
	          				<div>Hoạt động với 6 mức công suất.</div>
	          			</div>
	          			<div class="row_table">
	          				<div>Chức Năng Chính</div> 
	          				<div>Nấu / Hâm / Nướng / Rã đông.</div> 
	          			</div>
	          			<div class="row_table">
	          				<div>Chức Năng Hâm Nóng</div> 
	          				<div>Có</div> 
	          			</div>
	          			<div class="row_table"> 
	          				<div>Công Nghệ Inverter (Biến Tần)</div> 
	          				<div>Không</div> 
	          			</div>
	          			<div class="row_table"> 
	          			 	<div>Chức Năng Nướng</div> 
	          			 	<div>Nướng bằng đèn.</div> 
	          			</div> 
	          			<div class="row_table"> 
	          			 	<div>Chức Năng Đối Lưu</div>
	          			 	<div>Không</div>
	          			</div> 
	          			<div class="row_table">
	          			 	<div>Nấu Nướng Kết Hợp</div>
	          			 	<div>3 mức nướng kết hợp vi sóng.</div> 
	          			</div> 
	          			<div class="row_table"> 
	          			 	<div>Chức Năng Rã Đông</div> 
	          			 	<div>Có</div> 
	          			</div>
	          			<div class="row_table"> 
	          			 	<div>Hẹn Giờ</div>
	          			 	<div>Tối đa 30 Phút.</div>
	          			</div> 
	          		</div>
	          		<h3 class="name_property">
	          			Các tiện ích khác
	          		</h3>
	          		<div class="row_template">
	          			<div class="row_table">
	          				<div>Bảng Điều Khiển</div>
	          				<div>Nút xoay cơ.</div>
	          			</div>
	          			<div class="row_table">
	          				<div>Kiểu Mở Cửa</div>
	          				<div>Tay cầm kim loại.</div> 
	          				</div> 
	          			<div class="row_table"> 
	          				<div>Phụ Kiện</div> 
	          				<div>Đĩa xoay : 245 mm.</div>
	          			</div> 
	          		</div>
	          		<h3 class="name_property">
	          			Thông số kỹ thuật
	          		</h3>
	          		<div class="row_template">
	          			<div class="row_table">
	          				<div>Màu Sắc</div> 
	          				<div>Đen</div> 
	          			</div>
	          			<div class="row_table">
	          				<div>Chất Liệu</div> 
	          				<div>Vỏ ngoài thép sơn tĩnh điện.</div> 
	          			</div> 
	          			<div class="row_table"> 
	          				<div>Điện Áp</div> 
	          				<div>220V-50Hz</div> 
	          			</div> 
	          			<div class="row_table"> 
	          				<div>Công Suất</div> 
	          				<div>800W</div> 
	          			</div> 
	          		</div>
					<h3 class="name_property">
	          			Xuất xứ & bảo hành
	          		</h3>
	          		<div class="row_template">
						<div class="row_table">
	                        <div>Hãng sản xuất</div>
	                        <div>SIMPLEHOME ( Thương hiệu USA )</div>
	                    </div>
	                    <div class="row_table">
	                        <div>Xuất xứ</div>
	                        <div>Trung Quốc</div>
	                    </div>
	                    <div class="row_table">
	                        <div>Bảo hành</div>
	                        <div>24 tháng</div>
	                    </div>
					</div>
					<article id="bai-viet" class="area_article">
						<p>Bài viết sản phẩm ...Đang cập nhật.....</p>
					</article>
          		</div>
          		<p class="readmore"> Xem thông tin đầy đủ</p>
				<div class="detail_more">
					<p>Gọi <a class="hotlinedetail" rel="nofollow" href="tel:02838563388" title="hotline mua hàng">028-3856 3388 </a> để được tư vấn và mua hàng miễn phí </p>
					<ul class="info_more">
						<li>
							<a href="#" title="#" target="_blank">Xem thêm chính sách bảo hành và đổi trả sản phẩm</a>
						</li>
						<li>
							<span>Hệ thống trung tâm bảo hành</span> <a href="#" class="tag_blue" target="_blank"> (Xem chi tiết) </a>
						</li>
						<li>
							<span>Đổi trả sản phẩm trong vòng 30 ngày.</span>
						</li>
						<li>
							<span>Miển phí công lắp đặt và vận chuyển nội đô</span> <a href="#" class="tag_blue" target="_blank">
							(Xem chi tiết) </a>
						</li>
					</ul>
				</div>
				<h3 class="name_property">
          			Ý kiến khách hàng
          		</h3>
          		<div class="left_review" id="box_review">
					<form action="#" method="get" class="frm_inputdata">
						<textarea class="textarea_review" placeholder="Gõ vào đây..." rows="4" required="required"></textarea>
						<div class="show_user">
						    <div class="send_now">
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
						        <input class="infoname" name="sendwithname" type="text" placeholder="Họ tên (bắt buộc)" maxlength="50" required="required">
						        <input class="infoname" name="sendwithemail" type="text" placeholder="Email">
						        <button type="submit" class="btn_sentcomment btn_sentcustomer">
						        	<span>Gửi</span>
						        </button>                           
						    </div>        
						</div>
					</form>
					<div class="data_show">
						<div class="comment_ask">
							<span class="iconcom_user">NTT</span>
							<strong>Nguyễn Thanh Thúy</strong>
							<div class="infocom_ask">Cho mình hỏi ở đâu còn hàng vậy Ad ?</div>
							<div class="relate_infocom">
								<span class="reply_comment">
									<span class="reply replied">Trả lời (01)</span>
								</span>
								<span class="num_like">
									<i class="iconsprites_liked"></i><span class="like liked"> Thích (04)</span>
								</span>
								<span class="time_post"> 3 ngày trước</span>
							</div>
							<div class="replie_form">
								<form action="#" method="get" class="frm_inputdata">
									<textarea class="textarea_review" placeholder="Gõ vào đây..." rows="4" required="required"></textarea>
									<div class="show_user">
									    <div class="send_now">
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
									        <input class="infoname" name="sendwithname" type="text" placeholder="Họ tên (bắt buộc)" maxlength="50" required="required">
									        <input class="infoname" name="sendwithemail" type="text" placeholder="Email">
									        <button type="submit" class="btn_sentcomment btn_sentcustomer">
									        	<span>Gửi</span>
									        </button>                           
									    </div>        
									</div>
								</form>
							</div>
						</div>
						<div class="comment_reply">
							<i class="arrow_box"></i>
							<div class="comment_ask">
								<span class="iconcom_user">NQ</span>
								<strong>Nhật Quang</strong>
								<b class="qtv">Quản trị viên</b>
								<div class="infocom_ask">
									<div class="conticon">
										<div class="cmtcontent">
											Chào bạn, để biết thêm chi tiết vui lòng gọi 028 39505060 hoặc để lại số điện thoại chúng tôi sẽ liên hệ sớm với bạn. Cám ơn bạn đã quan tâm đến Siêu thị điện máy Chợ Lớn. Chào thân ái !
										</div>
										<div class="relate_infocom">
											<span class="reply_comment"><span class="reply">Trả lời </span></span>
											<span class="numlike"><span class="like"> Thích</span>
											</span>
											<span class="time_post_after"> 2 ngày trước</span>
										</div>
										<div class="replie_form">
											<form action="#" method="get" class="frm_inputdata">
												<textarea class="textarea_review" placeholder="Gõ vào đây..." rows="4" required="required"></textarea>
												<div class="show_user">
												    <div class="send_now">
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
												        <input class="infoname" name="sendwithname" type="text" placeholder="Họ tên (bắt buộc)" maxlength="50" required="required">
												        <input class="infoname" name="sendwithemail" type="text" placeholder="Email">
												        <button type="submit" class="btn_sentcomment btn_sentcustomer">
												        	<span>Gửi</span>
												        </button>                           
												    </div>        
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="comment_ask">
								<span class="iconcom_user">NL</span>
								<strong>Như Linh</strong>
								<div class="infocom_ask">
									<div class="conticon">
										<div class="cmtcontent">
											Sp này đẹp, sang trọng quá. Lại có quà tặng nữa !
										</div>
										<div class="relate_infocom">
											<span class="reply_comment"><span class="reply">Trả lời </span></span>
											<span class="numlike"><span class="like"> Thích</span>
											</span>
											<span class="time_post_after"> 2 ngày trước</span>
										</div>
										<div class="replie_form">
											<form action="#" method="get" class="frm_inputdata">
												<textarea class="textarea_review" placeholder="Gõ vào đây..." rows="4" required="required"></textarea>
												<div class="show_user">
												    <div class="send_now">
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
												        <input class="infoname" name="sendwithname" type="text" placeholder="Họ tên (bắt buộc)" maxlength="50" required="required">
												        <input class="infoname" name="sendwithemail" type="text" placeholder="Email">
												        <button type="submit" class="btn_sentcomment btn_sentcustomer">
												        	<span>Gửi</span>
												        </button>                           
												    </div>        
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="answer_comment"><div class="input_comment"></div></div>
							</div>
							<a class="more_asked" href="#" title="Xem thêm">Xem thêm 2 câu trả lời khác</a>
						</div>
					</div>
					<ul class="paging_review">
						<li><a href="#" title="Trang trước" class="icon_first">Trước</a></li>
			  		    <li><a class="active" title="Trang 1">1</a></li>
	  				  	<li><a href="#" title="Trang 2">2</a></li>
	  				  	<li><a href="#" title="Trang 3">3</a></li>
			    		<li><a href="#" title="Trang sau" class="icon_end">Sau</a></li>
			 		</ul>
				</div>
          	</div>
		</div>
    </section>
    <section class="box_popup">
		<div class="popup_outside_zoom popup_general">
			<div class="popup_hidden"></div>
		    <div class="popup_position_zoom">
		        <div class="popup_content_zoom">
		            <div class="close_comment">
		            	<span class="text_closepopup">Đóng</span>
		            </div>
	                <div class="body_popup">
	                	<img id="zoom_index2" alt="#" src="source/img/lo-vi-song-big1.jpg">
	                </div>
		        </div>
		    </div>
		</div>
	</section>
	<section class="box_popup">
		<div class="popup_outside_contact popup_general">
			<div class="popup_hidden"></div>
		    <div class="popup_position_contact">
		        <div class="popup_content_contact">
		            <div class="close_comment">
		            	<span class="text_closepopup">Đóng</span>
		            </div>
	                <div class="body_popup">
	                	<div class="info_contact">
							<h3>
								LIÊN HỆ MUA HÀNG
							</h3>
							<p>
								Tòa nhà H2, 196 Hoàng Diệu, P.8, Q.4, TP.HCM
							</p>
							<p>
								<span>Điện thoại:</span> <b class="tag_red">(08) 3825 3212 - (08) 3856 3388</b>
							</p>
							<p>
								<a rel="nofollow" href="mailto:online@dienmaycholon.com.vn" title="Gửi mail cho siêu thị">Email: online@dienmaycholon.com.vn</a>
							</p>
							<form class="frm_contact" action="" method="">
								<h3>
									LIÊN HỆ VỚI CHÚNG TÔI
								</h3>
								<p>
									<strong class="red">(*) </strong> Nội dung bắt buộc
								</p>
								<div class="text_input">
				                    <label>Họ tên <strong class="red">(*)</strong> </label>
				                    <input class="text" name="name" id="name" value="" type="text" placeholder="Nguyễn Văn A" required="required">
				                </div>
				                <div class="text_input">
				                    <label>Điện thoại <strong class="red">(*)</strong> </label>
				                    <input class="text" name="phone" id="phone" value="" type="text" placeholder="1234567890" required="required">
				                </div>
				                <div class="text_input">
				                    <label>Nội dung liên hệ <strong class="red">(*)</strong> </label>
				                    <textarea name="note" id="note" placeholder="Nội dung cần liên hệ" class="text" rows="4" required="required"></textarea>
				                </div>
				                <div class="text_input">
				                    <button type="submit" class="btn_contact">
				                    	<span>GỬI LIÊN HỆ </span>
				                    </button>
				                </div>
							</form>
						</div>
	                </div>
		        </div>
		    </div>
		</div>
	</section>
	<section class="box_popup">
		<div class="popup_outside_stock popup_general">
			<div class="popup_hidden"></div>
		    <div class="popup_position_stock">
		        <div class="popup_content_stock">
		            <div class="close_comment">
		            	<span class="text_closepopup">Đóng</span>
		            </div>
	                <div class="body_popup">
	                	<form action="#" method="get" class="sumit_cn">
			            	<div class="maps_cn">
			            		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.7360193075847!2d106.6622042143502!3d10.7548166923362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa74756f802908594!2zxJBp4buHbiBNw6F5IENo4bujIEzhu5tu!5e0!3m2!1svi!2s!4v1476260073854" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen=""></iframe>
			            	</div>
			            	<div class="popup_box_cn">
			            		<p>SOFA GIƯỜNG MARK PAB-35N6S-P3</p>
			            		<div class="price_info">
	                               	<div class="price_normal">
										<span>Giá thị trường:</span> 
										<strong>6.990.000 Đ</strong>
									</div>
	                                <div class="price_sale2">
	                                    <span>Giá bán:</span> 
	                                    <strong class="red">3.990.000 VNĐ</strong>                              
									</div>
									<p class="branch_stock">34 Siêu thị còn hàng</p>
		                            <div class="branch_instock">
			                            <select name="chinh_nhanh_1" id="chinh_nhanh_1" class="filterprice">
										    <option value="0" selected="selected">Tất Cả Khu Vực</option>
										    <option value="1">TP Hồ Chí Minh</option>
										</select>		                                	 		                                
										<select name="chinh_nhanh_2" id="chinh_nhanh_2" class="filterprice">
										    <option value="0" selected="selected">Tất Cả Quận/Huyện</option>
										    <option value="1">QUẬN 5 (TRỤ SỞ CHÍNH)</option>
										    <option value="2">TÂN PHÚ</option>
										    <option value="3">QUẬN 7</option>
										    <option value="4">QUẬN 3</option>
										</select>		                                	 		                               
										<div class="branch_instock_sub">
		                        	 		<ul>
		                        	 			<li>
		                        	 				<input type="radio" class="chi_nhanh_radio" name="chi_nhanh_radio" checked="checked">
		                        	 				<span class="name_store_cc">QUẬN 5 (TRỤ SỞ CHÍNH)</span>
		                        	 				<p>Lô G, chung cư Hùng Vương, P.11</p>
		                        	 			</li>
		                        	 			<li>
		                        	 				<input type="radio" class="chi_nhanh_radio" name="chi_nhanh_radio">
		                        	 				<span class="name_store_cc">QUẬN 3 </span>
		                        	 				<p>590 Cách Mạng Tháng Tám, P.11, Q.3</p>
		                        	 			</li>
		                        	 		</ul>
				                        </div>
			                        </div>
			                        <button class="btn_getstock" type="button">ĐẶT GỬI HÀNG TẠI SIÊU THỊ NÀY</button>
			                        <div class="footer_moreinfo">
	                            		<span>(028) 3856 3388</span>
	                            		<p>(Online từ 8h30 đến 21h00 từ Thứ 2 - Chủ Nhật)</p>
			                        </div>
	                            </div>
			            	</div>
			            </form>
	                </div>
		        </div>
		    </div>
		</div>
	</section>
@endsection