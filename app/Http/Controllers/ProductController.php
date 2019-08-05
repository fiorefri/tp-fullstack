<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Offer;
use Illuminate\Http\Request;

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
        return view('productos', compact('products'));
    }

    public function rostro()
    {
        $categorys     = Category::select('id')->where('id', '=', 1)->get();
        foreach ($categorys as $category) {
          $category_id = $category->id;
        }
        $products      = Product::where('category_id', '=', $category_id)->get();
        return view('productos', compact('products'));
    }

    public function cuerpo()
    {
        $categorys     = Category::select('id')->where('id', '=', 2)->get();
        foreach ($categorys as $category) {
          $category_id = $category->id;
        }
        $products      = Product::where('category_id', '=', $category_id)->get();
        return view('productos', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::all();
        return view('productos.agregar', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('imagen')->store('public/productos');
        $file = basename($path);

        $producto              = new Product;
        $producto->nombre      = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio      = $request->precio;
        $producto->stock       = $request->stock;
        $producto->category_id = $request->category_id;
        $producto->offer_id    = $request->offer_id;
        $producto->imagen      = $file;

        $producto->save();
        return redirect('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product     = Product::find($id);
        $category_id = Product::find($id)->category_id;
        $offer_id    = Product::find($id)->offer_id;
        $category    = Category::where('id', '=', $category_id)->get();
        $offer       = Offer::where('id', '=', $offer_id)->get();
        return view('productos.producto', compact('product', 'category', 'offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product  = Product::find($id);
        $category = Category::all();
        $offer    = Offer::all();
        return view('productos.editar', compact('product', 'category', 'offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (isset($request->imagen)) {
          $path = $request->file('imagen')->store('public/productos');
          $file = basename($path);
        }

        $producto              = Product::find($id);
        $producto->nombre      = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio      = $request->precio;
        $producto->stock       = $request->stock;
        $producto->category_id = $request->category_id;
        $producto->offer_id    = $request->offer_id;
        if (isset($request->imagen)) {
          $producto->imagen      = $file;
        }

        $producto->save();
        return redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('productos');
    }
}
