<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function index()
    {
    	//return 'Index page';
    	return view('pages.home');
    }

    public function about()
    {
    	//return 'Index page';
    	return view('pages.about');
    }

    public function contact()
    {
    	//return 'Index page';
    	return view('pages.contact');
    }

    public function products()
    {
    	//return 'Index page';
    	return view('pages.products');
    }
}
