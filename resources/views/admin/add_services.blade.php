
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Formular de adăugare a unui nou serviciu
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/dashboard/submit" method="post" id="modal_form">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>
                                            Slug
                                        </label>
                                        <input type="text" name="slug" class="form-control"
                                            placeholder="Introduceți slug-ul produsului">
                                        <span class="text-danger error-text slug_error">@error('slug')
                                                {{ $message }}
                                            @enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Title
                                        </label>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Introduceți titlul">
                                        <span class="text-danger error-text title_error">@error('title')
                                                {{ $message }}
                                            @enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="floatingTextarea">
                                            Descriere
                                        </label>
                                        <textarea class="form-control" name="description" placeholder="Descriere"
                                            id="floatingTextarea"></textarea>
                                        <span class="text-danger error-text description_error">@error('description')
                                                {{ $message }}
                                            @enderror</span>

                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Image path
                                        </label>
                                        <input type="text" name="image_path" class="form-control"
                                            placeholder="Introduceți calea imaginii /img/numeimagine">
                                        <span class="text-danger error-text image_path_error">@error('image_path')
                                                {{ $message }}
                                            @enderror</span>
                                    </div>
                                    <span id="succes_response" class="text-success"></span>
                                </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Renunță</button>
                            <button type="submit" name="submit" class="btn btn-primary">Adaugă</button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
