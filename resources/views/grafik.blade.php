@extends('layouts.app')

@section('content')

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <div class="max-w-sm w-full mx-auto bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
            <div class="flex justify-between items-start w-full">
                <div class="flex-col items-center">
                    <div class="flex items-center mb-1">
                        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white me-1">Jumlah Pendaftar Beasiswa</h5>
                        <svg data-popover-target="chart-info" data-popover-placement="bottom" class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white cursor-pointer ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z"/>
                        </svg>
                        <div data-popover id="chart-info" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                            <div class="p-3 space-y-2">
                                <h3 class="font-semibold text-gray-900 dark:text-white">Jumlah Pendaftar Beasiswa</h3>
                                <p class="text-justify">Berikut ini merupakan grafik yang menampilkan jumlah dari para pendaftar Beasiswa dari semua pilihan beasiswa, Terdapat 3 pilihan beasiswa yang ditampilkan yaitu Beasiswa Akademis, Beasiswa Prestasi & Bakat dan Beasiswa Riset & Penelitian.</p>
                            </div>
                        <div data-popper-arrow></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Line Chart -->
        <div class="py-6" id="pie-chart"></div>
    </div>
</section>

<script>
    // Menampilkan grafik dalam format ApexCharts
    window.addEventListener("load", function() {
        // Mengambil data dari PHP (contoh menggunakan dummy data)
        var data = <?php echo json_encode($data); ?>;
        
        // Mendapatkan nama dan jumlah dari data
        var nama = data.map(function(e) {
            return e.nama;
        });
        
        // Mendapatkan jumlah dari data
        var jumlah = data.map(function(e) {
            return e.jumlah;
        });

        // Mengonversi data ke dalam format yang sesuai dengan ApexCharts
        var apexChartData = {
            series: jumlah,
            colors: ["#1C64F2", "#16BDCA", "#9061F9"],
            chart: {
                height: 420,
                width: "100%",
                type: "pie",
            },
            labels: nama,
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                },
            },
            legend: {
                position: "bottom",
                fontFamily: "Inter, sans-serif",
            },
            yaxis: {
                labels: {
                    formatter: function(value) {
                        return value + " Orang";
                    },
                },
            },
            xaxis: {
                labels: {
                    formatter: function(value) {
                        return value + " Orang";
                    },
                },
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
            },
        };

        // Membuat grafik dengan menggunakan ApexCharts
        if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("pie-chart"), apexChartData);
            chart.render();
        }
    });
</script>

@endsection