<?php

namespace App\Http\Controllers;

use App\Models\Catogery;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {

        $data['Products'] = Product::orderBy('created_at', 'DESC')->where('is_active' , 1)->get();

       return view('admin.product.index' , $data);
    }

    public function create()
    {
        $data['catogeries'] = Catogery::orderBy('created_at', 'DESC')->where('is_active' , 1)->get();
        return view('admin.product.create' ,$data);
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'image' => 'required',
            'date' => 'required',
            'description' => 'required',
        ]);

        $active = '';
        if (isset($request->is_active)){
            $active = 1;
        }else{
            $active = 0;
        }
        $images      = multipleImagesUpload($request->image, 'product/images');

        Product::create([
            'name' => ucwords($request->name),
            'color' => $request->color,
            'price' => $request->price,
            'date' => $request->date,
            'description' => $request->description,
            'category_id' => $request->category,
            'is_active' => $active,
            'image' => $images,
        ]);;

        return redirect('product')->with('success','product created successfully.');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $data['catogeries'] = Catogery::orderBy('created_at', 'DESC')->where('is_active' , 1)->get();
        $data['product'] = Product::where('id', $id)->first();
        return view('admin.product.edit',$data);
    }


    public function update(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'image' => 'required',
            'date' => 'required',
            'description' => 'required',
        ]);
        $active = '';
        if (isset($request->is_active)){
            $active = 1;
        }else{
            $active = 0;
        }
        $images      = multipleImagesUpload($request->image, 'product/images');


        $product->update([
            'name' => ucwords($request->name),
            'color' => $request->color,
            'price' => $request->price,
            'date' => $request->date,
            'description' => $request->description,
            'category_id' => $request->category,
            'is_active' => $active,
            'image' => $images,
        ]);;

        return redirect('product')->with('success','product created successfully.');

    }


    public function destroy($id)
    {
        //
    }
}
