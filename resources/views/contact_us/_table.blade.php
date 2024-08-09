<table class="display table table-striped table-hover "   >
    <thead>
    <tr>
        <th><input type="checkbox" id="select-all" /></th>
        <th>#</th>
        <th>Inquiry Id</th>
        <th>Name</th>
        <th>Country</th>
        <th>Subject</th>
        <th>Email</th>
        <th>Options</th>
    </tr>
    </thead>
    <tbody>
    @forelse ($records as $item)
        <tr id="Item-{{$item->id}}">
            <td><input type="checkbox" class="record-checkbox" value="{{$item->id}}" /></td>
            <td>{{$loop->iteration + $records->firstItem() - 1}}</td>
            <td> <a href="{{route('admin.contact_us_show', $item->id)}}" class="p-1" data-toggle="tooltip" title="View"> {{$item->id}} </a></td>
            <td>{{$item->first_name}}</td>
            <td>{{$item->country }}</td>
            <td>{{$item->subject}}</td>
            <td>{{$item->email}}</td>
            <td>
                <a href="{{route('admin.contact_us_show', $item->id)}}" class="btn btn-outline-primary m-1" data-toggle="tooltip" title="View">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-bar-graph" viewBox="0 0 16 16">
                        <path d="M4.5 12a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5zm3 0a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5zm3 0a.5.5 0 0 1-.5-.5v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5z"/>
                        <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
                    </svg>
                </a>
                <a id="Delete-{{$item->id}}" class="btn btn-outline-danger m-1" data-toggle="tooltip" title="Delete">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                    </svg>
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="8" class="text-center">No records found.</td>
        </tr>
    @endforelse
    </tbody>
</table>
<br/>
<div class="pagination">
    {{ $records->appends(request()->query())->links() }}

</div>

<script>
    $('#select-all').click(function() {
        $('.record-checkbox').prop('checked', this.checked);
        alert("dds");
    });

    $('.record-checkbox').click(function() {
        if ($('.record-checkbox:checked').length === $('.record-checkbox').length) {
            $('#select-all').prop('checked', true);
        } else {
            $('#select-all').prop('checked', false);
        }
    });

</script>
