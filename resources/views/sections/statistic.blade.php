  <!-- school statistics -->
  <div class="school__statistics">
    <div class="scool__statistics-infoes">
      <h1 class="school__statistics-title">MAKTAB STATISTIKASI</h1>
      <span class="photo-percent">
        <div class="kva"></div>
      </span>
      <p class="school__statistics-text">Maktabning asosiy ko'rsatgich parametrlari </p>
    </div>

    <div class="container">
      <div class="row  row-cols-1 row-cols-sm-2 row-cols-md-4 statistics__info">
        @foreach ($statistics as $statistic)


        <div class="col mt-3">
          <div class="statistics__infoes">
            <ul class="statistics__infoes-list">
              <i class="{{ $statistic->icon }} statistics__list-icon"></i>
            </ul>
            <h3 class="statistics__infoes__title" data-num="{{ $statistic->number + 1}}">0</h3>
            <h5 class="statistics__infoes__title2">{{ $statistic->title }}</h5>
          </div>
        </div>

        @endforeach
        

        {{-- <div class="col mt-3">
          <div class="statistics__infoes">
            <ul class="statistics__infoes-list">
              <i class="fas fa-paint-brush fa-3x statistics__list-icon"></i>
            </ul>
            <h3 class="statistics__infoes__title" data-num="8">7</h3>
            <h5 class="statistics__infoes__title2">To'garaklar soni</h5>
          </div>

        </div> --}}

      </div>
    </div>
  </div>
  <!-- scool statistics -->
