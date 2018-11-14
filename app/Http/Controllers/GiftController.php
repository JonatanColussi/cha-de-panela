<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gift;

class GiftController extends Controller
{
    public function list(Gift $gift)
    {
    	$response = [
    		'gifts' => $gift::orderBy('name')->get(),
    	];

    	return view('list', $response);
    }

    public function save(Request $request, Gift $gift)
    {
    	// dd($request->gifts);
    	$gift->whereIn('id', $request->gifts)->update(['checked' => true]);

    	return response()->json(['success' => true]);
    }
}
