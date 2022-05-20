<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Resources\TransactionResource;
use App\Models\Transact;
use Illuminate\Http\Request;

class TrasnactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return TransactionResource::collection(
            Transact::with('category')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransactionRequest $request)
    {
        //Automatically Adding User ID to New Records
        $transact = auth()->user()->transactions()->create($request->validated());
        // return new TransactionResource(Transact::create($request->validated()));
        return  new TransactionResource($transact);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transact  $transact
     * @return \Illuminate\Http\Response
     */
    public function show(Transact $transact)
    {
        return new TransactionResource($transact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transact  $transact
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTransactionRequest $request, Transact $transact)
    {
        $transact->update($request->validated());
        return new TransactionResource($transact);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transact  $transact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transact $transact)
    {
        $transact->delete();
        return response()->noContent();
    }
}
