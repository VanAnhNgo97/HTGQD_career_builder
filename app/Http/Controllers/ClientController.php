<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class ClientController extends Controller
{
    public function getHome()
    {
    	$jobs=Job::paginate(10);
    	return view('client.pages.home',['jobs'=>$jobs]);
    }

    public function getWorkInfo(Request $request)
    {
    	$id = $request->id;
        $job = Job::find($id);
    	return view('client.pages.work_info', ['job' => $job]);
    }
}
