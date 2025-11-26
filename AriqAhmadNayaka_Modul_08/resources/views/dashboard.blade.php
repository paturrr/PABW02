<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <br>
                    <form action="/upload" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file">
                        <button type="submit">Upload</button>

                    </form>

                    <br>
                    <hr>
                    <br>
                    <h3>Daftar List</h3>
                    <br>
                    <?php $files = \App\Models\upload::all(); ?>
                    <ul>
                        @foreach ($files as $file)
                            <li>
                                {{ $file->filename }} -
                                <a href="{{ asset($file->filepath) }}" target="_blank">Download</a> <form action="/upload/{{ $file->id }}" method="POST">@csrf @method('DELETE')<button type="submit">Delete</button></form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @if(auth()->user()->role == 'admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <br>
                    <h3>Admin Section - User Management</h3>
                    <br>
                    <?php $users = \App\Models\User::all(); ?>
                    <ul>
                        @foreach ($users as $user)
                            <li>
                                {{ $user->name }} ({{ $user->email }}) - Role: {{ $user->role }} <form action="/users/{{ $user->id }}" method="POST">@csrf @method('DELETE')<button type="submit">Delete</button></form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if (session('success'))
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            </div>
        </div>
    @endif
</x-app-layout>
