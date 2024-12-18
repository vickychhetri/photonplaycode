@extends('user-master')

@section('title', 'Inquiry Status & Geographic Report')

@section('style')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection

@section('breadcrumb-title')

      <h3>Inquiry Status Overview & Geographic Report</h3>  <a href="/admin/contact-us" class="btn btn-dark btn-back" style="height: 30px;">Back</a>

@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Inquiry Charts</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Pie Chart -->
            <div class="col-6">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title">Open vs Closed Inquiries</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="inquiryPieChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Trend Chart -->
            <div class="col-6">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title">Inquiry Trend (Last 3 Months)</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="inquiryTrendChart"></canvas>
                    </div>
                    <a href="{{route('admin.contact_us_month_wise_inquiries')}}" class="btn btn-primary btn-back">Show Detail Report (Inquiry month-wise)</a>
                </div>
            </div>

            <!-- Country-wise Chart -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title">Country-wise Inquiries</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="countryInquiryChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // Pie Chart
        const pieCtx = document.getElementById('inquiryPieChart').getContext('2d');
        const inquiryPieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['Open', 'Closed'],
                datasets: [{
                    data: [{{ $chartData['open'] }}, {{ $chartData['closed'] }}],
                    backgroundColor: ['#FF6384', '#36A2EB'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                }
            }
        });

        // Trend Chart
        const trendCtx = document.getElementById('inquiryTrendChart').getContext('2d');
        const inquiryTrendChart = new Chart(trendCtx, {
            type: 'line',
            data: {
                labels: {!! json_encode($months) !!},
                datasets: [{
                    label: 'Inquiries',
                    data: {!! json_encode($inquiries) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2,
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let percentage = (context.raw / context.dataset.data[0]) * 100;
                                return `Inquiries: ${context.raw} (${percentage.toFixed(2)}%)`;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Country-wise Chart
        const countryCtx = document.getElementById('countryInquiryChart').getContext('2d');
        const countryInquiryChart = new Chart(countryCtx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($countries) !!},
                datasets: [{
                    label: 'Inquiries by Country',
                    data: {!! json_encode($inquiriesByCountry) !!},
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let percentage = (context.raw / context.dataset.data[0]) * 100;
                                return `Inquiries: ${context.raw} (${percentage.toFixed(2)}%)`;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
