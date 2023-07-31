<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>29-maktab @yield('title')</title>
    <link rel="shortcut icon" href="./img/gerb.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./libs/bootstrap.min.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/madia.css">
</head>

<body class="">
    <!-- Header Starting -->
    <header>
        <div class="header__content">
            <nav class="navbar navbar-expand-lg fixed-top bg-light">
                <div class="container">
                    <a class="navbar-brand " href="{{ route('index') }}"><img src="./img/school.png" alt=""
                            class="header__content-image"></a>
                    <button class="navbar-toggler header__content-menu" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">



                            <li class="nav-item">
                                <a class="nav-link header__content-link" href="{{ route('index') }}">Bosh sahifa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link header__content-link" href="{{ route('leader') }}">Rahbariyat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link header__content-link" href="{{ route('news') }}">Yangiliklar</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link header__content-link" href="{{ route('contact') }}">Aloqa</a>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>
        </div>


    </header>
    <!-- Header End -->

    @yield('content')

    <!-- Footer Starting -->

    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                @foreach ($footers as $footer)
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="footer__one">
                                <h5 class="footer__two-title">MAKTAB HAQIDA</h5>
                                <span class="percent">
                                    <div style="width: 40%"></div>
                                </span> <br>
                                <p class="footer__one-text">{{ $footer->title }}
                                </p>

                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="footer__two">
                                <h5 class="footer__two-title">NAVIGATSIYA</h5>
                                <span class="percent">
                                    <div style="width: 40%"></div>
                                </span> <br>
                                <a href="{{ route('index') }}" class="footer__two-span"> <i
                                        class="fas fa-chevron-circle-right f-icon "></i> Asosiy</a>
                                <span class="footer__percent"> <br>
                                    <div style="width: 40%"></div>
                                </span> <br>
                                <a href="{{ route('news') }}" class="footer__two-span"> <i
                                        class="fas fa-chevron-circle-right f-icon "></i> Yangiliklar</a>
                                <span class="footer__percent"> <br>
                                    <div style="width: 40%"></div>
                                </span> <br>
                                <a href="{{ route('leader') }}" class="footer__two-span"> <i
                                        class="fas fa-chevron-circle-right f-icon "></i> Raxbariyat</a>
                                <span class="footer__percent"> <br>
                                    <div style="width: 40%"></div>
                                </span> <br>
                                <a href="{{ route('picture') }}" class="footer__two-span"> <i
                                        class="fas fa-chevron-circle-right f-icon "></i> Fotolavhalar</a>
                                <span class="footer__percent"> <br>
                                    <div style="width: 40%"></div>
                                </span> <br>
                                <a href="https://login.kundalik.com/" target="_blank" class="footer__two-span"><i
                                        class="fas fa-chevron-circle-right f-icon "></i> Kundalik.com
                                    tizimi </a>
                                <span class="footer__percent"> <br>
                                    <div style="width: 40%"></div>
                                </span> <br>

                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="footer__three">
                                <h5 class="footer__two-title">BIZ BILAN BOG’LANING</h5>
                                <span class="percent">
                                    <div style="width: 40%"></div>
                                </span> <br>
                                <span class="footer__three-span"> <b>Manzil :</b> {{ $footer->location }}</span> <br>
                                <br>
                                <span class="footer__three-span"> <b>Telefon :</b><a
                                        href="tel:{{ $footer->contact }}" class="footer_link">
                                        {{ $footer->contact }}</a></span> <br> <br>
                                <span class="footer__three-span"> <b>Email :</b> <a
                                        href="mailto:{{ $footer->email }}"
                                        class="footer_link">{{ $footer->email }}</a></span> <br> <br>
                                <span class="footer__three-span"> <b>Faks :</b> <a href="tel:{{ $footer->faks }}"
                                        class="footer_link"> {{ $footer->faks }}</a> </span> <br> <br>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="footer__four">
                                <h5 class="footer__two-title">XARITADAN KO’RINISHI</h5>
                                <span class="percent">
                                    <div style="width: 40%"></div>
                                </span> <br>
                                <iframe
                                    src="{{ $footer->map }}"
                                    width="250" height="350" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>


                        <div class="footer__content-title">
                            <p class="footer__content-title2">© Sayt <a href="{{ $footer->link }}"
                                    class="footer_link2" target="_blank">Ermanov_Dev</a> tomonidan yaratilgan</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </footer>

    <!-- Footer End -->

    <script src="./libs/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>
