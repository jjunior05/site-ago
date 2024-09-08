<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class IndexController extends Controller
{
	const PATH_IMG = [
		'main_slide' => 'img/main_slide/',
		'services' => 'img/services/',
	];

    public function index()
	{
		$imagePathMainsSlide = public_path(SELF::PATH_IMG['main_slide']);
		$imagesServices = public_path(SELF::PATH_IMG['services']);
		
		$imagesMainSlide = File::files($imagePathMainsSlide);
		$imagesService = File::files($imagesServices);

		$imageUrlsMainSlide = [];
		$imageUrlsServices = [];

		foreach ($imagesMainSlide as $image) {
			$imageUrlsMainSlide[] = asset(SELF::PATH_IMG['main_slide'] . $image->getFilename());
		}

		foreach ($imagesService as $imageService) {
			$imageUrlsServices[] = asset(SELF::PATH_IMG['services'] . $imageService->getFilename());
		}
		
		return view('welcome', compact('imageUrlsMainSlide', 'imageUrlsServices'));
	}
}
