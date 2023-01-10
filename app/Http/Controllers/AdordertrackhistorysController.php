<?php

namespace App\Http\Controllers;

use App\Models\Adordertrackhistorys;
use Illuminate\Http\Request;

class AdordertrackhistorysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adordertrackhistorys = Adordertrackhistorys::all();
        return view('ordertrackhistorys.index', compact("adordertrackhistorys"));
        // untuk tampilan api, silahkan di uncomment
        //return Adordertrackhistorys::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ordertrackhistorys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adordertrackhistorys::create($request->all());
        return redirect('/ordertrackhistorys');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adordertrackhistorys  $adordertrackhistorys
     * @return \Illuminate\Http\Response
     */
    public function show(Adordertrackhistorys $adordertrackhistorys)
    {
        return view('ordertrackhistorys.show', compact('adordertrackhistorys'));
        // untuk tampilan api, silahkan di uncomment
        // return $adordertrackhistorys;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adordertrackhistorys  $adordertrackhistorys
     * @return \Illuminate\Http\Response
     */
    public function edit(Adordertrackhistorys $adordertrackhistorys)
    {
        return view('ordertrackhistorys.edit', compact("adordertrackhistorys"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adordertrackhistorys  $adordertrackhistorys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adordertrackhistorys $adordertrackhistorys)
    {
        Adordertrackhistorys::where('id', $adordertrackhistorys->id)
                    ->update([
                        'id' => $request->id,
                        'order_id' => $request->order_id,
                        'status' => $request->status,
                        'remark' => $request->remark,
                        'posting_date' => $request->posting_date,
                    ]);
        return redirect('/ordertrackhistorys');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adordertrackhistorys  $adordertrackhistorys
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adordertrackhistorys $adordertrackhistorys)
    {
        Adordertrackhistorys::destroy($adordertrackhistorys->id);
        return redirect('/ordertrackhistorys');
        // untuk tampilan api, silahkan di uncomment
        // return $adordertrackhistorys;
    }
}
