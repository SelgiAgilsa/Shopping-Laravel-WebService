<?php

namespace App\Http\Controllers;

use App\Models\Adproducts;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adproducts = Adproducts::all();
        return view('menu', compact("adproducts"));
        // untuk tampilan api, silahkan di uncomment
        //return Adproducts::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function show(Adproducts $adproducts)
    {
        return view('product1', compact('adproducts'));
        // untuk tampilan api, silahkan di uncomment
        // return $adproducts;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adproducts  $adproducts
     * @return \Illuminate\Http\Response
     */
    
}
