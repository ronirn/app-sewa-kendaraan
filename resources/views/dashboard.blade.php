@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Total Renters Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title text-xl font-semibold">Total Renters <span class="text-sm">| This Month</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded d-flex align-items-center justify-content-center p-3 bg-primary">
                            <i class="bi bi-person text-white fs-3"></i>
                        </div>
                        <div class="ps-3">
                            <h6 class="fs-2 font-bold">{{ $totalRenters }}</h6>
                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Total Renters Card -->

        <!-- Total Vehicles Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
                <div class="card-body">
                    <h5 class="card-title text-xl font-semibold">Total Vehicles <span class="text-sm">| This Month</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded d-flex align-items-center justify-content-center p-3 bg-info">
                            <i class="bi bi-car-front text-white fs-3"></i>
                        </div>
                        <div class="ps-3">
                            <h6 class="fs-2 font-bold">{{ $totalVehicles }}</h6>
                            <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Total Vehicles Card -->

        <!-- Total Receipts Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title text-xl font-semibold">Total Receipts <span class="text-sm">| This Month</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded d-flex align-items-center justify-content-center p-3 bg-warning">
                            <i class="bi bi-file-earmark-text text-dark fs-3"></i>
                        </div>
                        <div class="ps-3">
                            <h6 class="fs-2 font-bold">{{ $totalReceipts }}</h6>
                            <span class="text-success small pt-1 fw-bold">10%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Total Receipts Card -->

        <!-- Total Rentals Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title text-xl font-semibold">Total Rentals <span class="text-sm">| This Month</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded d-flex align-items-center justify-content-center p-3 bg-info">
                            <i class="bi bi-car-front text-white fs-3"></i>
                        </div>
                        <div class="ps-3">
                            <h6 class="fs-2 font-bold">{{ $totalRentals }}</h6>
                            <span class="text-success small pt-1 fw-bold">15%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Total Rentals Card -->

        <!-- Total Invoices Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
                <div class="card-body">
                    <h5 class="card-title text-xl font-semibold">Total Invoices <span class="text-sm">| This Month</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded d-flex align-items-center justify-content-center p-3 bg-danger">
                            <i class="bi bi-file-earmark-text text-white fs-3"></i>
                        </div>
                        <div class="ps-3">
                            <h6 class="fs-2 font-bold">{{ $totalInvoices }}</h6>
                            <span class="text-success small pt-1 fw-bold">5%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Total Invoices Card -->




        <!-- Container for Reports and Recent Activity -->
        <div class="row">
            <!-- Reports -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Reports <span>/Today</span></h5>
                        <!-- Line Chart -->
                        <div id="reportsChart"></div>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#reportsChart"), {
                                    series: [{
                                        name: 'Rentals',
                                        data: [10, 20, 30, 40, 50, 60],
                                    }, {
                                        name: 'Revenue',
                                        data: [15, 25, 35, 45, 55, 65]
                                    }],
                                    chart: {
                                        height: 350,
                                        type: 'area',
                                        toolbar: {
                                            show: false
                                        },
                                    },
                                    markers: {
                                        size: 4
                                    },
                                    colors: ['#4154f1', '#2eca6a'],
                                    fill: {
                                        type: "gradient",
                                        gradient: {
                                            shadeIntensity: 1,
                                            opacityFrom: 0.3,
                                            opacityTo: 0.4,
                                            stops: [0, 90, 100]
                                        }
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    stroke: {
                                        curve: 'smooth',
                                        width: 2
                                    },
                                    xaxis: {
                                        type: 'datetime',
                                        categories: ["2024-01-01T00:00:00.000Z", "2024-02-01T00:00:00.000Z", "2024-03-01T00:00:00.000Z", "2024-04-01T00:00:00.000Z", "2024-05-01T00:00:00.000Z", "2024-06-01T00:00:00.000Z"]
                                    },
                                    tooltip: {
                                        x: {
                                            format: 'dd/MM/yy'
                                        },
                                    }
                                }).render();
                            });
                        </script>
                        <!-- End Line Chart -->
                    </div>
                </div>
            </div><!-- End Reports -->

            <!-- Recent Activity -->
<!-- Recent Activity -->
<div class="col-lg-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Recent Activity <span>| Today</span></h5>
            <div class="activity">
                <!-- Activity Item 1 -->
                <div class="activity-item d-flex align-items-start mb-3">
                    <div class="activite-label me-3 text-muted">10 min</div>
                    <i class='bi bi-circle-fill activity-badge text-primary fs-4 me-2'></i>
                    <div class="activity-content">
                        New rental: <a href="#" class="fw-bold text-dark">John Doe</a> for vehicle ID #123
                    </div>
                </div><!-- End activity item-->

                <!-- Activity Item 2 -->
                <div class="activity-item d-flex align-items-start mb-3">
                    <div class="activite-label me-3 text-muted">25 min</div>
                    <i class='bi bi-circle-fill activity-badge text-success fs-4 me-2'></i>
                    <div class="activity-content">
                        Payment received for invoice #456
                    </div>
                </div><!-- End activity item-->

                <!-- Activity Item 3 -->
                <div class="activity-item d-flex align-items-start mb-3">
                    <div class="activite-label me-3 text-muted">1 hr</div>
                    <i class='bi bi-circle-fill activity-badge text-info fs-4 me-2'></i>
                    <div class="activity-content">
                        Vehicle added: <a href="#" class="fw-bold text-dark">Toyota Corolla</a>
                    </div>
                </div><!-- End activity item-->

                <!-- Activity Item 4 -->
                <div class="activity-item d-flex align-items-start mb-3">
                    <div class="activite-label me-3 text-muted">2 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-warning fs-4 me-2'></i>
                    <div class="activity-content">
                        Rental updated for <a href="#" class="fw-bold text-dark">Jane Smith</a> (vehicle ID #789)
                    </div>
                </div><!-- End activity item-->

                <!-- Activity Item 5 -->
                <div class="activity-item d-flex align-items-start mb-3">
                    <div class="activite-label me-3 text-muted">3 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-danger fs-4 me-2'></i>
                    <div class="activity-content">
                        Overdue rental for <a href="#" class="fw-bold text-dark">Alice Johnson</a>
                    </div>
                </div><!-- End activity item-->

                <!-- Activity Item 6 -->
                <div class="activity-item d-flex align-items-start">
                    <div class="activite-label me-3 text-muted">4 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-muted fs-4 me-2'></i>
                    <div class="activity-content">
                        System maintenance completed
                    </div>
                </div><!-- End activity item-->
            </div>
        </div>
    </div><!-- End Recent Activity -->
</div><!-- End Column -->


        </div><!-- End Row -->

    </div>

</div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endsection