<?php

namespace App\Http\Controllers;

use App\Models\Adproducts;
use Illuminate\Http\Request;

class AdproductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adproducts = Adproducts::all();
        return view('products.index', compact("adproducts"));
        // untuk tampilan api, silahkan di uncomment
        //return Adproducts::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adproducts::create($request->all());
        return redirect('/products');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adproducts  $adproducts
     * @return \Illuminate\Http\Response
     */
    public function show(Adproducts $adproducts)
    {
        return view('products.show', compact('adproducts'));
        // untuk tampilan api, silahkan di uncomment
        // return $adproducts;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adproducts  $adproducts
     * @return \Illuminate\Http\Response
     */
    public function edit(Adproducts $adproducts)
    {
        return view('products.edit', compact("adproducts"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adproducts  $adproducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adproducts $adproducts)
    {
        Adproducts::where('id', $adproducts->id)
                    ->update([
                        'id' => $request->id,
                        'category' => $request->category,
                        'subCategory' => $request->subCategory,
                        'productName' => $request->productName,
                        'productCompany' => $request->productCompany,
                        'productPrice' => $request->productPrice,
                        'productPriceBeforeDiscount' => $request->productPriceBeforeDiscount,
                        'productDescription' => $request->productDescription,
                        'productImage1' => $request->productImage1,
                        'productImage2' => $request->productImage2,
                        'productImage3' => $request->productImage3,
                        'shippingCharge' => $request->shippingCharge,
                        'productAvailability' => $request->productAvailability,
                        'updationDate' => $request->updationDate,
                    ]);
        return redirect('/products');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adproducts  $adproducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adproducts $adproducts)
    {
        Adproducts::destroy($adproducts->id);
        return redirect('/products');
        // untuk tampilan api, silahkan di uncomment
        // return $adproducts;
    }
}
