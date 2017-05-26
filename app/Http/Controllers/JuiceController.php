<?php

namespace App\Http\Controllers;

use App\Juice;
use App\Product;
use Illuminate\Http\Request;

class JuiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$juices = Juice::all();
        $juices = Juice::with('products')->get();
        return view('juices.index', compact('juices'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('juices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $juice = Juice::create($request->only('name','done','rate','comment'));

        $quantities = $request->get('product_quantity');
        $products = $request->get('product_name');
        foreach($products as $key => $value)
        {
            $product = Product::find($value);
            $quantity = $quantities[$key];
            $juice->products()->attach($product, ['quantity' => $quantity]);
        }

        //flashy()->success('Nous vous répondrons dans les plus bref delais');
        return redirect()->route('juice.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Juice  $juice
     * @return \Illuminate\Http\Response
     */
    public function show(Juice $juice)
    {
        dd('Juice store');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Juice  $juice
     * @return \Illuminate\Http\Response
     */
    public function edit(Juice $juice)
    {
        dd('Juice edit');    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Juice  $juice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juice $juice)
    {
        dd('Juice update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Juice  $juice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juice $juice)
    {
        dd('Juice destroy');
    }
}
