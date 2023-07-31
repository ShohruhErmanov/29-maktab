    <!-- tribe  -->

    <div class="tribe">
        <div class="container">
            <div class="tribe__info p-5">
                <h2 class="tribe__info-title text-center">Maktab pedagogik jamoasi tarkibi</h2>
                <span class="photo-percent">
                    <div class="kva"></div>
                </span>
            </div>

            <div class="row  row-cols-1 row-cols-sm-2 row-cols-md-4 p-5">
                @foreach ($tribes as $tribe)
                    <div class="col tribe__card">
                        <img src="/images/{{ $tribe->image }}" alt="" class="tribe__row-img text-center">
                        <h5 class="tribe__row-title text-center p-3">{{ $tribe->number }}</h5>
                        <p class="tribe__row-title text-center">{{ $tribe->title }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- tribe -->
