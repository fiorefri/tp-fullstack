<?php

namespace App\Http\Controllers;

use App\CartsProduct;
use App\Product;
use Illuminate\Http\Request;
use Auth;

class CartsProductController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $product = Product::find($request->id);

      $cart = new CartsProduct; //Recordar que cada Cart es un item dentro del carrito.
      $cart->id_product = $product->id;
      $cart->name = $product->nombre;
      $cart->price = $product->precio;
      $cart->cant_producto = $request->quantity;
      $cart->user_id = Auth::user()->id;

      dd($cart);
      $cart->save();
      return redirect('/products');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cartsProduct  $cartsProduct
     * @return \Illuminate\Http\Response
     */
    public function show(cartsProduct $cartsProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cartsProduct  $cartsProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(cartsProduct $cartsProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cartsProduct  $cartsProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cartsProduct $cartsProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cartsProduct  $cartsProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(cartsProduct $cartsProduct)
    {
        //
    }
}
