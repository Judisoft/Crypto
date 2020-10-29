<?php

namespace App\Http\Controllers;

use App\Models\Currencies;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */

    public function currencyBuy(){

        return view('buy_crypto');

    }

    public function store(Request $request)
    {

       /* $this -> validate($request,[

            'currency_to_buy' => 'required',
            'amount_to_buy' => 'required',
            'payment_method' => 'required',
            'wallet_address' => 'required'
        ]);
       */
        //get prices

        $usdRateBTC = DB::table('currencies')->where('ticker', 'BTC')->first();
        $rate= $usdRateBTC->usd_xaf; //fixed dollar-fcfa rate
        $btcRate=$usdRateBTC->selling_price; //bitcoin multiplier rate
        $usdRateETH = DB::table('currencies')->where('ticker', 'ETH')->first();
        $ethRate=$usdRateETH->selling_price; //ethereum multiplier rate
        $usdRateTRX = DB::table('currencies')->where('ticker', 'TRX')->first();
        $trxRate=$usdRateTRX->selling_price; //tronx multiplier rate
        $usdRateTILY = DB::table('currencies')->where('ticker', 'TILY')->first();
        $tilyRate=$usdRateTILY->selling_price; //TILLY multiplier rate

        //get tax rates

        $taxRateBTC = DB::table('currencies')->where('ticker', 'BTC')->first();
        $btctaxrate= $taxRateBTC->tax; //fixed tax rate
        $taxRateETH = DB::table('currencies')->where('ticker', 'ETH')->first();
        $ethtaxrate= $taxRateETH->tax; //fixed tax rate
        $taxRateTRX = DB::table('currencies')->where('ticker', 'TRX')->first();
        $trxtaxrate= $taxRateTRX->tax; //fixed tax rate
        $taxRateTILY = DB::table('currencies')->where('ticker', 'TILY')->first();
        $tilytaxrate= $taxRateTILY->tax; //fixed tax rate

        //get invoice number
        $inv_num=count(Invoice::all());


        // get data and save to invoice table
        $invoice = new Invoice();
        $invoice->currency_to_buy=$request->input('currency_to_buy');
        $invoice->amount_to_buy=$request->input('amount_to_buy');
        $invoice->payment_method=$request->input('payment_method');
        $invoice->wallet_address=$request->input('wallet_address');
        $invoice->save();


        return view('invoice_crypto', compact('rate','btcRate','ethRate','trxRate', 'tilyRate', 'btctaxrate','ethtaxrate','trxtaxrate','tilytaxrate','inv_num'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
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

    public function printInvoice(){

        return view('invoice_crypto');
    }
}
