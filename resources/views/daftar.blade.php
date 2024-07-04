@extends('layouts.app')

<?php
// $pendaftars = [
//     [
//         'nama' => 'John Doe',
//         'email' => 'john@gmail.com',
//         'nomor_hp' => '08123456789',
//         'semesters' => [
//             ['semester' => 'Semester 1', 'ipk' => '3.5'],
//             ['semester' => 'Semester 2', 'ipk' => '3.2'],
//             ['semester' => 'Semester 3', 'ipk' => '2.9'],
//             ['semester' => 'Semester 4', 'ipk' => '3.1'],
//             ['semester' => 'Semester 5', 'ipk' => '3.4'],
//             ['semester' => 'Semester 6', 'ipk' => '3.0'],
//             ['semester' => 'Semester 7', 'ipk' => '3.2'],
//             ['semester' => 'Semester 8', 'ipk' => '3.6'],
//         ],
//     ],
//     [
//         'nama' => 'Jane Doe',
//         'email' => 'jane@gmail.com',
//         'nomor_hp' => '08124124124',
//         'semesters' => [
//             ['semester' => 'Semester 1', 'ipk' => '3.2'],
//             ['semester' => 'Semester 2', 'ipk' => '3.0'],
//             ['semester' => 'Semester 3', 'ipk' => '3.1'],
//             ['semester' => 'Semester 4', 'ipk' => '3.5'],
//             ['semester' => 'Semester 5', 'ipk' => '3.3'],
//             ['semester' => 'Semester 6', 'ipk' => '3.2'],
//             ['semester' => 'Semester 7', 'ipk' => '3.4'],
//             ['semester' => 'Semester 8', 'ipk' => '3.8'],
//         ],
//     ],
//     [
//         'nama' => 'Jhonny Doe',
//         'email' => 'jhonny@gmail.com',
//         'nomor_hp' => '087214214484',
//         'semesters' => [
//             ['semester' => 'Semester 1', 'ipk' => '2.9'],
//             ['semester' => 'Semester 2', 'ipk' => '3.0'],
//             ['semester' => 'Semester 3', 'ipk' => '3.2'],
//             ['semester' => 'Semester 4', 'ipk' => '3.1'],
//             ['semester' => 'Semester 5', 'ipk' => '2.8'],
//             ['semester' => 'Semester 6', 'ipk' => '3.3'],
//             ['semester' => 'Semester 7', 'ipk' => '3.0'],
//             ['semester' => 'Semester 8', 'ipk' => '3.2'],
//         ],
//     ],
// ];
// ?>

@section('content')

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white text-center">Daftar Beasiswa</h2>
        <form action="{{ route('daftar.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih nama yang terdaftar</label>
                    <select id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" onchange="updateIPK()">
                        <option value="" disabled selected>Pilih Nama Anda</option>
                        @foreach ($mahasiswas as $mahasiswa)
                            <option value="{{ $mahasiswa->nama }}">{{ $mahasiswa->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan Email</label>
                    <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 {{ $errors->has('email') ? 'border-red-500' : '' }}" placeholder="Masukkan Email Anda" readonly value="{{ old('email') }}" required="">
                    @if ($errors->has('email'))
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $errors->first('email') }}</p>
                    @endif
                </div>                
                <div class="sm:col-span-2">
                    <label for="nomor_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor HP</label>
                    <input type="text" name="nomor_hp" id="nomor_hp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 {{ $errors->has('nomor_hp') ? 'border-red-500' : '' }}" placeholder="Masukan nomor hp" readonly value="{{ old('nomor_hp') }}" required="">
                    @if ($errors->has('nomor_hp'))
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $errors->first('nomor_hp') }}</p>
                    @endif
                </div>                
                <div>
                    <label for="semester" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Semester</label>
                    <select id="semester" name="semester" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" onchange="updateIPK()">
                        <option value="" disabled selected>Pilih Semester</option>
                        @foreach ($semesters as $semester)
                            @if (old('semester_id') == $semester->id)
                                <option value="{{ $semester->id }}" selected>{{ $semester->nama }}</option>
                            @else
                                <option value="{{ $semester->id }}">{{ $semester->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>                
                <div>
                    <label for="ipk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IPK terakhir</label>
                    <input type="text" name="ipk" id="ipk" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" readonly required="">
                </div> 
                <div class="sm:col-span-2">
                    <label for="beasiswa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilihan Beasiswa</label>
                    <select id="beasiswa" name="beasiswa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="" disabled selected>Pilih Beasiswa</option>
                        @foreach ($beasiswas as $beasiswa)
                            <option value="{{ $beasiswa->nama }}">{{ $beasiswa->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload Berkas Syarat</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="berkas" autocomplete="berkas" aria-describedby="user_avatar_help" id="berkas" type="file">
                </div>
            </div>
            <button id="simpan" class="items-center px-5 py-2.5 mt-5 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg ">
                Daftar
            </button>
        </form>
    </div>
</section>

{{-- <script>
    

    function updateIPK() {
        var nama = document.getElementById('nama').value;
        var semester = document.getElementById('semester').value;
        var emailInput = document.getElementById('email');
        var nomorHpInput = document.getElementById('nomor_hp');
        var ipkInput = document.getElementById('ipk');

        // Temukan data pendaftar berdasarkan nama yang dipilih
        var pendaftar = @json($pendaftars);

        for (var i = 0; i < pendaftar.length; i++) {
            if (pendaftar[i].nama === nama) {
                // Isi email dan nomor hp
                emailInput.value = pendaftar[i].email;
                nomorHpInput.value = pendaftar[i].nomor_hp;

                // Temukan IPK sesuai dengan semester yang dipilih
                var ipk = '';
                for (var j = 0; j < pendaftar[i].semesters.length; j++) {
                    if (pendaftar[i].semesters[j].semester === semester) {
                        ipk = pendaftar[i].semesters[j].ipk;
                        break;
                    }
                }

                // Isi IPK terakhir
                ipkInput.value = ipk;
                
                // Disable atau enable pilihan beasiswa dan tombol daftar berdasarkan IPK dibawah 3.0
                var beasiswaSelect = document.getElementById('beasiswa');
                var simpanButton = document.getElementById('simpan');
                if (ipk < 3.0) {
                    beasiswaSelect.disabled = true;
                    simpanButton.disabled = true;
                } else {
                    beasiswaSelect.disabled = false;
                    simpanButton.disabled = false;
                }
                break;
            }
        }
    }

    // Panggil updateSemesterOptions saat halaman dimuat pertama kali untuk mengisi pilihan semester
    window.onload = updateSemesterOptions;

    // Event listener untuk mengupdate pilihan semester saat nama dipilih
    document.getElementById('nama').addEventListener('change', function() {
        updateSemesterOptions();
    });

    // Event listener untuk mengupdate IPK saat semester dipilih
    document.getElementById('semester').addEventListener('change', function() {
        updateIPK();
    });

    
</script> --}}

<script>
    // hapus semua input dengan tombol cancel
    function resetForm() {
        // menghapus semua input
        document.getElementById("nama").value = "";
        document.getElementById("nim").value = "";
        document.getElementById("nomor_hp").value = "";
        document.getElementById("email").value = "";
        document.getElementById("ipk").value = "";
        document.getElementById("berkas").value = "";
    }

    var nama = document.getElementById('nama');
    var email = document.getElementById('email');
    var nomorHp = document.getElementById('nomor_hp');
    nama.addEventListener('change', function() {
        var mahasiswas = @json($mahasiswas);
        var selectedMahasiswa = mahasiswas.find(mahasiswa => mahasiswa.nama === nama.value);
        email.value = selectedMahasiswa.email;
        nomorHp.value = selectedMahasiswa.nomor_hp;
    });

    // menampilkan ipk
    var ipkValues = <?php echo json_encode($semesters); ?>;
    // menampilkan ipk
    function updateIPK() {
        // mendapatkan id semester
        var selectedSemesterId = document.getElementById("semester").value;
        // mencari semester yang dipilih
        var selectedSemester = ipkValues.find(function(semester) {
            // mencocokan id semester
            return semester.id == selectedSemesterId;
        });
        // menampilkan ipk
        if (selectedSemester) {
            // menampilkan ipk
            document.getElementById("ipk").value = selectedSemester.ipk;
            // menampilkan beasiswa
            if (selectedSemester.ipk < 3) {
                // menampilkan beasiswa
                document.getElementById("beasiswa").disabled = true;
                const berkas = document.getElementById("berkas");
                berkas.disabled = true;
                berkas.addClassName = "hidden";
                // menampilkan tombol
                const tombol = document.getElementById("simpan");
                tombol.disabled = true;
            }else{
                // menampilkan beasiswa
                const beasiswa = document.getElementById("beasiswa");
                beasiswa.disabled = false;
                beasiswa.focus();
                // menampilkan berkas
                const berkas = document.getElementById("berkas");
                berkas.disabled = false;
                // menampilkan tombol
                const tombol = document.getElementById("simpan");
                tombol.disabled = false;
            }
        }
    }
  </script>

@endsection
