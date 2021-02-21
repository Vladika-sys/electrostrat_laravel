<div id="comenzi" class="tabel d-none">
    <h2>Comenzi</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead class="text-center">

                <tr>
                    <th>id</th>
                    <th>Slug</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Company</th>
                    <th>Subject</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($orders as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->company }}</td>
                        <td>{{ $item->subject }}</td>
                        <td>{{ $item->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
