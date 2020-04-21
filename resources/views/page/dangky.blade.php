@extends('master')
@section('content')
 <section>
		<div class="boxsignin">
			<h1 class="titlelog titlesign">Đăng ký tài khoản</h1>
			<form action="{{route('dangky')}}" method="post" class="frm_signin" name="frmsignin" id="frmsignin">
                <input type="hidden"  name="_token" value="{{csrf_token()}}">
                @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            {{$err}}
                            @endforeach
                        </div>
                    @endif
                    @if(Session::has('thanhcong'))
                    <div class="alert alert-success">{{Session::get('thanhcong')}}</div>

                    @endif
                <input type="hidden"  name="_token" value="{{csrf_token()}}">
               
				<div class="text_input">
                    <input class="text" name="username" id="username" type="text" placeholder="Tên đăng nhập*" required>
                </div>
                <div class="text_input">
                    <input class="text" name="password" id="password" type="password" placeholder="Mật khẩu*" required>
                </div>
                <div class="text_input">
                    <input class="text" name="re-password" id="re-password" type="password" placeholder="Nhập lại mật khẩu*" required>
                </div>
                <div class="text_input">
                    <input class="text" name="name" id="name" type="text" placeholder="Họ và tên*" required>
                </div>
                <div class="text_input">
                    <input class="text" name="email" id="email" type="email" placeholder="Email*" required>
                </div>
                <div class="text_input">
                    <input class="text" name="phone" id="phone" type="text" placeholder="Số điện thoại*" required>
                </div>
                <div class="text_input">
                    <input class="text birthday" name="datebirth" id="datebirth" type="text" placeholder="Ngày sinh" >
                    <input class="text birthday" name="monthbirth" id="monthbirth" type="text" placeholder="Tháng sinh" >
                    <input class="text birthday" name="yearbirth" id="yearbirth" type="text" placeholder="Năm sinh" >
                </div>
                <div class="text_input">
                    <select name="city" id="city"> 
                    	<option value="0">Tỉnh/Thành phố*</option> 
                    	<option value="1">An Giang</option>
                    	<option value="2">An Giang</option>
                    	<option value="3">An Giang</option>
                    	<option value="4">An Giang</option>
                    </select>
                </div>
                <div class="text_input">
                    <input class="text" name="address" id="address" type="text" placeholder="Địa chỉ*" required>
                </div>
                <div class="text_input">
                    <p class="specialcheck">
                    	<label class="remember">
	                    	<input type="checkbox" name="agree" id="agree" class="check_box" required>
	                    	<span class="attachcheck"></span>
	                    	Tôi đồng ý với chính sách người dùng website.
                    	</label>
                    </p>
                </div>
                 <div class="text_input boxbtn">
                    <button type="submit" class="btn_login">
                    	<span>ĐĂNG KÝ</span>
                    </button>
                </div>
			</form>
		</div>
  </section>       

@endsection