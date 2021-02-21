<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formular de editare a unui nou serviciu</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <form  id="edit_form" method="POST">
                    {{ csrf_field() }}

                    <div class="modal-body">
                        <input type="hidden" name="update_id" id="update_id">
                        <div class="form-group">
                            <label>
                                Slug
                            </label>
                            <input type="text" name="slug" id="slug" class="form-control"
                                placeholder="Introduceți slug-ul produsului" required>
                            <span class="text-danger error-text slug_error">@error('slug')
                                    {{ $message }}
                                @enderror</span>
                        </div>
                        <div class="form-group">
                            <label>
                                Title
                            </label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="Introduceți titlul" required>
                            <span class="text-danger error-text title_error">@error('title')
                                    {{ $message }}
                                @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="description">
                                Descriere
                            </label>
                            <textarea class="form-control" name="description" id="description"
                                placeholder="Descriere"></textarea>
                            <span class="text-danger error-text description_error">@error('description')
                                    {{ $message }}
                                @enderror</span>

                        </div>
                        <div class="form-group">
                            <label>
                                Image path
                            </label>
                            <input type="text" name="image_path" id="image_path" class="form-control"
                                placeholder="Introduceți calea imaginii /img/numeimagine" required>
                            <span class="text-danger error-text image_path_error">@error('image_path')
                                    {{ $message }}
                                @enderror</span>
                        </div>
                        <span id="succes_response" class="text-success"></span>
                    </div>

            </div>

            <div class="modal-footer">
                <a href="{{url('/services/')}}" class="btn btn success" id="gotoservice" target="_blank">

                     Vezi serviciul

                </a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Renunță</button>
                <button type="submit" name="submit" class="btn btn-primary">Editează</button>
            </div>

            </form>
        </div>

    </div>
</div>
