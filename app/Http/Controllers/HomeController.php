<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\User;
use App\Models\UserDetail;


class HomeController extends Controller{



    function showblog(){
        $data['list_produk'] = Produk::all();
        return view('frontview.blog', $data);
    }

    function showblogdetail(){
        $data['list_user'] = User::withCount('produk')->get();
        $data['list_produk'] = Produk::all();
        return view('frontview.blogdetail', $data);
    }

    function showindex(){
        return view('frontview.index');
    }


    
    function showshow(){
        return view('backview.show');
    }

    function showproduk2(){
        return view('backview.produk2');
    }

    function showpromo(){
        return view('backview.promo');
    }

   
    function showsupplier(){
        return view('backview.supplier');
    }

    function showuser(){
        return view('backview.user');
    }

    function showlogin(){
        return view('frontview.login');
    }

    function showlogin2(){
        return view('backview.login2');
    }

    
    function showregister(){
        return view('frontview.register');
    }


    function showregister2(){
        return view('backview.register2');
    }

   

  
}