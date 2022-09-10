<?php

namespace App\Http\Controllers;

use App\Models\Catogery;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {
      $id =  array_keys($request->all());

        if (isset($id[0]) && !is_null($id[0])){
            $data['Products'] = Product::where('category_id',$id[0])->orderBy('created_at', 'DESC')->where('is_active' , 1)->get();
            $data['catogeries'] = Catogery::orderBy('created_at', 'DESC')->where('is_active' , 1)->get();
            return view('home',$data);
        }
      else{
          $data['Products'] = Product::orderBy('created_at', 'DESC')->where('is_active' , 1)->get();
          $data['catogeries'] = Catogery::orderBy('created_at', 'DESC')->where('is_active' , 1)->get();
          return view('home',$data);
      }


    }

    public function about()
    {
        $data['Products'] = Product::orderBy('created_at', 'DESC')->where('is_active' , 1)->get();
        $data['catogeries'] = Catogery::orderBy('created_at', 'DESC')->where('is_active' , 1)->get();
        return view('about',$data);
    }

    public function detailEdit($id)
    {
        $data['Products'] = Product::where('id', $id)->where('is_active' , 1)->first();
        return view('detail', $data);
    }
}
