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
		$menu = Menu::where('id', get_setting('header_menu'))->first();
		if (!$menu) {
			$menu = Menu::first();
		}
		return view('frontend.pages.index', compact('menu'));
	}

	/**
	 * Handle incoming request.
	 */
	public function __invoke(Request $request)
	{
		return $this->index();
	}
}
