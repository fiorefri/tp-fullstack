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
        $cart        = Cart::where('estado', '=', 0)
          ->where('id', '=', $user_id)->get();

        if (isset($cart->product_id)) {
          $product_id  = $cart->product_id;
          $product     = Product::where('id', '=', $product_id);
          $offer_id    = $cart->offer_id;
          $offer       = Offer::where('id', '=', $offer_id);
          // $address     = Address::all()->where('user_id', '=', $user_id);
        }

        return view('carrito', compact('cart'));
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
        $product = Product::find($request->id);

        $cart               = new Cart;
        $cart->user_id      = Auth::user()->id;
        $cart->product_id   = $product->id;
        $cart->nombre       = $product->nombre;
        $cart->cant_total   = $request->cant_total;
        $cart->precio_total = $product->precio_total;
        dd($cart);

        $cart->save();
        return redirect('/products');
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
         $item = Cart::where('id',$id)
         ->where('user_id',Auth::user()->id)
         ->where('status',0)->get(); //La consulta nos devuelve un array de datos con 1 solo item.

         $item[0]->delete(); //El item está en la posición 0 del array. Lo eliminamos.

         //Otra forma de traer el item a borrar es usando first():
         // $item = Cart::where('id',$id)
         // ->where('user_id',Auth::user()->id)
         // ->where('status',0)->first();
         // $item->delete();

         return redirect('/cart');
     }
     public function cartClose(){
       $items = Cart::where('user_id',Auth::user()->id)
       ->where('status',0)->get();

       $lastCart = Cart::max('cart_num'); //Busca el último cerrado.

       foreach ($items as $item) {
         $item->cart_num = $lastCart + 1;
         $item->status = 1;
         $item->save();
       }

       return redirect ('/products');
     }

     public function history(){
       $carts = Cart::where('user_id',Auth::user()->id)
       ->where('status',1)->get()->groupBy('cart_num');

       return view('history', compact('carts'));


     }

}
