<?php

namespace App\Http\Controllers;

use App\Models\Adwishlists;
use Illuminate\Http\Request;

class AdwishlistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adwishlists = Adwishlists::all();
        return view('wishlists.index', compact("adwishlists"));
        // untuk tampilan api, silahkan di uncomment
        //return Adwishlists::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wishlists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adwishlists::create($request->all());
        return redirect('/wishlists');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adwishlists  $adwishlists
     * @return \Illuminate\Http\Response
     */
    public function show(Adwishlists $adwishlists)
    {
        return view('wishlists.show', compact('adwishlists'));
        // untuk tampilan api, silahkan di uncomment
        // return $adwishlists;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adwishlists  $adwishlists
     * @return \Illuminate\Http\Response
     */
    public function edit(Adwishlists $adwishlists)
    {
        return view('wishlists.edit', compact("adwishlists"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adwishlists  $adwishlists
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adwishlists $adwishlists)
    {
        Adwishlists::where('id', $adwishlists->id)
                    ->update([
                        'id' => $request->id,
                        'user_id' => $request->user_id,
                        'product_id' => $request->product_id,
                        'posting_date' => $request->posting_date,
                    ]);
        return redirect('/wishlists');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adwishlists  $adwishlists
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adwishlists $adwishlists)
    {
        Adwishlists::destroy($adwishlists->id);
        return redirect('/wishlists');
        // untuk tampilan api, silahkan di uncomment
        // return $adwishlists;
    }
}
