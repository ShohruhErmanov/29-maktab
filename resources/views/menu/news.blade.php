@extends('layouts.site')

@section('title')
    Yangiliklar
@endsection
@section('content')
    <!-- Main Starting -->

    <main>
        <div class="container">
            <div class="news__content">
                <nav aria-label="breadcrumb " class="news__content-breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Bosh sahifa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Yangiliklar</li>
                    </ol>
                </nav>

                <div class="news__new-title">
                    <h2 class="news__new-title2">Yangiliklar</h2>
                </div>

                @foreach ($posts as $post)
                    <div class="post">
                        <h5 class="news__content-title mt-5">{{ $post->title }}</h5>
                        <div class="news__content-info">

                            <div class="news__content-image">
                                <img src="/images/{{ $post->image }}" alt="" class="news__content-img">
                            </div>
                            <p class="news__content-text">{{ $post->text }}</p>

                            <div class="news__content-calendar">
                                <ul class="news__conetent-list">
                                    <i class="fas fa-calendar-day news__content-icon"></i>
                                </ul>
                                <span class="news__content-span">   </span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{-- {{ $posts->links() }} --}}
            {{-- <ul class="pagination mb-5 ">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1"><i
                            class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span
                            class="sr-only">(current)</span></a></li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
            </ul> --}}
        </div>

    </main>
    <!-- Main End -->
@endsection
