<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
	public function home()
	{
		$imagePath = public_path('img/main_slide');

		$images = File::files($imagePath);

		$imageUrls = [];
		foreach ($images as $image) {
			$imageUrls[] = asset('img/main_slide/' . $image->getFilename());
		}

		return view('adm.dashboard', compact('imageUrls'));
	}


	public function removeImage(Request $request)
	{
		$imagePath = public_path('img/main_slide/' . $request->image);

		if (File::exists($imagePath)) {

			File::delete($imagePath);

			return redirect()->back()->with('success', 'Imagem removida com sucesso!');
		}

		return redirect()->back()->with('error', 'Imagem não encontrada.');
	}


	public function addImage(Request $request)
	{
		$request->validate([
			'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
		]);

		$imagePath = public_path('img/main_slide');

		$image = $request->file('image');

		$imageName = $image->getClientOriginalName();

		$image->move($imagePath, $imageName);

		return redirect()->back()->with('success', 'Imagem adicionada com sucesso!');
	}
}
