<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contatos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
					<div class="table-responsive">
						<table class="table table-striped table-responsive">
							<thead>
								<tr>
									<th scope="col"></th>
									<th scope="col">Nome</th>
									<th scope="col">E-mail</th>
									<th scope="col">Telefone</th>
									<th scope="col">Assunto</th>
									<th scope="col">Data</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($contatos as $contato)
									<tr>
										<th scope="row">{{ $contato->id }}</th>
										<td>{{ $contato->nome }}</td>
										<td>{{ $contato->email }}</td>
										<td>
											{{ $contato->phone }}
										</td>
										<td>
											{{ $contato->subject }}
										</td>
										<td>{{ date('d/m/Y', strtotime($contato->created_at)) }}</td>
										<td>
											<center>
												<a href="#" data-toggle="modal"
												data-target="#showMessageModal-{{ $contato->id }}">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
														<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
														<path
															d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
													</svg>
												</a>
											</center>
										</td>
										<td>
											<!-- Botão de remoção -->
											<a href="#" data-toggle="modal"
												data-target="#confirmDeleteModal-{{ $contato->id }}">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
													fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
													<path
														d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
												</svg>
											</a>
	
											<!-- Modal de Confirmação -->
											<div class="modal fade" id="confirmDeleteModal-{{ $contato->id }}"
												tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel"
												aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar
																Exclusão</h5>
															<button type="button" class="close" data-dismiss="modal"
																aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															Você tem certeza que deseja remover este contato? Esta ação
															não pode ser desfeita.
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary"
																data-dismiss="modal">Cancelar</button>
															<a href="{{ route('remove.contato', $contato->id) }}"
																class="btn btn-danger">Remover</a>
														</div>
													</div>
												</div>
											</div>
	
											<!-- Modal de visualização messagem -->
											<div class="modal fade" id="showMessageModal-{{ $contato->id }}"
												tabindex="-1" role="dialog" aria-labelledby="showMessageModalLabel"
												aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="showMessageModalLabel">{{ $contato->nome }}</h5>
															<button type="button" class="close" data-dismiss="modal"
																aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															{{ $contato->message }}
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary"
																data-dismiss="modal">Fechar</button>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>

                    <div class="d-flex justify-content-center">
                        {{ $contatos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
