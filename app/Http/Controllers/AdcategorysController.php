<?php

namespace App\Http\Controllers;

use App\Models\Adcategorys;
use Illuminate\Http\Request;

class AdcategorysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adcategorys = Adcategorys::all();
        return view('categorys.index', compact("adcategorys"));
        // untuk tampilan api, silahkan di uncomment
        //return Adcategorys::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adcategorys::create($request->all());
        return redirect('/categorys');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adcategorys  $adcategorys
     * @return \Illuminate\Http\Response
     */
    public function show(Adcategorys $adcategorys)
    {
        return view('categorys.show', compact('adcategorys'));
        // untuk tampilan api, silahkan di uncomment
        // return $adcategorys;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adcategorys  $adcategorys
     * @return \Illuminate\Http\Response
     */
    public function edit(Adcategorys $adcategorys)
    {
        return view('categorys.edit', compact("adcategorys"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adcategorys  $adcategorys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adcategorys $adcategorys)
    {
        Adcategorys::where('id', $adcategorys->id)
                    ->update([
                        'id' => $request->id,
                        'category_id' => $request->category_id,
                        'category_name' => $request->category_name,
                        'category_desc' => $request->category_desc,
                    ]);
        return redirect('/categorys');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adcategorys  $adcategorys
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adcategorys $adcategorys)
    {
        Adcategorys::destroy($adcategorys->id);
        return redirect('/categorys');
        // untuk tampilan api, silahkan di uncomment
        // return $adcategorys;
    }
}
