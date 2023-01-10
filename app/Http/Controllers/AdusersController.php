<?php

namespace App\Http\Controllers;

use App\Models\Adusers;
use Illuminate\Http\Request;

class AdusersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adusers = Adusers::all();
        return view('users.index', compact("adusers"));
        // untuk tampilan api, silahkan di uncomment
        //return Adusers::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adusers::create($request->all());
        return redirect('/users');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adusers $adusers
     * @return \Illuminate\Http\Response
     */
    public function show(Adusers $adusers)
    {
        return view('users.show', compact('adusers'));
        // untuk tampilan api, silahkan di uncomment
        // return $adusers;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adusers  $adusers
     * @return \Illuminate\Http\Response
     */
    public function edit(Adusers $adusers)
    {
        return view('users.edit', compact("adusers"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adusers  $adusers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adusers $adusers)
    {
        Adusers::where('id', $adusers->id)
                    ->update([
                        'id' => $request->id,
                        'name' => $request->name,
                        'email' => $request->email,
                        'contactno' => $request->contactno,
                        'password' => $request->password,
                        'shippingAddress' => $request->shippingAddress,
                        'shippingState' => $request->shippingState,
                        'shippingCity' => $request->shippingCity,
                        'shippingPincode' => $request->shippingPincode,
                        'billingAddress' => $request->billingAddress,
                        'billingState' => $request->billingState,
                        'billingCity' => $request->billingCity,
                        'billingPincode' => $request->billingPincode,
                        'regDate' => $request->regDate,
                        'updationDate' => $request->updationDate,
                    ]);
        return redirect('/users');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adusers  $adusers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adusers $adusers)
    {
        Adusers::destroy($adusers->id);
        return redirect('/users');
        // untuk tampilan api, silahkan di uncomment
        // return $adusers;
    }
}
