<div>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Operation</td>
        </tr>
        @foreach ($req as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td><a href="{{ 'delete/' . $student->id }}">Delete</a> / <a
                        href="{{ 'editstu/' . $student->id }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
