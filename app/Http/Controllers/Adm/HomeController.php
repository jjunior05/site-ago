<?php

namespace App\Http\Controllers\Adm;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	const PATH_IMG = [
		'main_slide' => 'img/main_slide/',
		'services' => 'img/services/',
	];
	
	const SUCCESS_MSG = [
		'main_slide' => 'success_main_slide',
		'services' => 'success_services',
	];
	
	const ERROR_MSG = [
		'main_slide' => 'error_main_slide',
		'services' => 'error_services',
	];

	public function home()
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
		
		return view('adm.dashboard', compact('imageUrlsMainSlide', 'imageUrlsServices'));
	}


	public function removeImage(Request $request)
	{
		$imagePath = public_path(SELF::PATH_IMG[$request->imgType] . $request->image);

		if (File::exists($imagePath)) {

			File::delete($imagePath);

			return redirect()->back()->with(SELF::SUCCESS_MSG[$request->imgType], 'Imagem removida com sucesso!');
		}

		return redirect()->back()->with(SELF::ERROR_MSG[$request->imgType], 'Imagem não encontrada.');
	}


	public function addImage(Request $request)
	{		
		$request->validate([
			'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
		],[
			'image.required' => 'Campo imagem oibrigatório',
			'image.image' => 'A imagem precisa ser jpeg,png,jpg,gif',
			'image.max' => 'A imagem ultrapassa o tamanho máximo pernmitido',
		]);

		$imagePath = public_path(SELF::PATH_IMG[$request->imgType]);

		$image = $request->file('image');

		$imageName = $image->getClientOriginalName();

		$image->move($imagePath, $imageName);

		return redirect()->back()->with(SELF::SUCCESS_MSG[$request->imgType], 'Imagem adicionada com sucesso!');
	}
}
