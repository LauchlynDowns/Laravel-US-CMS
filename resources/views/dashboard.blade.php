<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @foreach ($contents as $content)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   All Content<br>
                    ID: {{$content->id}}<br>
                    Title:{{$content->contentTitle}}<br>
                    UserId:{{$content->userid}}<br>
                    Description:{{$content->contentDescription}}<br>
                    Content:{{$content->contentBody}}<br>
                    Date:{{$content->created_at}}
                    
                </div>
                
            </div>
        </div>
        
    </div>
    @endforeach
</x-app-layout>
