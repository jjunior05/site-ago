<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
	{
		$imagePath = public_path('img/main_slide');

		$images = File::files($imagePath);

		$imagesSrc= [];
		foreach ($images as $image) {
			$imagesSrc[] = asset('img/main_slide/' . $image->getFilename());
		}
		
		return view('welcome', compact('imagesSrc'));
	}
}
