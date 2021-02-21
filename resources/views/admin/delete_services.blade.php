<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formular de editare a unui nou serviciu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="delete_form" method="POST">

                {{ csrf_field() }}

                <div class="modal-body">

                    <input type="hidden" id="delete_id" value="delete">
                    <p>
                        Sunteți sigur că doriți să ștergeți acest serviciu?
                    </p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Renunță</button>
                    <button type="submit" name="submit" class="btn btn-primary">Șterge</button>
                </div>

            </form>
        </div>

    </div>
</div>
