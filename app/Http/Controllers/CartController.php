<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Offer;
use App\Address;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id     = Auth::user()->id;
        $cart        = Cart::all()->where('estado', '=', 0)
          ->where('user_id', '=', $user_id);
        $product = Product::all();

        $total   = 0;
        foreach ($cart as $item) {
          $total = $total + ($item->cantidad * $item->precio);
        }

        return view('carrito', compact('cart', 'total', 'product'));
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
      $rules = [
        'quantity'=>"integer|min:1"
      ];

      $this->validate($request, $rules);
      $user    = Auth::user();
      $product = Product::find($request->id);
      $carts   = Cart::where('product_id', '=', $request->id)->get();

      if (!count($carts) == 0) {
        $cart = $carts[0];
        $cantidad_nueva   = $cart->cantidad + $request->cantidad;
        $cart->user_id    = $user->id;
        $cart->product_id = $product->id;
        $cart->cantidad   = $cantidad_nueva;
      } else {
        $cart             = new Cart;
        $cart->user_id    = Auth::user()->id;
        $cart->product_id = $product->id;
        $cart->imagen     = $product->imagen;
        $cart->nombre     = $product->nombre;
        $cart->cantidad   = $request->cantidad;
        $cart->precio     = $product->precio;
      }

      $cart->save();
      return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         $cart = Cart::where('id', $id)
           ->where('user_id', '=', Auth::user()->id)
           ->where('estado', '=', 0)->get();

         $cart[0]->delete();
         return redirect('/carrito');
     }

    public function cerrado(){
        $carts = Cart::where('user_id', '=', Auth::user()->id)
          ->where('estado', '=', 0)->get();
        $ultimo_carrito = Cart::max('num_carrito');

         foreach ($carts as $cart) {
           $cart->num_carrito = $ultimo_carrito + 1;
           $cart->estado      = 1;
           $cart->save();
         }

         return redirect ('/historial');
     }

    public function historial(){
         $carts = Cart::where('user_id', '=', Auth::user()->id)
          ->where('estado', '=', 1)->get()->groupBy('num_carrito');
        $products = Product::all();
        
        return view('carrito.historial', compact('carts', 'products'));
     }
}
