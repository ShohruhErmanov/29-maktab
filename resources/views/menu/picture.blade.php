@extends('layouts.site')
@section('Fotolavhalar')
@section('content')

 <!-- Main Starting -->

 <main>
    <div class="container">
     <div class=" main__images">
       <nav aria-label="breadcrumb " class="news__content-breadcrumb">
         <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="{{ route('index') }}">Bosh sahifa</a></li>
           <li class="breadcrumb-item active" aria-current="page">Fotolavhalar</li>
         </ol>
       </nav>
       <h2 class="images__title">Fotolavhalar</h2>

       <h3 class="images__title2 text-center p-3">Maktab hayotidan foto lavhalar</h3>


       <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 p-5">
        @foreach ($galleries as $gallery)
          <div class="col">
           <img src="/images/{{ $gallery->image }}" alt="" class="images__row-img">
          </div>
          @endforeach
       </div>
     </div>
    </div>
 </main>

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

 <!-- Main End -->

@endsection
