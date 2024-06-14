<h2>{{ $type }} Leads</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Query</th>
            <th>Status</th>
            <th>Details</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($leads->get($type, []) as $lead)
            <tr>
                <td>{{ $lead->id }}</td>
                <td>{{ $lead->user->name }}</td>
                <td>{{ $lead->query }}</td>
                <td>{{ $lead->status }}</td>
                <td>{{ $lead->details }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
