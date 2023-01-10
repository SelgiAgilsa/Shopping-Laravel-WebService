<?php

namespace App\Http\Controllers;

use App\Models\Adproductreviews;
use Illuminate\Http\Request;

class AdproductreviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adproductreviews = Adproductreviews::all();
        return view('productreviews.index', compact("adproductreviews"));
        // untuk tampilan api, silahkan di uncomment
        //return Adproductreviews::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productreviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adproductreviews::create($request->all());
        return redirect('/productreviews');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adproductreviews  $adproductreviews
     * @return \Illuminate\Http\Response
     */
    public function show(Adproductreviews $adproductreviews)
    {
        return view('productreviews.show', compact('adproductreviews'));
        // untuk tampilan api, silahkan di uncomment
        // return $adproductreviews;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adproductreviews  $adproductreviews
     * @return \Illuminate\Http\Response
     */
    public function edit(Adproductreviews $adproductreviews)
    {
        return view('productreviews.edit', compact("adproductreviews"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adproductreviews  $adproductreviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adproductreviews $adproductreviews)
    {
        Adproductreviews::where('id', $adproductreviews->id)
                    ->update([
                        'id' => $request->id,
                        'product_id' => $request->product_id,
                        'quality' => $request->quality,
                        'price' => $request->price,
                        'value' => $request->value,
                        'name' => $request->name,
                        'summary' => $request->summary,
                        'review' => $request->review,
                        'review_date' => $request->review_date,
                    ]);
        return redirect('/productreviews');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adproductreviews  $adproductreviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adproductreviews $adproductreviews)
    {
        Adproductreviews::destroy($adproductreviews->id);
        return redirect('/productreviews');
        // untuk tampilan api, silahkan di uncomment
        // return $adproductreviews;
    }
}
