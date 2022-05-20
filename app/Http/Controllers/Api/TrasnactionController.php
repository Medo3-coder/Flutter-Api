<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TrasnactionResource;
use App\Models\Trasnaction;
use Illuminate\Http\Request;

class TrasnactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TrasnactionResource::collection(Trasnaction::with('category')->get());   //With()//Eger Loading
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trasnaction  $trasnaction
     * @return \Illuminate\Http\Response
     */
    public function show(Trasnaction $trasnaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trasnaction  $trasnaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trasnaction $trasnaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trasnaction  $trasnaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trasnaction $trasnaction)
    {
        //
    }
}
