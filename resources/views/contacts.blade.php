<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/bec.svg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"integrity="sha512-6kvhZ/39gRVLmoM/6JxbbJVTYzL/gnbDVsHACLx/31IREU4l3sI7yeO0d4gw8xU5Mpmm/17LMaDHOCf+TvuC2Q==" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link  href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <img src="/img/log.svg" alt="">
    </div>
    <div class="nav_bar">
        <div class="menu">
            <ul>
                <a href="/">
                    <li>Acasa</li>
                </a>
                <a href="/services">
                    <li>Servicii</li>
                </a>
                <a href="/about">
                    <li> Despre noi</li>
                </a>
                <a href="/contacts">
                    <li> Contacte</li>
                </a>
            </ul>
        </div>
    </div>
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.1160370974928!2d28.60332574999899!3d46.83195069016781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c98926e8efd967%3A0x4d0fb096205f1a0d!2zSMOubmNlxZ90aSwgTW9sZG92YQ!5e0!3m2!1sro!2s!4v1612280491744!5m2!1sro!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="contacts">
        <div class="dates">
            <div class="adress">
                <h3>Contacte</h3>
                <div>
                    <span class="bold">Adresa: </span> <span class="normal">or. Hîncești,str Milescu Spătaru</span>
                </div>
                <div>
                    <span class="bold">Telefon:</span><span class="normal">026920144</span>
                </div>
                <div>
                    <span class="bold">Fax:</span> <span class="normal">026920144</span>
                </div>
                <div>
                    <span class="bold">E-mail:</span> <span class="normal">email@gmail.com</span>
                </div>

            </div>
            <div class="form">
                <h3>Ai nevoie de ceva? Lasă-ne un mesaj</h3>
                <form action="/contacts/submit" method="post" id="main_form">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nume complet</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{ old('name')}}" placeholder="ex:Popescu Vasile">
                        <span class="text-danger error-text name_error">@error('name')
                            {{$message}}
                        @enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput2" value="{{ old('email')}}" placeholder="name@example.com">
                        <span class="text-danger error-text email_error" >@error('email')
                            {{$message}}
                        @enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label">Companie</label>
                        <input type="text" name="company" class="form-control" id="exampleFormControlInput3" value="{{ old('company')}}" placeholder="ex:SRL NumeCompanie">
                        <span class="text-danger error-text company_error" >@error('company')
                            {{$message}}
                        @enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput4" class="form-label">Subiectul</label>
                        <input type="text" name="subject" class="form-control" id="exampleFormControlInput4" value="{{ old('subject')}}" placeholder="ex:De ce serviciu aveși nevoie">
                        <span class="text-danger error-text subject_error" >@error('subject')
                            {{$message}}
                        @enderror</span>
                    </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descriere amănunțită</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" value="{{ old('description')}}" rows="3"></textarea>
                        <span class="text-danger error-text description_error" >@error('description')
                            {{$message}}
                        @enderror</span>
                      </div>
                      <span id="succes_response" class="text-success"></span>
                      <div class="mb-3">
                        <button type="submit" name="submit" class="btn btn-success">Expediază</button>
                      </div>

                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <img src="../img/log.svg" alt="">
        <p class="copyright">
            (c)Copyright 2021 All rights reserved by Voltager Electrician services
        </p>
    </div>
    <a href="#" class="hai-sus"></a>

</body>



<script src="/js/app.js"></script>



</html>
