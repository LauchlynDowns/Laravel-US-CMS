<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('super secret admin area') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Users
                    <table class="table table-striped">
                        <thead>
                            <tr>
                               
                                <th scope="col">id#</th>
                                <th scope="col">Username</th>
                                <th scope="col">member since</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Email verified date</th>
                                <th scope="col">is admin?</th>
                                <th scope="col">ban user</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activeusers as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->email_verified_at }}</td>
                                    <td>{{ $user->admin }}</td>
                                    <td>
                                        <form style="display: inline;" action="/banuser" method="POST">@csrf<input
                                                name="userid" type="hidden" value="{{$user->id}}"><button type="submit"
                                                class="btn btn-danger"
                                                onclick="return confirm('Are you sure to ban ? ')">Ban</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>




</x-app-layout>
