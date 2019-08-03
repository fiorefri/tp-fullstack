<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::where('status',0)
        ->where('user_id', Auth::user()->id)
        ->get(); //Identificamos todos los items de los carritos abiertos del usuario logueado.

        $carts = Cart::all()->where('status',0)
        ->where('user_id', Auth::user()->id); //Identificamos todos los items de los carritos abiertos del usuario logueado.

        // Cálculo del total usando el método `getTotal()` del modelo
        // $cart = new Cart();
        // $total2 = $cart->getTotal($carts);

        // Calculo del total usando `reduce()`. Lo vemos el miercoles :D
        // $total = $carts->reduce(function($suma, $item){
        //   $suma += $item->price * $item->quantity;
        //   return $suma;
        // });

        //Calculamos el total de cada carrito.
        $total = 0;
        foreach ($carts as $item) {
          $total = $total +($item->quantity * $item->price);
          }

        return view('cart', compact('carts', 'total'));
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
        //Validamos que el número ingresado sea positivo.
        $rule = [
          'quantity'=>"integer|min:1"
        ];
        $message = [
          'min'=>'La cantidad debe ser mayor a :min.',
          'integer'=>'El valor debe ser numérico.'
        ];

        $this->validate($request, $rule, $message);

        $product = Product::find($request->id);

        //El producto ya está cargado en el cart ->necesitamos el id de producto en la tabla: crear m,igration.
        $existe = Cart::where('product_id', $request->id)->where('user_id',Auth::user()->id)->where('status','0')->first();

        if($existe){
          $existe->quantity += $request->quantity;
          $existe->save();
          return redirect('/products');
        }

        $cart = new Cart; //Recordar que cada Cart es un item dentro del carrito.
        $cart->product_id = $product->id;
        $cart->name = $product->name;
        $cart->price = $product->price;
        $cart->cant_producto = $request->quantity;
        $cart->user_id = Auth::user()->id;

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
