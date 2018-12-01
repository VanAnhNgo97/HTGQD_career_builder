<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function getHome()
    {
    	return view('admin.pages.home');
    }

    public function getAddWork()
    {
    	return view('admin.pages.add_work');
    }

    public function getEditWork()
    {
    	return view('admin.pages.edit_work');
    }

    public function getEdit()
    {
    	return view('admin.pages.edit_trong_so');
    }
}
