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

                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($feedbacks as $feedback)
                    <tr>
                        <td>{{ $feedback->id }}</td>
                        <td>{{ $feedback->name }}</td>
                        <td>{{ $feedback->email }}</td>
                        <td>{{ $feedback->feedback }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
