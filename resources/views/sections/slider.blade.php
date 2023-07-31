<div class="header__corausel">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

            @foreach ($sliders as $slider)
                <div class="carousel-item {{ $slider->id == 5 ? "active" : "" }} header__corausel-item">
                    <img src="/images/{{ $slider->image }}" class="d-block w-100 header__corausel-img" alt="">
                    <div class="carousel-caption headeder__corausel-title">
                        <h1 class="header__corausel-title2">{{ $slider->title }}</h1>
                    </div>
                </div>
            @endforeach

            {{-- <div class="carousel-item header__corausel-item">
          <img src="./img/scholl4.jpg" class="d-block w-100 header__corausel-img" alt="">
          <div class="carousel-caption headeder__corausel-title">
            <h1 class="header__corausel-title2">29-SONLI UMUMIY O'RTA TA'LIM MAKTABI </h1>

          </div>
        </div>
        <div class="carousel-item header__corausel-item">
          <img src="./img/scholl2.jpg" class="d-block w-100 header__corausel-img" alt="">
          <div class="carousel-caption headeder__corausel-title">
            <h1 class="header__corausel-title2">29-SONLI UMUMIY O'RTA TA'LIM MAKTABIGA XUSH KELIBSIZ</h1>

          </div>
        </div> --}}
        </div>

        <button class="carousel-control-prev header__corausel-btn" type="button"
            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next header__corausel-btn" type="button"
            data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>
