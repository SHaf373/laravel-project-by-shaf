<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{
	public function main()
	{
	$pro = Property::all();
	return view('studentlogin.php')->with('pros', $pro);
	}
}