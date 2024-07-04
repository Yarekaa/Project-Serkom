@extends('layouts.app')

<?php

//deklarasi array untuk pilihan beasiswa
$pilihanBeasiswa = [
    ['title' => 'Akademis', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.' , 'benefit1' => 'Dana Pendaftaran', 'benefit2' => 'Dana SPP/Uang Kuliah Tunggal', 'benefit3' => 'Dana Tunjangan Buku', 'benefit4' => 'Dana Transportasi', 'benefit5' => 'Dana keadaaan darurat (jika diperlukan)'],
    ['title' => 'Prestasi & Bakat', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.' , 'benefit1' => 'Dana SPP/Uang Kuliah Tunggal', 'benefit2' => 'Dana Tunjangan Buku', 'benefit3' => 'Dana Hidup Bulanan', 'benefit4' => 'Dana Lomba Internasional', 'benefit5' => 'Dana keadaaan darurat (jika diperlukan)'],
    ['title' => 'Riset & Penelitian', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.' , 'benefit1' => 'Dana Penelitian Tesis/Disertasi', 'benefit2' => 'Dana Seminar Internasional', 'benefit3' => 'Dana Publikasi Jurnal Internasional', 'benefit4' => 'Dana Lomba Internasional', 'benefit5' => 'Dana keadaaan darurat (jika diperlukan)'],
];

//deklarasi array untuk penjelasan beasiswa
$items = [
    ['title' => 'Beasiswa Akademis' , 'description' => 'Beasiswa Akademis diberikan kepada mahasiswa yang mencapai prestasi akademis tinggi. Beasiswa ini bertujuan untuk memberikan dukungan finansial kepada mereka yang menunjukkan keunggulan dalam studi mereka. Kriteria pemberian beasiswa meliputi capaian nilai tinggi, partisipasi aktif dalam kegiatan akademik, dan rekomendasi dari dosen atau pengawas akademis.'],
    ['title' => 'Beasiswa Prestasi & Bakat' , 'description' => 'Beasiswa Prestasi & Bakat diberikan kepada mahasiswa yang memiliki prestasi di luar kegiatan akademis, seperti olahraga, seni, atau bidang lainnya. Beasiswa ini bertujuan untuk mendukung perkembangan bakat dan prestasi mereka di luar kelas. Kriteria pemberian beasiswa melibatkan pencapaian prestasi yang signifikan, portofolio bakat, dan rekomendasi dari pelatih atau mentor.'],
    ['title' => 'Beasiswa Riset & Penelitian' , 'description' => 'Beasiswa Riset & Penelitian disediakan bagi mahasiswa yang tertarik untuk melakukan penelitian akademis. Beasiswa ini mendukung proyek penelitian mahasiswa dan mendorong mereka untuk terlibat dalam kegiatan riset yang mendalam. Kriteria pemberian beasiswa mencakup rencana penelitian yang kuat, dukungan dari dosen pembimbing, dan potensi dampak positif dari hasil penelitian tersebut.'],  
];

?>

@section('content')

    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-gray-800 dark:text-white">Beasiswa Indonesia</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-800 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab voluptatem dignissimos unde quidem.</p>
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-gray-700 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-900">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="img/hero_2.png" alt="mockup">
            </div>                
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-800 dark:text-white">Berbagai Pilihan Beasiswa</h2>
                <p class="mb-5 font-light text-gray-800 sm:text-xl dark:text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam voluptatem deserunt blanditiis non porro pariatur provident soluta?</p>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                @foreach ($pilihanBeasiswa as $pilihan)
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">{{ $pilihan['title'] }}</h3>
                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">{{ $pilihan['description'] }}</p>
                    <!-- List -->
                    <ul role="list" class="mb-8 my-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>{{ $pilihan['benefit1'] }}</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>{{ $pilihan['benefit2'] }}</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>{{ $pilihan['benefit3'] }}</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>{{ $pilihan['benefit4'] }}</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span>{{ $pilihan['benefit5'] }}</span>
                        </li>
                    </ul>
                    <a href="/daftar" class="text-white bg-gray-700 hover:bg-gray-900 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-blue-900">Daftar Sekarang</a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Penjelasan Mengenai Pilihan Beasiswa</h2>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">Berikut ini merupakan penjelasan dari pilihan beasiswa yang ada pada program Beasiswa Indonesia.</p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                @foreach ($items as $item)
                    <div>
                        <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">{{ $item['title'] }}</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-justify">{{ $item['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
