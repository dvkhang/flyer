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
        // flash()->overlay('Hello', 'This is message');
    	return view('flyer.create');
    }
    public function store(FlyerRequest $request)
    {
        
    	Flyer::create($request->all());

        flash()->success('Success', 'Your flyer has been created');

        return redirect()->back();
    }

    public function show()
    {
        # code...
    }
}
