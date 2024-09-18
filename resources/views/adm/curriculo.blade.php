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
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Nome</th>
                                <th scope="col">Atuação</th>
                                <th scope="col">Arquivo</th>
                                <th scope="col">Data Envio</th>
                                <th scope="col">Baixar</th>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                    <path
                                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                                    <path
                                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                                </svg>
                                            </a>
                                        </center>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{ $curriculos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
