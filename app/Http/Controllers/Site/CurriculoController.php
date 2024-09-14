<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Curriculo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CurriculoController extends Controller
{

	const PATH_CURRICULO = [
		'curriculo' => 'file/curriculo/',
	];

	public function addCurriculo(Request $request)
	{
		$request->validate([
			'nome' => 'required',
			'atuacao' => 'required',
			'curriculo_doc' => 'required|file|mimes:pdf,doc,docx|max:2048',
		], [
			'nome.required' => 'Campo nome obrigatório',
			'nome.atuacao' => 'Campo atuacao obrigatório',
			'curriculo_doc.required' => 'Campo curriculo obrigatório',
			'curriculo_doc.file' => 'Arquivo inválido',
			'curriculo_doc.mimes' => 'Formato não permitido, precisa ser pdf,doc,docx',
			'curriculo_doc.max' => 'Arquivo ultrapassa o tamanho permitodo.',
		]);

		$docPath = storage_path(SELF::PATH_CURRICULO['curriculo']);

		$image = $request->file('curriculo_doc');

		$docName = $image->getClientOriginalName();

		$image->move($docPath, $docName);

		$dataCurriculo = [
			'nome' => $request->nome,
			'atuacao' => $request->atuacao,
			'file' => $docName,
		];		

		Curriculo::create($dataCurriculo);

		return redirect()->back()->with('success_curriculo', 'Curriculo enviado com sucesso!');
	}
}
