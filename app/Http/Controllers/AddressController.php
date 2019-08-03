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
        $address = Address::where('user_id', '=', $user_id)->get();

        // $address = collect($address);
        return view('direcciones', compact('address', 'user_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('direcciones.agregar');
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
          "calle"         => "filled|string",
          "altura"        => "filled|string",
          "piso"          => "filled|integer",
          "depto"         => "filled|string",
          "codigo_postal" => "filled|integer",
          "ciudad"        => "filled|string"
        ];

        $this->validate($request, $rules);

        $address = new Address;
        $address->user_id       = Auth::user()->id;
        $address->calle         = $request->calle;
        $address->altura        = $request->altura;
        $address->piso          = $request->piso;
        $address->depto         = $request->depto;
        $address->codigo_postal = $request->codigo_postal;
        $address->ciudad        = $request->ciudad;

        $address->save();
        return redirect("direcciones");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\address  $address
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $address = Address::find($id);
        return view('direcciones.editar', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
          "calle"         => "filled|string",
          "altura"        => "filled|string",
          "piso"          => "filled|integer",
          "depto"         => "filled|string",
          "codigo_postal" => "filled|integer",
          "ciudad"        => "filled|string"
        ];

        $this->validate($request, $rules);

        $address = Address::find($id);
        $address->calle         = $request->calle;
        $address->altura        = $request->altura;
        $address->piso          = $request->piso;
        $address->depto         = $request->depto;
        $address->codigo_postal = $request->codigo_postal;
        $address->ciudad        = $request->ciudad;

        $address->save();
        return redirect('direcciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address = Address::find($id);
        $address->delete();
        return redirect('direcciones');
    }
}
