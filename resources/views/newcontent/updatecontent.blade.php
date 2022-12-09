<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('update Content') }}
        </h2>
    </x-slot>
    <div class="py-12 ">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col space-y-4">
                    @foreach ($contents as $content)
                        <form method="post" action="/update">
                            @csrf
                            <input name="id" type="hidden" value="{{ $content->id }}">
                            <input name="userid" type="hidden" value="{{ Auth::user()->id }}">
                            <div class="py-2">

                                <p>Content Title</p>
                                <input class="border border-gray-400 p-2 w-full"
                                    placeholder="name your content e.g super awesome content"
                                    value="{{ $content->contentTitle }}" type="text" name="updatedccontenttitle"
                                    required>
                            </div>
                            <div class="py-2">
                                <p>Content Description</p>

                                <input class="border border-gray-400 p-2 w-full"
                                    placeholder="What is your content about?" type="text"
                                    name="updatedcontentdescription" value="{{ $content->contentDescription }}"
                                    required>
                            </div>
                            <div class="py-6">
                                <p>Content Body</p>
                                <textarea class="border border-gray-400 p-2 w-full" style="height: 15rem"
                                    placeholder="this is where your content is written" type="text" name="updatedcontentbody" required>{{ $content->contentBody }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Content</button>
                        </form>
                    @endforeach
                </div>

            </div>
        </div>

    </div>

</x-app-layout>
