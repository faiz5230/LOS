@extends('layouts.master')
@section('title')
@lang('translation.dashboards')
@endsection
@section('css')
<link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<div class="row">
    <div class="col">
        <div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-16 mb-1">Selamat Datang di Sistem LOS!</h4>
                            <p class="text-muted mb-0">Dashboard Loan Origination System BPR Duta Pasundan</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Debitur</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{ number_format($totalDebitur) }}</h4>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                        <i class="bx bx-user text-success"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Simulasi</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{ number_format($totalSimulasi) }}</h4>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-info-subtle rounded fs-3">
                                        <i class="bx bx-calculator text-info"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Analisa Kredit</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{ number_format($totalAnalisaKredit) }}</h4>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-warning-subtle rounded fs-3">
                                        <i class="bx bx-line-chart text-warning"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Users</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{ number_format($totalUsers) }}</h4>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-primary-subtle rounded fs-3">
                                        <i class="bx bx-group text-primary"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Statistik Bulanan {{ date('Y') }}</h4>
                        </div>
                        <div class="card-body">
                            <div id="monthlyChart" data-colors='["--vz-primary", "--vz-success"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Distribusi Jenis Kredit</h4>
                        </div>
                        <div class="card-body">
                            <div id="creditTypeChart" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Analysis Results and Recent Activities -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Hasil Analisa Kredit</h4>
                        </div>
                        <div class="card-body">
                            <div id="analysisChart" data-colors='["--vz-success", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Aktivitas Terbaru</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                    <tbody>
                                        @foreach($recentDebitur as $debitur)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-xs me-3">
                                                        <span class="avatar-title rounded-circle bg-light text-primary">
                                                            <i class="ri-user-line"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">{{ $debitur->nama }}</h6>
                                                        <p class="text-muted mb-0">{{ $debitur->simulation->jenis_kredit ?? 'N/A' }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-muted">{{ convertNumberFormat($debitur->jumlah_permohonan_kredit) }}</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">{{ $debitur->created_at->diffForHumans() }}</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Monthly Amount Chart -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Total Plafond Kredit per Bulan ({{ date('Y') }})</h4>
                        </div>
                        <div class="card-body">
                            <div id="monthlyAmountChart" data-colors='["--vz-info"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>
<script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js')}}"></script>

<script>
// Monthly Statistics Chart
var monthlyData = @json($monthlyDebitur);
var monthlySimulasiData = @json($monthlySimulasi);

var monthlyOptions = {
    series: [{
        name: 'Debitur',
        data: Array.from({length: 12}, (_, i) => {
            var found = monthlyData.find(item => item.month === i + 1);
            return found ? found.count : 0;
        })
    }, {
        name: 'Simulasi',
        data: Array.from({length: 12}, (_, i) => {
            var found = monthlySimulasiData.find(item => item.month === i + 1);
            return found ? found.count : 0;
        })
    }],
    chart: {
        type: 'bar',
        height: 350
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    },
    yaxis: {
        title: {
            text: 'Jumlah'
        }
    },
    fill: {
        opacity: 1
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + " items"
            }
        }
    }
};

var monthlyChart = new ApexCharts(document.querySelector("#monthlyChart"), monthlyOptions);
monthlyChart.render();

// Credit Type Distribution Chart
var creditTypeData = @json($creditTypeDistribution);
var creditTypeOptions = {
    series: creditTypeData.map(item => item.count),
    chart: {
        type: 'donut',
        height: 300
    },
    labels: creditTypeData.map(item => item.jenis_kredit),
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }]
};

var creditTypeChart = new ApexCharts(document.querySelector("#creditTypeChart"), creditTypeOptions);
creditTypeChart.render();

// Analysis Results Chart
var analysisData = @json($analysisResults);
var analysisOptions = {
    series: analysisData.map(item => item.count),
    chart: {
        type: 'pie',
        height: 300
    },
    labels: analysisData.map(item => item.hasil),
    colors: ['#28a745', '#dc3545'],
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }]
};

var analysisChart = new ApexCharts(document.querySelector("#analysisChart"), analysisOptions);
analysisChart.render();

// Monthly Amount Chart
var monthlyAmountData = @json($monthlyAmount);
var monthlyAmountOptions = {
    series: [{
        name: 'Total Plafond',
        data: Array.from({length: 12}, (_, i) => {
            var found = monthlyAmountData.find(item => item.month === i + 1);
            return found ? parseFloat(found.total_amount) : 0;
        })
    }],
    chart: {
        type: 'area',
        height: 350
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth'
    },
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    },
    yaxis: {
        title: {
            text: 'Jumlah (Rp)'
        },
        labels: {
            formatter: function (val) {
                return 'Rp ' + val.toLocaleString('id-ID');
            }
        }
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "Rp " + val.toLocaleString('id-ID')
            }
        }
    }
};

var monthlyAmountChart = new ApexCharts(document.querySelector("#monthlyAmountChart"), monthlyAmountOptions);
monthlyAmountChart.render();
</script>

<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
