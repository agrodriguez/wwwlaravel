<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //

    public function index()
    {
    	//return 'Index page';
    	$name='Angel Rodriguez';
    	return view('pages.home')->with('name',$name);
    }

    public function articles()
    {
        //return 'Articles page';
        return view('pages.articles');
    }

    public function about()
    {
    	//return 'About page';
    	return view('pages.about')->with([
    			'first'=>'Angel',
    			'last'=>'Rodriguez'
    		]);
    }

    public function contact()
    {
    	
    	/*
    	$array = [];
    	$array['first'] = 'Angel';
    	$array['last'] = 'Rodriguez';
    	*/

    	/*
    	$first='Angel';
    	$last='Rodriguez';
    	compact('first','last');
    	*/

    	//return 'Contact page';

    	$array=[
    			'first'=>'Angel',
    			'last'=>'Rodriguez'
    		];

    	return view('pages.contact')->with('array', $array);
    }

    public function products()
    {
    	//return 'Products page';

    	/*
    	$array=[
    			'first'=>'Angel',
    			'last'=>'Rodriguez'
    		];
    	return view('pages.products',$array);
    	*/

    	$products = ['uno','dos','tres','cuatro'];

    	return view('pages.products',compact('products'));

    	
    }
}
