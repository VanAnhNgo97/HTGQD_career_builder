<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function getHome()
    {
    	return view('client.pages.home');
    }

    public function getWorkInfo(Request $request)
    {
    	$id = $request->id;
    	return view('client.pages.work_info');
    }
}
