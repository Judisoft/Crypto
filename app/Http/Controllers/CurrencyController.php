<?php

namespace App\Http\Controllers;

use App\Models\Currencies;
use App\Models\Demand;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class CurrencyController extends Controller
{


    public function index()
    {

        //$data=Currencies::all();
        // $exchange_rate = DB::table('currencies')->select('ticker','usd_rate','usd_xaf')->get();

        return view('index');

        // return view('index',['data'=>$data]);


    }

    public function currencyExchange(Request $request)
    {

        try {
            $this->validate($request, [
                'currency_to_exchange' => 'required',
                'amount_to_exchange' => 'required'
            ]);
        } catch (ValidationException $e) {
        }
        // Perform exchange calculation
        $data = Currencies::all();
        $dataSelect = new Currencies();
        $dataSelect = $request->input('currency_to_exchange');


        //get exchange amount from client

        $usdRateBTC = DB::table('currencies')->where('ticker', 'BTC')->first();
        $rate = $usdRateBTC->usd_xaf; //fixed dollar-fcfa rate
        $btcRate = $usdRateBTC->usd_rate; //bitcoin multiplier rate
        $usdRateETH = DB::table('currencies')->where('ticker', 'ETH')->first();
        $ethRate = $usdRateETH->usd_rate; //ethereum multiplier rate
        $usdRateTRX = DB::table('currencies')->where('ticker', 'TRX')->first();
        $trxRate = $usdRateTRX->usd_rate; //tronx multiplier rate
        $usdRateTILY = DB::table('currencies')->where('ticker', 'TILY')->first();
        $tilyRate = $usdRateTILY->usd_rate; //TILLY multiplier rate


        return view('exchange_crypto', compact('rate', 'btcRate', 'ethRate', 'trxRate', 'tilyRate', 'dataSelect'));


    }


    public function currencySell(Request $request)
    {

        $salesRequestNum = count(Demand::all());

        $usdRateBTC = DB::table('currencies')->where('ticker', 'BTC')->first();
        $rate= $usdRateBTC->usd_xaf; //fixed dollar-fcfa rate
        $btcRate=$usdRateBTC->buying_price; //bitcoin multiplier buying price
        $usdRateETH = DB::table('currencies')->where('ticker', 'ETH')->first();
        $ethRate=$usdRateETH->buying_price; //ethereum multiplier rate
        $usdRateTRX = DB::table('currencies')->where('ticker', 'TRX')->first();
        $trxRate=$usdRateTRX->buying_price; //tronx multiplier rate
        $usdRateTILY = DB::table('currencies')->where('ticker', 'TILY')->first();
        $tilyRate=$usdRateTILY->buying_price; //TILLY multiplier rate

        if ($request->input()) {

            //Save request to database
            $demand = new Demand();
            $demand->currency_demanded = $request->input('currency_demanded');
            $demand->amount_demanded = $request->input('amount_demanded');
            $demand->payment_method = $request->input('payment_method');
            $demand->phone_number = $request->input('phone_number');
            $demand->payment_details = $request->input('payment_details');
            $demand->save();


           return view('invoice_sell_crypto', compact('salesRequestNum','rate','btcRate','ethRate','trxRate', 'tilyRate'));

            //return view('sell_crypto');

        } else {
            $error="Enter all fields";
            return view('sell_crypto')->with('error', $error);
        }

    }
}
