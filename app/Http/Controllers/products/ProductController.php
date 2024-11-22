<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::simplePaginate(5);
        return view('products/show',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products/add');
    }

    public function store(StorePostRequest $request)
    {
        // $vaild=$request->validated();

        Product::create($request->validated());
        return redirect()->route('products.index')->with('success','sucessfully created');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($product)
    {
        // dd(hello);
        $productu = Product::findOrFail($product);
        // dd($prot->id);
        return view('products/edit',compact('productu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request,Product $product)
    {
        // Product::create($request->validated());
        $product->update($request->validated());
        // dd($product);
        return redirect()->route('products.index')->with('success','successfully updated');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // DB::table('products')
       $product->delete();
        return redirect()->route('products.index')->with('danger','product deleted successfully');
    }
}



    // public function update(Request $requests, string $id)
    // {
    //     // dd("hello");
    //     $inputs=[
    //     'name' => $requests->name,
    //     'discription' => $requests->discription,
    //     'price' => $requests->price,
    //     'stock' => $requests->stock,
    //     ];
    //     // dd($inputs);
    //     $product = Product::where('id',$id)->update($inputs);
    //     // dd($product);

    //     return redirect()->route('products.list')->with('success','successfully updated');
    // }