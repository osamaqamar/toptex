<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrderController extends Controller
{

    public function index()
    {

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

     $id =  $request->product_id ;
        $request->validate([
            'name' => 'required',
            'product_id' => 'required',
            'mobile' => 'required',
            'quantity' => 'required',
            'address' => 'required',
        ]);

        $product = Product::where('id', $id)->first();


        Order::create([
            'name' => ucwords($request->name),
            'product_name' => $product->name,
            'phone' => $request->mobile,
            'date' => date("Y-m-d"),
            'address' => $request->address,
            'quantity' => $request->quantity,
            'product_id' => $product->id,
            'is_active' => 1,
        ]);;

        return redirect()->back()->with('message', 'Order created successfully');
    }


    public function show($id)
    {
        $data['Products'] = Product::where('id', $id)->where('is_active' , 1)->first();
        return view('order',$data);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
