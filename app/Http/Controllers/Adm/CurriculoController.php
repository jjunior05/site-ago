<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\Curriculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CurriculoController extends Controller
{

	const PATH_CURRICULO = 'file/curriculo/';

	public function curriculoPage()
	{
		$curriculos = Curriculo::paginate(10);

		return view('adm.curriculo', compact(['curriculos']));
	}

	public function downloadCurriculo($file)
	{
		if (auth()->check()) {
			$filePath = storage_path(self::PATH_CURRICULO . $file);

			if (file_exists($filePath)) {
				return response()->download($filePath);
			} else {
				return redirect()->back()->with('error', 'Arquivo não encontrado.');
			}
		} else {
			return redirect()->route('login')->with('error', 'Você precisa estar logado para acessar este arquivo.');
		}
	}

	public function removeCurriculo($id)
	{
		$curriculo = Curriculo::find($id);

		$curriculoPath = storage_path(self::PATH_CURRICULO . $curriculo->file);

		if (File::exists($curriculoPath)) {
			File::delete($curriculoPath);
			$curriculo->delete();
			return redirect()->back()->with(self::PATH_CURRICULO, 'Currículo removido com sucesso!');
		}

		return redirect()->back()->with(self::PATH_CURRICULO, 'Currículo não encontrada.');
	}
}
