<?php

namespace App\Http\Controllers;

use App\Models\Catogery;
use Illuminate\Http\Request;

class CatogeryController extends Controller
{

    public function index()
    {
        $data['catogeries'] = Catogery::orderBy('created_at', 'DESC')->get();
        return view('admin.category.index' , $data);
    }


    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);

        $active = '';
        if (isset($request->is_active)){
            $active = 1;
        }else{
            $active = 0;
        }

        Catogery::create([
            'name' => ucwords($request->name),
            'is_active' => $active,
        ]);;

        return redirect('category')->with('success','category created successfully.');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
      $data['category'] =   Catogery::where('id',$id)->first();
        return view('admin.category.edit' , $data);
    }


    public function update(Request $request, $id)
    {

        $category = Catogery::findOrFail($id);
        $request->validate([
            'name' => 'required',
        ]);

        $active = '';
        if (isset($request->is_active)){
            $active = 1;
        }else{
            $active = 0;
        }

        $category->update([
            'name' => ucwords($request->name),
            'is_active' => $active,
        ]);
        return redirect('category')->with('success','category created successfully.');
    }


    public function destroy($id)
    {
        //
    }
}
