<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
	public function curriculoPage()
	{
		$contatos = Contato::paginate(10);

		return view('adm.contato', compact(['contatos']));
	}

	public function removeContato($id)
	{
		$contato = Contato::find($id);

		$contato->delete();

		return redirect()->back()->with('success_remove_contato', 'Contato Removido com sucesso.');
	}
}
