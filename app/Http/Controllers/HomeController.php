<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Display the home page.
	 */
	public function index()
	{
		$menu = Menu::where('name', 'main')->first();
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

