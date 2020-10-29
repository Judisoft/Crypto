<?php

namespace App\Http\Controllers;

use App\Models\Currencies;
use Illuminate\Http\Request;

class Admin_cryptoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_crypto.index');

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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $currencies = new Currencies;
        $currencies->currency_name= $request->input('currency_name');
        $currencies->ticker = $request->input('ticker');
        $currencies->usd_rate =$request->input('usd_rate');
        $currencies->usd_xaf = $request->input('usd_xaf');
        $currencies->selling_price = $request->input('selling_price');
        $currencies->buying_price = $request -> input('buying_price');
        $currencies->tax = $request->input('tax');
        $currencies->save();

        return redirect('admin_crypto/index');






    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function signIn(){

        return view('admin_crypto.auth_login');
    }

}
