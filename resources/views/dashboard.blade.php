<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Content') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($contents as $content)
                        <div class="card" style="margin:2rem">
                            <div class="card-body">
                                <h5 class="card-title">{{ $content->contentTitle }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $content->contentDescription }}</h6>
                                <p class="card-text">{{ $content->contentBody }}</p>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $content->created_at }}</h6>
                                {{-- <button type="button" class="btn btn-primary">another button</button> --}}
                                {{-- <button type="button" class="btn btn-danger">Delete</button> --}}

                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>

    </div>

</x-app-layout>
