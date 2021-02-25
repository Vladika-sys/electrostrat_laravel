<div class="modal fade" id="edit_feedback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formular de editare a unui feedback</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form  id="feedback_form" method="POST">
                    {{ csrf_field() }}

                    <div class="modal-body">
                        <input type="hidden" name="feedback_id" id="feedback_id">
                        <div class="form-group">
                            <label>
                                Status
                            </label>
                            <input type="text" name="feedback_status" id="feedback_status" class="form-control" placeholder="read/unread" required>

                      </div>
                    </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Renunță</button>
                <button type="submit" name="submit" class="btn btn-primary">Editează</button>
            </div>

            </form>
        </div>

    </div>
</div>
