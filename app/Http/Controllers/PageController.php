<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Hash;
use Auth;
use App\ProductType;
use App\Product;

class PageController extends Controller
{
    public function getIndex(){
    	return view('page.trangchu');
    }

    public function getChebien(){
    	return view('page.chebienthucpham');
    }

     public function getChitiet(Request $req){
     	$sanpham = Product::where('id',$req->id)->first();
             
    	return view('page.chitietlovisong',compact('sanpham'));
    }
    

     public function getNganhhang(Request $type){
     	$sp_theoloai = Product::where('id_type',1)->get();
        $sp_khac = Product::where('id_type','<>',$type)->paginate(3);
        $loai = Product::where('id_type',$type)->get();
        $loai_sp = ProductType::where('id_type',$type)->first();
    	return view('page.nganhhangcon',compact('sp_theoloai','sp_khac','loai','loai_sp'));
    }

     public function getNganhhangdien(){
    	return view('page.nganhhangdiengiadung');
    }

     public function getTintuc(){
    	return view('page.tintuc');
    }

     public function getChitiettintuc(){
    	return view('page.chitiettintuc');
    }

     public function getGioithieu(){
    	return view('page.gioithieu');
    }

     public function getDangnhap(){
    	return view('page.dangnhap');
    }

    public function postDangnhap(Request $req){
        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'required|min:6|max:20'

        ],[
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu ít nhất 6 kí tự',
            'password.max' => 'Mật khẩu không quá 20 kí tự'

        ]);
        $credentials = array('email' => $req-> email, 'password' => $req->password );
        if(Auth::attempt($credentials)){
            return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        }
        else
        {
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập thành công']);
            
        }        

    }

    public function getDangky(){
    	return view('page.dangky');
    }

    public function postDangky(Request $req){
        $this->validate($req,
            [
                'name'=>'required|max:225',
                'email'=>'required|email|max:225|unique:users,email,{$id},id',
                'phone'=>'required',
                'username'=>'required|max:225|unique:users,username,{$id},id',
                'password' => 'required|min:6|max:20',
                're_password' => 'required|same:password'
                            
            ],[
                'name.required'=>'Vui lòng nhập tên',
                'name.max'=>'Vượt quá ký tự giới hạn',
                'email.required'=>' Vui lòng nhập Email',
                'email.email'=>'Vui lòng nhập đúng định dạng Email',
                'email.unique'=>'Email đã tồn tại',
                'phone.required'=>'Vui lòng số điện thoại',
                'username.require'=>'Vui lòng nhập tên đăng nhập',
                'username.unique'=>'Tên đăng nhập đã tồn tại ',
                'password.required' => 'Vui lòng nhập mật khẩu',
                're_password' => 'required|same:password',
                'password.min' => 'Mật khẩu ít nhất 6 ký tự'
            ]);
        $user = new User();
        $user-> username = $req-> username; 
        $user-> password = Hash::make($req-> password);
        $user-> name = $req-> name; 
        $user-> email = $req-> email;
        $user-> phone = $req-> phone;           
        $user-> datebirth = $req-> datebirth;
        $user-> monthbirth = $req-> monthbirth;
        $user-> yearbirth = $req-> yearbirth;
        $user-> city = $req-> city;       
        $user-> address = $req-> address;        
        $user-> save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');

    }

    public function getSosanh(){
    	return view('page.sosanh');
    }

     public function getThongtingiohang(){
    	return view('page.thongtingiohang');
    }

     public function getHoantatgiohangtaisieuthi(){
    	return view('page.hoantatgiohangtaisieuthi');
    }

     public function getHoantatgiohangtainha(){
    	return view('page.hoantatgiohangtainha');
    }
}
