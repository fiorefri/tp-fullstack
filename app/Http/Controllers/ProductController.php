<?php

namespace App\Http\Controllers;

use App\Product;
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
      $products = Product::all(); //Traemos todos los productos.
      return view('productos', compact('products')); //Pasamos el array a la vista.

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formproductos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $reglas=[];
      // $mensajes=[];
      // $this->validate($request, $reglas, $mensajes);
      //
      $producto = new Product;
      $producto->nombre = $request->nombre
      $producto->descripcion = $request->descripcion
      $producto->precio = $request->precio
      $producto->stock = $request->stock
      $producto->id_category = $request->id_category
      $producto->id_offer = $request->id_offer
      $producto->imagen = $request->imagen

      $producto->save();
      return view('/productosAgregar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $product = Product::find($id); //Identificamos el producto que queremos mostrar.
      return view('product', compact('product')); //Pasamos el dato a la vista.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
