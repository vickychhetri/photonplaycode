@extends('user-master')

@section('title', 'Manage Inquiry')

@section('css')
    <!-- Include any additional CSS files -->
@endsection

@section('style')
    <style>
        .spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none; /* Hide initially */
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .spinner div {
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            border-top: 4px solid #fff;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
@endsection

@section('breadcrumb-title')
    <h3>Manage Contact Us</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Manage Contact Us</li>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Spinner for loading -->
        <div id="loading-spinner" class="spinner">
            <div></div>
        </div>

        <!-- Search Form -->
        <form id="search-form" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                <select name="page_size" id="page-size" class="form-control ml-2" style="max-width: 100px;">
                    <option value="10" {{ request('page_size') == 10 ? 'selected' : '' }}>10</option>
                    <option value="25" {{ request('page_size') == 25 ? 'selected' : '' }}>25</option>
                    <option value="50" {{ request('page_size') == 50 ? 'selected' : '' }}>50</option>
                    <option value="100" {{ request('page_size') == 100 ? 'selected' : '' }}>100</option>
                    <option value="150" {{ request('page_size') == 150 ? 'selected' : '' }}>150</option>
                    <option value="200" {{ request('page_size') == 200 ? 'selected' : '' }}>200</option>
                    <option value="250" {{ request('page_size') == 250 ? 'selected' : '' }}>250</option>
                    <option value="350" {{ request('page_size') == 350 ? 'selected' : '' }}>350</option>
                    <option value="500" {{ request('page_size') == 500 ? 'selected' : '' }}>500</option>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-primary mx-2" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                        Search</button>
                </div>
                <div class="input-group-append mx-2">
                    <a href="/admin/contact-us"  class="btn btn-dark" type="reset">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9"/>
                            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z"/>
                        </svg>
                        Reset</a>
                </div>
            </div>
        </form>


        <!-- Bulk Actions -->
        <div class="row mb-3 mt-4">
            <div class="col-12">
                <button id="bulk-delete-btn" class="btn btn-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                    </svg>
                    Bulk Delete</button>
                <button id="delete-all-btn" class="btn btn-danger ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                    </svg>
                    Delete All</button>

                <a href="{{route("admin.inquiries.pie-chart")}}" class="btn btn-primary btn-back">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"/>
                    </svg>
                    Visual Analysis</a>
            </div>
        </div>

        <!-- All Client Table Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5 class="card-title">All Contact/Inquiry</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive" id="table-container">
                            @include('contact_us._table', ['records' => $records])
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- All Client Table End -->
    </div>
@endsection

@section('script')
{{--    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}
    <script>
        $(document).ready(function() {
            // Show spinner when AJAX request starts
            $(document).ajaxStart(function() {
                $('#loading-spinner').show();
            });

            // Hide spinner when AJAX request completes
            $(document).ajaxStop(function() {
                $('#loading-spinner').hide();
            });

            // Handle Search Form Submission
            $('#search-form').submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: '{{ route('admin.contact_us_index') }}?' + formData,
                    success: function(data) {
                        $('#table-container').html(data.html);
                    }
                });
            });

            $('#page-size').change(function() {
                $('#search-form').submit();
            });

            // Individual Delete
            $(document).on('click', '[id^=Delete-]', function(){
                let id = $(this).attr('id').split('-')[1];
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            type: 'GET',
                            url: '{{ url("contact_us_delete_inquiry") }}/' + id,
                            success: function() {
                                $("#Item-" + id).remove();
                            }
                        });
                    }
                });
            });

            // Bulk Delete
            $('#bulk-delete-btn').click(function() {
                let ids = [];
                $('.record-checkbox:checked').each(function() {
                    ids.push($(this).val());
                });
                if (ids.length > 0) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert these deletions!",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete them!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });

                            $.ajax({
                                type: 'POST',
                                url: '{{ route('admin.contact_us_bulk_delete') }}',
                                data: { ids: ids },
                                success: function() {
                                    ids.forEach(id => {
                                        $("#Item-" + id).remove();
                                    });
                                    location.reload();
                                }

                            });
                        }
                    });
                } else {
                    Swal.fire('No selection', 'Please select at least one record to delete.', 'warning');
                }
            });

            // Delete All
            $('#delete-all-btn').click(function() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "This will delete all records. This action cannot be undone!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete all!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            type: 'POST',
                            url: '{{ route('admin.contact_us_delete_all') }}',
                            success: function() {
                                $('#table-container').html('<tr><td colspan="8" class="text-center">No records found.</td></tr>');
                            }
                        });
                    }
                });
            });
        });

        $('#select-all').click(function() {
            $('.record-checkbox').prop('checked', this.checked);
        });

        $('.record-checkbox').click(function() {
            if ($('.record-checkbox:checked').length === $('.record-checkbox').length) {
                $('#select-all').prop('checked', true);
            } else {
                $('#select-all').prop('checked', false);
            }
        });

    </script>
@endsection
