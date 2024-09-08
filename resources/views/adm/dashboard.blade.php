<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Início') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <section>
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Atualizar imagens do Slide Principal') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Adicione ou remova imagens') }}
                        </p>
                    </header>
                    <form action="{{ route('add_image') }}" class="mt-6 space-y-6" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="imgType" value="main_slide">
                        <div class="mb-3">
                            <input class="form-control" name="image" type="file" id="formFile">
                        </div>
                        <div class="row">
                            <div class="col"><button class="btn btn-primary" type="submit">Upload</button></div>
                            <div class="col">
                                @if (session('success_main_slide'))
                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                    <div class="alert alert-success" role="alert" style="color: green;">
                                        {{ session('success_main_slide') }}
                                    </div>
                                @endif

                                @if (session('error_main_slide'))
                                    <div class="alert alert-danger" role="alert" style="color: red;">
                                        {{ session('error_main_slide') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                    </form>

                    <div class="row space-x-6 p-6 text-gray-900">
                        @foreach ($imageUrlsMainSlide as $imageUrl)
                            <div class="card" style="width: 18rem;">
                                <img src="{{ $imageUrl }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    {{-- <h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up
											the
											bulk of the card's content.</p> --}}
                                    <form action="{{ route('remove_image') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <input type="hidden" name="imgType" value="main_slide">
                                        <input type="hidden" name="image" value="{{ basename($imageUrl) }}">
                                        <button class="btn btn-danger" type="submit">Remover</button>
                                    </form>
                                </div>


                            </div>
                        @endforeach
                    </div>

                </section>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <section>
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Atualizar imagens de serviços') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Adicione ou remova imagens') }}
                        </p>
                    </header>
                    <form action="{{ route('add_image') }}" class="mt-6 space-y-6" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="imgType" value="services">
                        <div class="mb-3">
                            <input class="form-control" name="image" type="file" id="formFile">
                        </div>
                        <div class="row">
                            <div class="col"><button class="btn btn-primary" type="submit">Upload</button></div>
                            <div class="col">
                                @if (session('success_services'))
                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                    <div class="alert alert-success" role="alert" style="color: green;">
                                        {{ session('success_services') }}
                                    </div>
                                @endif

                                @if (session('error_services'))
                                    <div class="alert alert-danger" role="alert" style="color: red;">
                                        {{ session('error_services') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                    </form>

                    <div class="row space-x-6 p-6 text-gray-900">
                        @foreach ($imageUrlsServices as $imageUrl)
                            <div class="card" style="width: 18rem;">
                                <img src="{{ $imageUrl }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    {{-- <h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up
											the
											bulk of the card's content.</p> --}}
                                    <form action="{{ route('remove_image') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <input type="hidden" name="imgType" value="services">
                                        <input type="hidden" name="image" value="{{ basename($imageUrl) }}">
                                        <button class="btn btn-danger" type="submit">Remover</button>
                                    </form>
                                </div>


                            </div>
                        @endforeach
                    </div>

                </section>
            </div>
        </div>
    </div>


</x-app-layout>
