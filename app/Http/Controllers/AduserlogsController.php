<?php

namespace App\Http\Controllers;

use App\Models\Aduserlogs;
use Illuminate\Http\Request;

class AduserlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aduserlogs = Aduserlogs::all();
        return view('userlogs.index', compact("aduserlogs"));
        // untuk tampilan api, silahkan di uncomment
        //return Aduserlogs::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userlogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aduserlogs::create($request->all());
        return redirect('/userlogs');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aduserlogs $aduserlogs
     * @return \Illuminate\Http\Response
     */
    public function show(Aduserlogs $aduserlogs)
    {
        return view('userlogs.show', compact('aduserlogs'));
        // untuk tampilan api, silahkan di uncomment
        // return $aduserlogs;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aduserlogs  $aduserlogs
     * @return \Illuminate\Http\Response
     */
    public function edit(Aduserlogs $aduserlogs)
    {
        return view('userlogs.edit', compact("aduserlogs"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aduserlogs  $aduserlogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aduserlogs $aduserlogs)
    {
        Aduserlogs::where('id', $aduserlogs->id)
                    ->update([
                        'id' => $request->id,
                        'user_email' => $request->user_email,
                        'user_ip' => $request->user_ip,
                        'login_time' => $request->login_time,
                        'logout' => $request->logout,
                        'status' => $request->status,
                    ]);
        return redirect('/userlogs');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aduserlogs  $aduserlogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aduserlogs $aduserlogs)
    {
        Aduserlogs::destroy($aduserlogs->id);
        return redirect('/userlogs');
        // untuk tampilan api, silahkan di uncomment
        // return $aduserlogs;
    }
}
