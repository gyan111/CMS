<?php namespace Modules\Setting\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class SettingController extends Controller {
	
	public function index()
	{
		return view('setting::index');
	}
	
}