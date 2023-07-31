    <!-- school news -->

    <div class="school__news">
        <div class="container">

         <div class="school__news-info">
             <h1 class="school__news-title">ENG SO'NGGI YANGILIKLAR</h1>
             <span class="photo-percent">
               <div class="kva"></div>
             </span>
             <p class="school__news-text">Maktab hayotidagi eng so'nggi va qiziqarli yangiliklar</p>
         </div>
             <div class="school__news-content owl-carousel owl-theme">
                @foreach ($latestnews as $latestnew)


               <div class="card school__news-card" style="width: 18rem;">
                 <img src="/images/{{ $latestnew->image }}" class=" " alt="...">
                 <div class="card-body">
                   <h5 class="card-title">{{ $latestnew->title }}</h5>
                   <p class="card-text">{{$latestnew->text  }}</p>
                   <a href="{{ route('news') }}" class="btn btn-primary">Davomini o'qish</a>
                 </div>
               </div>
               @endforeach
             </div>
        </div>
     </div>

     <!-- school news -->
