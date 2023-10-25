@php
$previousdokter = null;
@endphp

<x-app-layout>
    <x-slot name="title">
        Rekam Medis
    </x-slot>
    
    <div>
        @include('layouts.Sidebar')
        <div class="p-4 sm:ml-64">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @foreach($rekams as $rekam)
                    @if($rekam->nama_dokter != $previousdokter)
                        @php
                        $previousdokter = $rekam->nama_dokter;
                        @endphp

                        <h2 class="text-4xl font-extrabold dark:text-white my-6">dokter: {{ $rekam->nama_dokter }}</h2>
                        <div class="container mx-auto gap-8 flex flex-col sm:flex-row flex-wrap">
                            @foreach($rekams as $rekamInner)
                                @if($rekamInner->nama_dokter == $rekam->nama_dokter)
                                    <div class="w-96 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        @if (file_exists(public_path('storage/' . $rekam->picture)))
                                            <img draggable="false" class="object-cover w-full h-48 rounded-t-lg" src="{{ asset('storage/' . $rekam->picture) }}" alt="{{ $rekam->id }}">
                                        @else
                                            <img draggable="false" class="object-cover w-full h-48 rounded-t-lg" src="{{ $rekam->picture }}" alt="{{ $rekam->id }}">
                                        @endif
                                        <div class="p-5 justify-between">
                                            
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $rekam->kondisi }}</p>
                                            <div class="mb-3 grid grid-cols-1 gap-4">
                                                <div>
                                                    <p class="mb-1 font-normal text-sm text-gray-700 dark:text-white">Pasien : {{ $rekam->nama_pasien }}</p>
                                                    <p class="mb-1 font-normal text-sm text-gray-700 dark:text-white">Suhu Tubuh : {{ $rekam->suhu }} °C</p>
                                                </div>
                                            </div>

                                            <div class="flex">
                                                <a href="{{ route('admin.rekam.edit', $rekam->id) }}" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                                                    Edit
                                                </a>
                                                <form action="{{ route('admin.rekam.destroy', $rekam->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="px-4 py-2 ml-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-blue">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
