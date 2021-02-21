
<div id="services" class="tabel d-none">

    <h2>Servicii</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead class="text-center">
                <tr>
                    <th>id</th>
                    <th>Slug</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image path</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($services as $item)
                    <tr>

                        <td>{{ $item->id }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>{{ $item->title }}</td>
                        <td style="width:60%;">{{ $item->description }}</td>
                        <td>{{ $item->image_path }}</td>
                        <td>
                            <button class="btn btn-primary editbtn">
                                Edit
                            </button>
                            <button class="btn btn-danger deletebtn">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Adaugă servicii
        </button>
    </div>
</div>
