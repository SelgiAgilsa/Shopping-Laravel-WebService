<?php

namespace App\Http\Controllers;

use App\Models\Adadmins;
use Illuminate\Http\Request;

class AdadminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adadmins = Adadmins::all();
        return view('admins.index', compact("adadmins"));
        // untuk tampilan api, silahkan di uncomment
        //return Adadmins::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adadmins::create($request->all());
        return redirect('/admins');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adadmins  $adadmins
     * @return \Illuminate\Http\Response
     */
    public function show(Adadmins $adadmins)
    {
        return view('admins.show', compact('adadmins'));
        // untuk tampilan api, silahkan di uncomment
        // return $adadmins;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adadmins  $adadmins
     * @return \Illuminate\Http\Response
     */
    public function edit(Adadmins $adadmins)
    {
        return view('admins.edit', compact("adadmins"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adadmins  $adadmins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adadmins $adadmins)
    {
        Adadmins::where('id', $adadmins->id)
                    ->update([
                        'id' => $request->id,
                        'username' => $request->username,
                        'password' => $request->password,
                    ]);
        return redirect('/admins');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adadmins  $adadmins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adadmins $adadmins)
    {
        Adadmins::destroy($adadmins->id);
        return redirect('/admins');
        // untuk tampilan api, silahkan di uncomment
        // return $adadmins;
    }
}
