<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    const PATH_CURRICULO = [
		'curriculo' => 'file/curriculo/',
	];

	public function addContact(Request $request)
	{
		$request->validate([
			'nome' => 'required',
			'email' => 'required',
			'phone' => 'required',
			'subject' => 'required',
			'message' => 'required',
		], [
			'nome.required' => 'Campo nome obrigatório',
			'email.required' => 'Campo email obrigatório',
			'phone.required' => 'Campo telefone obrigatório',
			'subject.required' => 'Campo assunto obrigatório',
			'curriculo_doc.mimes' => 'Formato não permitido, precisa ser pdf,doc,docx',
			'curriculo_doc.max' => 'Arquivo ultrapassa o tamanho permitodo.',
		]);

		
		$dataContato = [
			'nome' => $request->nome,
			'email' => $request->email,
			'phone' => $request->phone,
			'subject' => $request->subject,
			'message' => $request->message,
		];		

		Contato::create($dataContato);

		return redirect()->back()->with('success_contato', 'Contato enviado com sucesso!');
	}
}
