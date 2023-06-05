<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_product()
    {
   
    	return view('admin.add_product',['product'=> Product::get()
    ]);
    }

    public function create()
    {
    	return view('admin.create_product');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'name' => 'required',
    		'category' => 'required',
    		'description' => 'required',
    		'date' => 'required',
    		'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
    	]);


    	$imageName = time().'.'.$request->image->extension();
    	$request->image->move(public_path('product'),$imageName);

    	$product = new Product;
    	$product->image = $imageName;
    	$product->name = $request->name;
    	$product->category = $request->category;
    	$product->description =$request->description;
    	$product->date = $request->date;

    	$product->save();

    	return back()->withSuccess('Product created !!!');
    }

    public function update($id)
    {
    	$product = Product::where('id',$id)->first();

    	return view('admin.update_product',['product' => $product]);
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'date' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        $product = Product::where('id',$id)->first();


        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('product'),$imageName);
        $product->image = $imageName;
        }



    
        $product->name = $request->name;
        $product->category = $request->category;
        $product->description =$request->description;
        $product->date = $request->date;

        $product->save();

        return back()->withSuccess('Product Updated !!!');
    }


    public function delete($id)
    {
        $product=Product::where('id',$id)->first();

        $product->delete();
        return back()->withSuccess('Product Deleted !!!');
    }


}
