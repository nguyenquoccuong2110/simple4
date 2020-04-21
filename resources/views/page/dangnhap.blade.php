@extends('master')
@section('content')
		<div class="boxlogin">
			<h1 class="titlelog">Đăng nhập tài khoản</h1>
			<form action="{{route('dangnhap')}}" method="post" class="frm_signin" name="frmsignin" id="frmsignin">
                @if(Session::has('flag'))
                    <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                    @endif
				<div class="text_input">
                    <input class="text" name="username" id="username" type="text" placeholder="E-mail*" required>
                </div>
                <div class="text_input">
                    <input class="text" name="password" id="password" type="password" placeholder="Mật khẩu*" required>
                </div>
                <div class="text_input">
                    <p class="specialcheck">
                    	<label class="remember">
	                    	<input type="checkbox" name="rememberpass" id="rememberpass" class="check_box" required>
	                    	<span class="attachcheck"></span>
	                    	Ghi nhớ tài khoản
                    	</label>
                    </p>
                    <a class="forgotpass" href="#" target="_blank">Quên mật khẩu? </a>
                </div>
                 <div class="text_input boxbtn">
                    <button type="submit" class="btn_login">
                    	<span>ĐĂNG NHẬP </span>
                    </button>
                </div>
                <p class="textlogin">
                	Quý khách chưa tạo tài khoản, vui lòng đăng kí tại <a href="{{route('dangky')}}" title="Đăng ký tài khoản website">ĐÂY</a>
                </p>
			</form>
		</div>
@endsection