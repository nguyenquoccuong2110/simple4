<header class="header">
		<div class="wrapheader">
			<div class="container_screen">
				<a class="boxlogo" title="Simple Home" href="#">
					<img src="source/img/logo.png" alt="logo Simple Home">
				</a>
	    		<form class="frm_tim">
	    			<input class="data_input" type="text" name="txt_search" id="txt_search" placeholder="Search">
	    			<button type="submit" class="btn_search"></button>
	    		</form>
	    		<div class="hotline_info"> 
	    			<p class="hotline">
	    				<span class="texthotline">HOTLINE:</span> <span class="phone">028.3856 3388</span>
	    			</p>
	    			<p class="online">(Online từ 8h30 - 21h từ Thứ 2 - Chủ Nhật)</p> 
	    		</div>
	    		<a class="login" title="Đăng nhập tài khoản" href="{{route('dangnhap')}}" rel="nofollow">
					Đăng nhập
				</a>
				<a class="boxcart" title="Thanh toán giỏ hàng" href="{{route('thongtingiohang')}}" rel="nofollow">
					<i class="iconsprites_homecart"></i>
				</a>
			</div>
		</div>
		<nav>
			<ul>
				<li>
					<a href="{{route('nganhhangdiengiadung')}}" title="Điện gia dụng">Điện gia dụng</a>
					<i></i>
					<div class="sub_nav">
                		<div class="box_cate_pro">
                			<ul class="list_category">
	                           @foreach($loai_sp1 as $loai)
	                            <li>
	                            	<a href="{{route('nganhhangcon',$loai->id_type)}}">{{$loai->name}}</a>
	                            </li>

	                            @endforeach

	            	  		 </ul>
	            	  		 @foreach($hinh1 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		 @endforeach
                		</div>
                		<div class="box_cate_pro">
                			<ul class="list_category">
	                            @foreach($loai_sp2 as $loai)
	                            <li>
	                            	<a href="#">{{$loai->name}}</a>
	                            </li>

	                            @endforeach
	            	  		 </ul>
	            	  		 @foreach($hinh2 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		  @endforeach
                		</div>
                		<div class="box_cate_pro">
                			<ul class="list_category">
	                            @foreach($loai_sp3 as $loai)
	                            <li>
	                            	<a href="#">{{$loai->name}}</a>
	                            </li>

	                            @endforeach
	            	  		 </ul>
	            	  		 @foreach($hinh3 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		  @endforeach
                		</div>
	                </div>
				</li>
				<li>
					<a href="#" title="nội thất">nội thất</a>
					<i></i>
					<div class="sub_nav">
                		<div class="box_cate_pro">
                			<ul class="list_category">
	                            @foreach($loai_sp4 as $loai)
	                            <li>
	                            	<a href="#">{{$loai->name}}</a>
	                            </li>

	                            @endforeach

	            	  		 </ul>
	            	  		 @foreach($hinh1 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		 @endforeach
                		</div>
                		<div class="box_cate_pro">
                			<ul class="list_category">
	                            @foreach($loai_sp5 as $loai)
	                            <li>
	                            	<a href="#">{{$loai->name}}</a>
	                            </li>

	                            @endforeach

	            	  		 </ul>
	            	  		 @foreach($hinh2 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		 @endforeach
                		</div>
                		<div class="box_cate_pro">
                			<ul class="list_category">
	                            @foreach($loai_sp6 as $loai)
	                            <li>
	                            	<a href="#">{{$loai->name}}</a>
	                            </li>

	                            @endforeach

	            	  		 </ul>
	            	  		 @foreach($hinh3 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		 @endforeach
                		</div>
	                </div>
				</li>
				<li>
					<a href="#" title="gia dụng">gia dụng</a>
					<i></i>
					<div class="sub_nav">
                		<div class="box_cate_pro">
                			<ul class="list_category">
	                            @foreach($loai_sp7 as $loai)
	                            <li>
	                            	<a href="#">{{$loai->name}}</a>
	                            </li>

	                            @endforeach
	            	  		 </ul>
	            	  		 @foreach($hinh1 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		 @endforeach
                		</div>
                		<div class="box_cate_pro">
                			<ul class="list_category"></ul>
                			@foreach($hinh2 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		 @endforeach
                		</div>
                		<div class="box_cate_pro">
                			<ul class="list_category"></ul>
	            	  		 @foreach($hinh3 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		 @endforeach
                		</div>
	                </div>
				</li>
				<li>
					<a href="#" title="hàng trang trí">hàng trang trí</a>
					<i></i>
					<div class="sub_nav">
                		<div class="box_cate_pro">
                			<ul class="list_category">
	                            @foreach($loai_sp8 as $loai)
	                            <li>
	                            	<a href="#">{{$loai->name}}</a>
	                            </li>

	                            @endforeach
	            	  		 </ul>
	            	  		 @foreach($hinh1 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		 @endforeach
                		</div>
                		<div class="box_cate_pro">
                			<ul class="list_category"></ul>
                			@foreach($hinh2 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		 @endforeach
                		</div>
                		<div class="box_cate_pro">
                			<ul class="list_category"></ul>
	            	  		 @foreach($hinh3 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		 @endforeach
                		</div>
	                </div>
				</li>
				<li>
					<a href="#" title="dịch vụ">dịch vụ</a>
					<i></i>
					<div class="sub_nav">
                		<div class="box_cate_pro">
                			<ul class="list_category">
	                            @foreach($loai_sp9 as $loai)
	                            <li>
	                            	<a href="#">{{$loai->name}}</a>
	                            </li>

	                            @endforeach
	            	  		 </ul>
	            	  		 @foreach($hinh1 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		 @endforeach
                		</div>
                		<div class="box_cate_pro">
                			<ul class="list_category"></ul>
                			@foreach($hinh2 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		 @endforeach
                		</div>
                		<div class="box_cate_pro">
                			<ul class="list_category"></ul>
	            	  		 @foreach($hinh3 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		 @endforeach
                		</div>
	                </div>
				</li>
				<li>
					<a href="#" title="chuyên mục">chuyên mục</a>
					<i></i>
					<div class="sub_nav">
                		<div class="box_cate_pro">
                			<ul class="list_category">
	                            @foreach($loai_sp10 as $loai)
	                            <li>
	                            	<a href="#">{{$loai->name}}</a>
	                            </li>

	                            @endforeach
	            	  		 </ul>
	            	  		 @foreach($hinh1 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		 @endforeach
                		</div>
                		<div class="box_cate_pro">
                			<ul class="list_category">
	                            @foreach($loai_sp11 as $loai)
	                            <li>
	                            	<a href="#">{{$loai->name}}</a>
	                            </li>

	                            @endforeach
	            	  		 </ul>
	            	  		 @foreach($hinh2 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		 @endforeach
                		</div>
                		<div class="box_cate_pro">
                			<ul class="list_category">
                				<li>
	                            	<a href="#" title="#"></a>
	                            </li>
	            	  		 </ul>
	            	  		 @foreach($hinh3 as $hinh)
	            	  		 <a href="#" title="Khuyến mãi tuần" class="img_pro_week boxlazy">
	            	  		 	<img data-src="source/img/{{$hinh->image}}" src="source/img/loader.gif" alt="khuyến mãi tuần" width="360" height="188" class="lazyload">
	            	  		 </a>
	            	  		 @endforeach
                		</div>
	                </div>
				</li>
			</ul>
		</nav>
	</header>