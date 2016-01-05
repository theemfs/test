<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return Response
	 */
	public function about()
	{
		//return \Auth::user();
		return view('pages.about');
	}

	public function welcome()
	{
		//return \Auth::user();
		return view('pages.welcome');
	}

	public function home()
	{
		//return \Auth::user();
		return view('pages.home');
	}
}
