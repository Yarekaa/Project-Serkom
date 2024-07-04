@extends('layouts.app')

@section('content')

@isset($data)

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white text-center">Hasil Pendaftaran Beasiswa</h2>
        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
            <div class="sm:col-span-2">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ $data->nama }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" disabled required="">
            </div>
            <div class="sm:col-span-2">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="text" name="email" id="email" value="{{ $data->email }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" disabled required="">
            </div>
            <div class="sm:col-span-2">
                <label for="nomor_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor HP</label>
                <input type="number" name="nomor_hp" id="nomor_hp" value="{{ $data->nomor_hp }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" disabled required="">
            </div>
            <div>
                <label for="semester" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester</label>
                <input type="text" name="semester" id="semester" value="{{ $data->semester }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" disabled required="">
            </div> 
            <div>
                <label for="ipk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IPK terakhir</label>
                <input type="text" name="ipk" id="ipk" value="{{ $data->ipk }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" disabled required="">
            </div> 
            <div class="sm:col-span-2">
                <label for="beasiswa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Beasiswa</label>
                <input type="text" name="beasiswa" id="beasiswa" value="{{ $data->beasiswa }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" disabled required="">
            </div>
            <div class="sm:col-span-2">
                <label for="berkas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berkas Syarat</label>
                <a href="{{ route('download', ['filename' => $data->berkas]) }}" class=" underline bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ $data->berkas }}</a>
            </div>
            <div class="sm:col-span-2">
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                <input type="text" name="status_ajuan" value="{{ $data->status_ajuan }}" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 font-bold" disabled required="">
            </div>            
        </div>
    </div>
</section>

@endisset

@endsection