@extends('layouts.site')
@section('title')
    Aloqa
@endsection
@section('content')
    <!-- Main Starting -->

    <main>
        <div class="container">
            <div class="contact">
                <nav aria-label="breadcrumb " class="news__content-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Bosh sahifa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Aloqa</li>
                    </ol>
                </nav>

                <h2 class="contact__title">Aloqa</h2>
                @foreach ($contacts as $contact)


                <div class="contact__content">

                    <div class="contact__info3">
                        <div class="contact__info">
                            <ul class="contact__info-list">
                                <i class="fas fa-map-marker-alt contact__info-icon fa-2x"></i>
                            </ul>
                            <div class="conatct__info-desc">
                                <p class="conatct__info-text">{{ $contact->title }}</p>
                            </div>
                        </div>
                        <div class="contact__info">
                            <ul class="contact__info-list">
                                <i class="far fa-clock contact__info-icon fa-2x"></i>
                            </ul>
                            <div class="conatct__info-desc">
                                <p class="conatct__info-text">{{ $contact->acceptance }}</p>
                            </div>
                        </div>
                        <div class="contact__info">
                            <ul class="contact__info-list">
                                <i class="fas fa-phone-alt contact__info-icon fa-2x"></i>
                            </ul>
                            <div class="contact__info-desc">
                                <a href="tel:{{ $contact->contact }}" class="contact__info-link">{{ $contact->contact }}</a>
                            </div>
                        </div>
                        <div class="contact__info">
                            <ul class="contact__info-list">
                                <a href="{{ $contact->facebook }}"> <i class="fab fa-facebook-f contact__info-icon"></i></a>
                            </ul>
                            <ul class="contact__info-list">
                                <a href="{{ $contact->instagram }}"> <i class="fab fa-instagram contact__info-icon"></i></a>
                            </ul>
                            <ul class="contact__info-list">
                                <a href="{{ $contact->telegram }}"> <i class="fab fa-telegram contact__info-icon"></i></a>
                            </ul>
                            <ul class="contact__info-list">
                                <a href="{{ $contact->youtube }}"> <i class="fab fa-youtube contact__info-icon"></i></a>
                            </ul>
                        </div>
                    </div>
                    <div class="contact__info4">
                        <iframe
                            src="{{ $contact->map }}"
                            width="600" height="400 " style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="iframe"></iframe>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>

    <!-- Main End -->
@endsection
