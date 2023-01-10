<?php

namespace App\Http\Controllers;

use App\Models\Adsubcategorys;
use Illuminate\Http\Request;

class AdsubcategorysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adsubcategorys = Adsubcategorys::all();
        return view('subcategorys.index', compact("adsubcategorys"));
        // untuk tampilan api, silahkan di uncomment
        //return Adsubcategorys::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subcategorys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adsubcategorys::create($request->all());
        return redirect('/subcategorys');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adsubcategorys  $adsubcategorys
     * @return \Illuminate\Http\Response
     */
    public function show(Adsubcategorys $adsubcategorys)
    {
        return view('subcategorys.show', compact('adsubcategorys'));
        // untuk tampilan api, silahkan di uncomment
        // return $adsubcategorys;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adsubcategorys  $adsubcategorys
     * @return \Illuminate\Http\Response
     */
    public function edit(Adsubcategorys $adsubcategorys)
    {
        return view('subcategorys.edit', compact("adsubcategorys"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adsubcategorys  $adsubcategorys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adsubcategorys $adsubcategorys)
    {
        Adsubcategorys::where('id', $adsubcategorys->id)
                    ->update([
                        'id' => $request->id,
                        'category_id' => $request->category_id,
                        'sub_category' => $request->sub_category,
                    ]);
        return redirect('/subcategorys');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adsubcategorys  $adsubcategorys
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adsubcategorys $adsubcategorys)
    {
        Adsubcategorys::destroy($adsubcategorys->id);
        return redirect('/subcategorys');
        // untuk tampilan api, silahkan di uncomment
        // return $adsubcategorys;
    }
}
