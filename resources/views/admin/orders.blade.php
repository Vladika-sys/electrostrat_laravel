<div id="comenzi" class="tabel d-none">
    <h2>Comenzi</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead class="text-center">

                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Company</th>
                    <th>Subject</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($orders as $item)
                    <tr><td>{{$item->id}}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->company }}</td>
                        <td>{{ $item->subject }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{$item->status}}</td>
                        <td>

                            <i class="far fa-edit edit_orders"></i>

                            {{-- <i class="far fa-trash-alt"></i> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
