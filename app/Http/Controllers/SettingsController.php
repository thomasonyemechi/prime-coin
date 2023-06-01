<?php

namespace App\Http\Controllers;

use App\Models\CoinInfo;
use App\Models\PriceChange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    function updateCoinPrice(Request $request)
    {
        Validator::make($request->all(), [
            'price' => 'float|required'
        ])->validate();

        $coin_info = CoinInfo::first();

        $coin_info->update([
            'price' => $request->price
        ]);
        
        $this->logCoinPriceChange($request->price);

        return back()->with('success', 'Coin Value has Been Updated Sucessfuly');
    }


    function logCoinPriceChange($price)
    {
        PriceChange::create([
            'price' => $price,
            'created_by' => auth()->user()->id
        ]);
    }
}
