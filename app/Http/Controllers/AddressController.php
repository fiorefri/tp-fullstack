<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $address = Address::where('user_id', '=', $user_id);
        return view('direcciones', compact('address'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregar_direcciones');
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
        "calle" => "filled|string",
        "altura" => "filled|string",
        "piso" => "filled|integer",
        "depto" => "filled|string",
        "codigo_postal" => "filled|integer|max:4",
        "ciudad" => "filled|string"
      ];

      $this->validate($request, $rules);

      $address = new Address;
      $address->user_id = Auth::user()->id;
      $address->calle = $request->calle;
      $address->altura = $request->altura;
      $address->piso = $request->piso;
      $address->depto = $request->depto;
      $address->codigo_postal = $request->codigo_postal;
      $address->ciudad = $request->ciudad;

      $address->save();
      return redirect("direcciones");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(address $address)
    {
        //
    }
}
