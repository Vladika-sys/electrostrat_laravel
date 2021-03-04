
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
                        <td style="width:10%;">{{ $item->slug }}</td>
                        <td style="width:20%;">{{ $item->title }}</td>
                        <td style="width:40%;">{{ $item->description }}</td>
                        <td>{{ $item->image_path }}</td>
                        <td>
                            <i class="far fa-edit editbtn"></i>

                             <i class="far fa-trash-alt deletebtn"></i>
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
