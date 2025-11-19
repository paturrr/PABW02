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
                                <a href="{{ asset($file->filepath) }}" target="_blank">Download</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
