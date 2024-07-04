@extends('layouts.app')

@section('content')

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white text-center">Daftar Mahasiswa</h2>
        <form action="{{ route('daftarmhs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan Nama</label>
                    <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 {{ $errors->has('nama') ? 'border-red-500' : '' }}" placeholder="Masukkan Nama Anda" value="{{ old('nama') }}" required="">
                    @if ($errors->has('nama'))
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $errors->first('nama') }}</p>
                    @endif
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan Email</label>
                    <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 {{ $errors->has('email') ? 'border-red-500' : '' }}" placeholder="Masukkan Email Anda" value="{{ old('email') }}" required="">
                    @if ($errors->has('email'))
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $errors->first('email') }}</p>
                    @endif
                </div>                
                <div class="sm:col-span-2">
                    <label for="nomor_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor HP</label>
                    <input type="text" name="nomor_hp" id="nomor_hp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 {{ $errors->has('nomor_hp') ? 'border-red-500' : '' }}" placeholder="Masukan nomor hp" value="{{ old('nomor_hp') }}" required="">
                    @if ($errors->has('nomor_hp'))
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $errors->first('nomor_hp') }}</p>
                    @endif
                </div>                
            </div>
            <button id="simpan" class="items-center px-5 py-2.5 mt-5 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg ">
                Daftar
            </button>
        </form>
    </div>
</section>

@endsection
