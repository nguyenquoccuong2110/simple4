<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NganhHang extends Model
{
    protected $table = "nganhhang";
    public function type_product(){
    	return this->belongTo('App\ProductType','id_nh','id_type')
    }
    
}
