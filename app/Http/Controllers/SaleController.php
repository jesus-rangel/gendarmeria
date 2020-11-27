<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Client;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index(Request $request)
    {
        $client = Client::find(1)->load('products');
    
        return $client;
    }
        
    /* public function show(Client $client)
    {
        dd($client);
        return view('sales.details', compact('client'));
    } */
    /* public function index(Request $request)
    {
        $client = Client::find(1);
        $client->products()->attach(1, ['quantity' => 2 , 
                            'purchase_date' => Carbon::now(), 
                            'user_id' => auth()->user()->id]);

        return $client;
    } */

    public function details()
    {
        
    }
}
