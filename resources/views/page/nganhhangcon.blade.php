@extends('master')
@section('content')
<section>
    	<div class="bannermain">
			<a href="#" title="#" class="boxlazy">
				<img data-src="source/img/banner-lovisong.jpg" src="source/img/loader.gif" class="lazyload" alt="banner lò vi sóng">
			</a>
		</div>
		<ul class="list_product">			
			<li>												
				<div class="itemproduct">	
					@foreach($sp_theoloai as $sp)						
					<div class="proimg">
						
						<a href="#" title="#" class="boxlazy">
							<img data-src="source/img/{{$sp->image}}" src="source/img/loader.gif" alt="#" class="lazyload">
						</a>
					</div>
					<a href="{{route('chitietlovisong',$sp->id_sp)}}" title="#" class="boxname">
						<h3 class="nameproduct">{{$sp->name}} </h3>
						
					</a>
					<div class="boxprice">						
						<p class="priceline">
							{{number_format($sp->unit_price)}} Đ
						</p>
						<p class="pricesale">
							{{number_format($sp->promotion_price)}} Đ
						</p>

					</div>
					<div class="box_compare">
						 <label>So sánh
					    	<input type="checkbox" id="compare" name="compare">
					    	<span class="check"></span>
					    </label>
					</div>
					
				</div>
				@endforeach	
			</li>					
		</ul>
</section>
@endsection