<div class="modal fade" id="edit_order" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formular de editare a unei comenzi</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <form  id="order_form" method="POST">
                    {{ csrf_field() }}

                    <div class="modal-body">
                        <input type="hidden" name="order_id" id="order_id">


                        <div class="form-group">
                            <label>
                                Status
                            </label>
                            <input type="text" name="status" id="status" class="form-control" placeholder="read/unread" required>

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
