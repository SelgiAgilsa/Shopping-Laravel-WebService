<?php

namespace App\Http\Controllers;

use App\Models\Adorders;
use Illuminate\Http\Request;

class AdordersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adorders = Adorders::all();
        return view('orders.index', compact("adorders"));
        // untuk tampilan api, silahkan di uncomment
        //return Adorders::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adorders::create($request->all());
        return redirect('/orders');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adorders  $adorders
     * @return \Illuminate\Http\Response
     */
    public function show(Adorders $adorders)
    {
        return view('orders.show', compact('adorders'));
        // untuk tampilan api, silahkan di uncomment
        // return $adorders;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adorders  $adorders
     * @return \Illuminate\Http\Response
     */
    public function edit(Adorders $adorders)
    {
        return view('orders.edit', compact("adorders"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adorders  $adorders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adorders $adorders)
    {
        Adorders::where('id', $adorders->id)
                    ->update([
                        'id' => $request->id,
                        'user_id' => $request->user_id,
                        'product_id' => $request->product_id,
                        'quantity' => $request->quantity,
                        'order_date' => $request->order_date,
                        'payment_method' => $request->payment_method,
                        'order_status' => $request->order_status,
                    ]);
        return redirect('/orders');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adorders  $adorders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adorders $adorders)
    {
        Adorders::destroy($adorders->id);
        return redirect('/orders');
        // untuk tampilan api, silahkan di uncomment
        // return $adorders;
    }
}
