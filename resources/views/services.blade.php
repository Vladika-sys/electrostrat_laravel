<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/bec.svg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js" integrity="sha512-6kvhZ/39gRVLmoM/6JxbbJVTYzL/gnbDVsHACLx/31IREU4l3sI7yeO0d4gw8xU5Mpmm/17LMaDHOCf+TvuC2Q==" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />


    <link rel="stylesheet" href="/css/app.css">
    <title>Services</title>
</head>

<body>
    <div class="header">
        <img src="/img/log.svg" alt="">
    </div>
    <div class="nav_bar" id="nav">
        <div class="menu" id="menu">
            <ul>
                <a href="/"> <li>Acasa</li></a>
                <a href="/services"> <li>Servicii</li> </a>
                <a href="/about"><li> Despre noi</li></a>
                <a href="/contacts"><li> Contacte</li></a>
            </ul>
        </div>
        <div class="burger">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <div class="backgroud">
        <div class="main_title">
            <span>
                Electrical Supply <br> Services
            </span>
        </div>
        <div class="subdescription">
            <p>
                Whatever your power supply, power generator, wiring or grid problem is – <br> we are sure to fix it
                before the sun sets!
            </p>
        </div>
    </div>
    <div class="all_content">
        <div class="section">
            <?php $i = 0 ?>
            @foreach ($services as $s)
                {{-- @if ($i++ % 2 == 0) --}}
                <div class="principal">
                    <div class="imagine">
                        <img src="{{ $s->image_path }}" alt="1">
                    </div>
                    <div class="text">
                        <h2>
                            {{ $s->title }}
                        </h2>
                        <pre>
                        {{ $s->description}}
                        </pre>
                        <div class="read_more2">
                            <a href="/services/{{$s->slug}}">Citește mai mult</a>
                        </div>
                    </div>
                </div>
                {{-- @else --}}
                {{-- <div class="principal">

                    <div class="text">
                        <h2>
                            {{ $s->title }}
                        </h2>
                        <pre>
                            {{ $s->description }}
                        </pre>

                    </div>

                    <div class="imagine">
                        <img src="{{ $s->image_path }}" alt="2">
                    </div>
                </div>
                @endif --}}
            @endforeach


            {{-- <div class="principal">
                <div class="imagine">
                    <img src="/img/3.jpg" alt="3">
                </div>
                <div class="text">
                    <h2>
                        Residential
                    </h2>

                    <pre>
                        The quality of our life at home heavily relies on making sure that all of our home appliances and devices get a strong, proper power supply.

                        This can be compromised by either of the electrical system’s component to go wrong – be it a wiring, outlet, electrical panel or anything else…


                        Be sure that while we will be examining what the real issue is al about, we will make a plan for fixing it!

                    </pre>
                </div>
            </div>
            <div class="principal">

                <div class="text">
                    <h2>
                        Residential
                    </h2>
                    <pre>
                        The quality of our life at home heavily relies on making sure that all of our home appliances and devices get a strong, proper power supply.


                        This can be compromised by either of the electrical system’s component to go wrong – be it a wiring, outlet, electrical panel or anything else…


                        Be sure that while we will be examining what the real issue is al about, we will make a plan for fixing it!

                    </pre>
                </div>
                <div class="imagine">
                    <img src="/img/4.jpg" alt="4">
                </div>
            </div>
            <div class="principal">
                <div class="imagine">
                    <img src="/img/5.jpg" alt="5">
                </div>
                <div class="text">
                    <h2>
                        Residential
                    </h2>
                    <pre>
                        The quality of our life at home heavily relies on making sure that all of our home appliances and devices get a strong, proper power supply.


                        This can be compromised by either of the electrical system’s component to go wrong – be it a wiring, outlet, electrical panel or anything else…


                        Be sure that while we will be examining what the real issue is al about, we will make a plan for fixing it!

                    </pre>
                </div>
            </div>
            <div class="principal">

                <div class="text">
                    <h2>
                        Residential
                    </h2>
                    <pre>
                        The quality of our life at home heavily relies on making sure that all of our home appliances and devices get a strong, proper power supply.


                        This can be compromised by either of the electrical system’s component to go wrong – be it a wiring, outlet, electrical panel or anything else…


                        Be sure that while we will be examining what the real issue is al about, we will make a plan for fixing it!

                    </pre>
                </div>
                <div class="imagine">
                    <img src="/img/6.jpg" alt="6">
                </div>
            </div>
            <div class="principal">
                <div class="imagine">
                    <img src="/img/7.jpg" alt="7">
                </div>
                <div class="text">
                    <h2>
                        Residential
                    </h2>
                    <pre>
                        The quality of our life at home heavily relies on making sure that all of our home appliances and devices get a strong, proper power supply.


                        This can be compromised by either of the electrical system’s component to go wrong – be it a wiring, outlet, electrical panel or anything else…


                        Be sure that while we will be examining what the real issue is al about, we will make a plan for fixing it!

                    </pre>
                </div>
            </div>
            <div class="principal">

                <div class="text">
                    <h2>
                        Residential
                    </h2>
                    <pre>
                        The quality of our life at home heavily relies on making sure that all of our home appliances and devices get a strong, proper power supply.


                        This can be compromised by either of the electrical system’s component to go wrong – be it a wiring, outlet, electrical panel or anything else…


                        Be sure that while we will be examining what the real issue is al about, we will make a plan for fixing it!

                    </pre>
                </div>
                <div class="imagine">
                    <img src="/img/8.jpg" alt="8">
                </div>
            </div> --}}
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
