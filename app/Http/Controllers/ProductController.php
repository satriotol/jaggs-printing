<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $image = $request->image->store('public/products');
        $price_list = $request->price_list->store('public/products');
        $color = $request->color->store('public/products');
        Product::create([
            'title' => $request->title,
            'price' => $request->price,
            'material' => $request->material,
            'size' => $request->size,
            'image' => $image,
            'price_list' => $price_list,
            'color' => $color
        ]);
        session()->flash('success','Product Create Successfully');
        return redirect(route('product.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.product.show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.create')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->only(['title','price','material','size']);
        if($request->hasFile('image')){
            $image = $request->image->store('public/products');
            $product->deleteImage();
            $data['image'] = $image;
        }
        if($request->hasFile('price_list')){
            $price_list = $request->price_list->store('public/products');
            $product->deleteImage();
            $data['price_list'] = $price_list;
        }
        if($request->hasFile('color')){
            $color = $request->color->store('public/products');
            $product->deleteImage();
            $data['color'] = $color;
        }
        $product->update($data);
        session()->flash('success','Post Updated Successfully');
        return redirect(route('product.show',$product->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // $product->delete();
        Storage::delete([$product->image,$product->price_list,$product->color]);
        $product->forceDelete();
        session()->flash('success','Product Deleted Successfully');
        return redirect(route('product.index'));
    }
}
