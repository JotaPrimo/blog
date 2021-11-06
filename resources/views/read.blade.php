<table>

    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Action</th>
    </tr>

    @foreach($data as $item)

        <tr>
            <td> {{ $item->name }} </td>
            <td>
                <button class="btn btn-warning" onclick="">Edit</button>
                <button class="btn btn-danger" onclick="">Delete</button>
            </td>
        </tr>

    @endforeach

</table>
