<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Display the home page.
	 */
	public function index()
	{
		return view('frontend.pages.index');
	}

	/**
	 * Handle incoming request.
	 */
	public function __invoke(Request $request)
	{
		return $this->index();
	}
}

