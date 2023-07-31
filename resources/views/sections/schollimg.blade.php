
    <!-- school pictures -->
    <div class="photo">
        <div class="container">
          <div class="school__pictures-info">
            <h2 class="photo__title text-align-center ">GALLEREYA</h2>
            <span class="photo-percent">
              <div class="kva"></div>
            </span>
            <p class="photo__text">Maktab hayotidan lavhalar</p>
          </div>

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 school__pictures-images">
            @foreach ($galleries as $gallery)
            <div class="col school__pictures-imgs">
              <img src="/images/{{ $gallery->image }}" alt="" class="photo__img">
            </div>
            @endforeach
            {{-- <div class="col school__pictures-imgs" >
              <img src="./img/tadbir6.jpg" alt="" class="photo__img">
              <img src="./img/tadbir7.jpg" alt="" class="photo__img">
              <img src="./img/tadbir8.jpg" alt="" class="photo__img">
              <img src="./img/tadbir9.jpg" alt="" class="photo__img">
            </div>
            <div class="col school__pictures-imgs">
              <img src="./img/tadbir10.jpg" alt="" class="photo__img">
              <img src="./img/tadbir11.jpg" alt="" class="photo__img">
              <img src="./img/tadbir9.jpg" alt="" class="photo__img">
              <img src="./img/tadbir3.jpg" alt="" class="photo__img">
            </div> --}}
          </div>

        </div>
      </div>

    <div class="container">
      <div class="view">
        <button class="view__close">
          <i class="fas fa-times"></i>
        </button>
       <div class="BurgerImg">
        <img src="./img/asqar.jpg" alt="" class="imgburger">
        <!-- <img src="./images/product2.jpg" alt="" class="imgcamburger">
        <img src="./images/product3.jpg" alt="" class="imgcambo"> -->

       </div>
    </div>
    </div>
      <!-- school pictures -->
