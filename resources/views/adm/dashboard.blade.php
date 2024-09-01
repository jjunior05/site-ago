<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Início') }}
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if (session('success'))
                    <div style="color: green;">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div style="color: red;">
                        {{ session('error') }}
                    </div>
                @endif
                <h1><span class="badge bg-secondary">Adcionar novas imagens</span></h1>
                <form action="{{ route('add_image') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div>
                    <button class="btn btn-primary" type="submit">Upload</button>
                </form>

                <div class="row p-6 text-gray-900">
                    @foreach ($imageUrls as $imageUrl)
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $imageUrl }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                {{-- <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk of the card's content.</p> --}}
                                <form action="{{ route('remove_image') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <input type="hidden" name="image" value="{{ basename($imageUrl) }}">
                                    <button class="btn btn-danger" type="submit">Remover</button>
                                </form>
                            </div>


                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
