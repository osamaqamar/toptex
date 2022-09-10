<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AllOrderController extends Controller
{

    public function index()
    {
        $data['orders'] = Order::orderBy('id', 'DESC')->get();
        return view('admin.order.index',$data);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {
        //
    }
}
