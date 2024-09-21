<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Currículos Recebidos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Atuação</th>
                                    <th scope="col">Arquivo</th>
                                    <th scope="col">Data Envio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($curriculos as $curriculo)
                                    <tr>
                                        <th scope="row">{{ $curriculo->id }}</th>
                                        <td>{{ $curriculo->nome }}</td>
                                        <td>{{ $curriculo->atuacao }}</td>
                                        <td>
                                            {{ $curriculo->file }}
                                        </td>
                                        <td>{{ date('d/m/Y', strtotime($curriculo->created_at)) }}</td>
                                        <td>
                                            <center>
                                                <a href="{{ route('curriculo.download', $curriculo->file) }}" download>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-download"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                                        <path
                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                                    </svg>
                                                </a>
                                            </center>
                                        </td>
                                        <td>
                                            <!-- Botão de remoção -->
                                            <a href="#" data-toggle="modal"
                                                data-target="#confirmDeleteModal-{{ $curriculo->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                                </svg>
                                            </a>


                                            <!-- Modal de Confirmação -->
                                            <div class="modal fade" id="confirmDeleteModal-{{ $curriculo->id }}"
                                                tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="confirmDeleteModalLabel">
                                                                Confirmar
                                                                Exclusão</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Você tem certeza que deseja remover este currículo? Esta
                                                            ação
                                                            não pode ser desfeita.
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cancelar</button>
                                                            <a href="{{ route('remove_curriculo', $curriculo->id) }}"
                                                                class="btn btn-danger">Remover</a>
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
                        {{ $curriculos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</div>
