@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('vendor/chart.js/dist/Chart.min.css') }}">
@endpush
@section('content')
    <div class="main-content">
        <div class="title">
            Dashboard
        </div>
        @if(auth()->user()->hasRole('admin puskesmas'))
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">Jumlah Bidan</h6>
                                <a href="{{ url('') }}"><h2 class="mb-0 number-font">{{ $totalBidan }}</h2></a>
                            </div>
                            <div class="ms-auto">
                                <div class="chart-wrapper mt-1">
                                    <canvas id="saleschart"
                                        class="h-8 w-9 chart-dropshadow"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">Jumlah Kader</h6>
                                <a href="{{ url('') }}"><h2 class="mb-0 number-font">{{ $totalKader }}</h2></a>
                            </div>
                            <div class="ms-auto">
                                <div class="chart-wrapper mt-1">
                                    <canvas id="saleschart"
                                        class="h-8 w-9 chart-dropshadow"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">Jumlah Posyandu</h6>
                                <a href="{{ url('') }}"><h2 class="mb-0 number-font">{{ $totalPosyandu }}</h2></a>
                            </div>
                            <div class="ms-auto">
                                <div class="chart-wrapper mt-1">
                                    <canvas id="saleschart"
                                        class="h-8 w-9 chart-dropshadow"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif 
            {{-- <div class="row">  --}}
            @if(auth()->user()->hasRole('super admin'))
            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">Jumlah Puskesmas</h6>
                                <a href="{{ url('') }}"><h2 class="mb-0 number-font">{{ $totalPuskesmas }}</h2></a>
                            </div>
                            <div class="ms-auto">
                                <div class="chart-wrapper mt-1">
                                    <canvas id="saleschart"
                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">Jumlah Kecamatan</h6>
                                <a href="{{ url('') }}"><h2 class="mb-0 number-font">{{ $totalKecamatan }}</h2></a>
                            </div>
                            <div class="ms-auto">
                                <div class="chart-wrapper mt-1">
                                    <canvas id="saleschart"
                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">Jumlah Desa</h6>
                                <a href="{{ url('') }}"><h2 class="mb-0 number-font">{{ $totalDesa }}</h2></a>
                            </div>
                            <div class="ms-auto">
                                <div class="chart-wrapper mt-1">
                                    <canvas id="saleschart"
                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            {{-- <div class="row">  --}}
            @if (auth()->user()->hasRole('kader'))
            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">Jumlah Data Gizi</h6>
                                <a href="{{ url('') }}"><h2 class="mb-0 number-font">{{ $totalGizi }}</h2></a>
                            </div>
                            <div class="ms-auto">
                                <div class="chart-wrapper mt-1">
                                    <canvas id="saleschart"
                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">Jumlah Data Imunsiasi</h6>
                                <a href="{{ url('') }}"><h2 class="mb-0 number-font">{{ $totalImunisasi }}</h2></a>
                            </div>
                            <div class="ms-auto">
                                <div class="chart-wrapper mt-1">
                                    <canvas id="saleschart"
                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @elseif (auth()->user()->hasRole('super admin'))
            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">Jumlah Data Gizi</h6>
                                    <a href="{{ url('') }}"><h2 class="mb-0 number-font">{{ $totalGizi }}</h2></a>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <canvas id="saleschart"
                                        class="h-8 w-9 chart-dropshadow"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @elseif (auth()->user()->hasRole('bidan'))
            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">Jumlah Data Gizi</h6>
                                <a href="{{ url('') }}"><h2 class="mb-0 number-font">{{ $totalGizi }}</h2></a>
                            </div>
                            <div class="ms-auto">
                                <div class="chart-wrapper mt-1">
                                    <canvas id="saleschart"
                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    @endsection
    
    @push('js')
    <script src="{{ asset('') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('') }}/assets/js/page/index.js"></script>
    @endpush