<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/bec.svg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <title>Află mai mult despre</title>
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
    <div class="more_info">

        <div class="service_image">
            <img src="{{$services->image_path}}" alt="Service_1">
        </div>
        <div class="text_content">
            <div class="service_title">
                <h3>
                   {{$services->title}}
                </h3>
            </div>
            <div class="service_description">

                <p>
                   {{$services->description}}
                </p>
            </div>
        </div>

    </div>
</body>
</html>
