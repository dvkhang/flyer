<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlyerRequest;
use App\Http\Requests;
use App\Flyer;

class FlyerController extends Controller
{
    public function index()
    {
    	# code...
    }

    public function create()
    {
    	return view('flyer.create');
    }
    public function store(FlyerRequest $request)
    {
    	Flyer::create($request->all());
        return redirect()->back();
    }
}
