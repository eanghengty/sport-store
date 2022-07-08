<?php

namespace App\Http\Controllers;

use App\Models\CART;
use Illuminate\Http\Request;

class CARTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = CART::all();
        return view('addtocart', compact('cart'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $cart = new CART(array(
        //     'product_name' => $request->get('title'),
        //     'price' => $request->get('content'),
        //     'total_price' => ,
        //     'quantity'=>,
        //     'total_quantity'=>,
        //     'location'=>,
        //     'image',
        //     ));
        //     $cart->save();
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CART  $cART
     * @return \Illuminate\Http\Response
     */
    public function show(CART $cART)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CART  $cART
     * @return \Illuminate\Http\Response
     */
    public function edit(CART $cART)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CART  $cART
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CART $cART)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CART  $cART
     * @return \Illuminate\Http\Response
     */
    public function destroy(CART $cART)
    {
        //
    }
}
