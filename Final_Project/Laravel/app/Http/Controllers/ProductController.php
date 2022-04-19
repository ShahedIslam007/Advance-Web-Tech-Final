<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function VendorProducts(Request $request)
    {
        $product = Product::where('Name', $request->CompanyName)->get();

        return \view('pages.Vendor.VendorProducts')->with('product',$product);
    }


    //API.............

    public function APIList()
    {
        return Product::all();
    }

    public function APIPost(Request $request)
    {
         $product = new Product();
         $product->Name = $request->Name;
         $product->Email = $request->Email;
         $product->Phone = $request->Phone;
         $product->Address = $request->Address;
         $product->Product = $request->Product;
         $product->Price = $request->Price;
         $product->Ratting = $request->Ratting;
         $product->save();

         $message="Product successfully added";
         return $message;
    }

    public function updateProduct(Request $request,$id)
     {
        if($request->isMethod('put'))
        {
          $data = $request->all();
          $product = Product::findOrFail($id);
          $product->Name = $data['Name'];
          $product->Email = $data['Email'];
          $product->Phone = $data['Phone'];
          $product->Address = $data['Address'];
          $product->Product = $data['Product'];
          $product->Price = $data['Price'];
          $product->Ratting = $data['Ratting'];
          $product->save();

          $message="Product successfully updated";
          return $message;
        }
    }

    public function deleteProduct($id=null)
    {
        Product::findOrFail($id)->delete();
        $message = 'Product Successfully deleted';
        return response()->json(['message'=>$message],200);
    }
}
