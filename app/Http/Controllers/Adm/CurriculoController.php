<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\Curriculo;
use Illuminate\Http\Request;

class CurriculoController extends Controller
{
	public function curriculoPage()
	{
		$curriculos = Curriculo::paginate(10);

		return view('adm.curriculo', compact(['curriculos']));
	}	

	public function downloadCurriculo($file)
	{
		if (auth()->check()) {
			$filePath = storage_path('file/curriculo/' . $file);

			if (file_exists($filePath)) {
				return response()->download($filePath);
			} else {
				return redirect()->back()->with('error', 'Arquivo não encontrado.');
			}
		} else {
			return redirect()->route('login')->with('error', 'Você precisa estar logado para acessar este arquivo.');
		}
	}
}
