<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function quienes_somos()
    {
        return view('quienesSomos');
    }

    public function faq()
    {
        return view('faq');
    }

    public function contacto()
    {
        return view('contacto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show()
      {
          $user = Auth::user();
          return view('cuenta', compact('user'));
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\user  $address
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {
          $user = User::find($id);
          return view('cuenta.editar', compact('user'));
      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
          'name'     => "string|max:255|regex:/^[A-Za-z\s]+$/",
          'password' => "string"
        ];

        $this->validate($request, $rules);

        $user = User::find($id);
        $user->name     = $request->name;
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);

        $user->save();
        return redirect('cuenta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }
}
