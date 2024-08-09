@extends('user-master')

@section('title', 'Month Wise Inquiries')

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection

@section('breadcrumb-title')
    <h3>Month Wise Inquiries</h3>
    <a href="{{route("admin.inquiries.pie-chart")}}" class="btn btn-dark btn-back">Back</a>

@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Month Wise Inquiries</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Month Wise Inquiries</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="inquiryMonthWiseChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('inquiryMonthWiseChart').getContext('2d');
            const inquiryMonthWiseChart = new Chart(ctx, {
            type: 'bar',
            data: {
            labels: @json($labels),
            datasets: [{
            label: 'Inquiries Raised',
            data: @json($values),
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
        },
            options: {
            scales: {
            y: {
            beginAtZero: true,
            title: {
            display: true,
            text: 'Number of Inquiries'
        }
        },
            x: {
            title: {
            display: true,
            text: 'Year-Month'
        }
        }
        }
        }
        });
    </script>
@endsection
