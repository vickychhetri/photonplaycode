<table class="display table table-striped table-hover"  >
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
            <td>{{$item->id}}</td>
            <td>{{$item->first_name}}</td>
            <td>{{$item->country }}</td>
            <td>{{$item->subject}}</td>
            <td>{{$item->email}}</td>
            <td>
                <a href="{{route('admin.contact_us_show', $item->id)}}" class="text-warning p-1" data-toggle="tooltip" title="View">
                    <i data-feather="eye"></i>
                </a>
                <a id="Delete-{{$item->id}}" class="text-danger pointer p-1" data-toggle="tooltip" title="Delete">
                    <i data-feather="trash-2"></i>
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
    {!! $records->links() !!}
</div>
