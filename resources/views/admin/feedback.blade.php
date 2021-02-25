<div id="feedback" class="tabel d-none">
    <h2>Feedbacks</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead class="text-center">

                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Feedback</th>
                    <th>Status</th>
                    <th>Edit</th>

                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($feedbacks as $feedback)
                    <tr>
                        <td>{{ $feedback->id }}</td>
                        <td>{{ $feedback->name }}</td>
                        <td>{{ $feedback->email }}</td>
                        <td>{{ $feedback->feedback }}</td>
                        <td>{{$feedback->status}}</td>
                        <td>
                            <i class="far fa-edit feedback_edit"></i>
                            <i class="far fa-trash-alt feedback_delete"></i>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
