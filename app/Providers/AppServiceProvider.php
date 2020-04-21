<?php

namespace App\Providers;
use App\ProductType;
use App\Slide;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $loai_sp1 = ProductType::where('id_nganh',1)->where('menu',1)->get();                   
            $view->with('loai_sp1',$loai_sp1);
            
            $loai_sp2 = ProductType::where('id_nganh',1)->where('menu',2)->get();                   
            $view->with('loai_sp2',$loai_sp2);

            $loai_sp3 = ProductType::where('id_nganh',1)->where('menu',3)->get();                   
            $view->with('loai_sp3',$loai_sp3);

            $loai_sp4 = ProductType::where('id_nganh',2)->where('menu',1)->get();                   
            $view->with('loai_sp4',$loai_sp4);
            
            $loai_sp5 = ProductType::where('id_nganh',2)->where('menu',2)->get();                   
            $view->with('loai_sp5',$loai_sp5);

            $loai_sp6 = ProductType::where('id_nganh',2)->where('menu',3)->get();                   
            $view->with('loai_sp6',$loai_sp6);

            $loai_sp7 = ProductType::where('id_nganh',3)->where('menu',1)->get();                   
            $view->with('loai_sp7',$loai_sp7);
            
            $loai_sp8 = ProductType::where('id_nganh',4)->where('menu',1)->get();                   
            $view->with('loai_sp8',$loai_sp8);

            $loai_sp9 = ProductType::where('id_nganh',5)->where('menu',1)->get();                   
            $view->with('loai_sp9',$loai_sp9);

            $loai_sp10 = ProductType::where('id_nganh',6)->where('menu',1)->get();                   
            $view->with('loai_sp10',$loai_sp10);

            $loai_sp11 = ProductType::where('id_nganh',6)->where('menu',2)->get();                   
            $view->with('loai_sp11',$loai_sp11);

            $hinh1 = Slide::where('vt',1)->get();
            $view->with('hinh1',$hinh1);

            $hinh2 = Slide::where('vt',2)->get();
            $view->with('hinh2',$hinh2);

            $hinh3 = Slide::where('vt',3)->get();
            $view->with('hinh3',$hinh3);


            
        });
    }
}
