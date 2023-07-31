   <!-- school about -->
   <div class="main__content">
       <div class="main__content-title">
           <h1 class="main__content-title2">MAKTABDAGI TASHKIL ETILADIGAN TO'GARAKLAR</h1>
           <span class="photo-percent">
               <div class="kva"></div>
           </span>
           <div class="main__content-lines"></div>
       </div>
       <p class="main__content-text">Siz 29-umumiy o'rta ta'lim maktabida tashkil etiladiga to'garaklar bilan tanishib
           borishingiz mumkin</p>
   </div>
   <div class="school__circle-coraucel">
       <div class="container">
           <div class="scholl__circle-coraucel2 owl-carousel owl-theme">
               @foreach ($cricles as $cricle)
                   <div class="scholl_circle-card">
                       <div class="ciricle__card-icon">
                           <ul class="ciricle__card-list">
                               <i class="{{ $cricle->icon }} card__list-icon"></i>
                           </ul>
                       </div>
                       <div class="ciricle__card-info">
                           <h3 class="card__info-title">{{ $cricle->title  }}</h3>
                           <div class="card__info-onfoes">
                               <a href="#!" class="card__info-link">Bo'limga o'tish</a>
                               <i class="fas fa-chevron-double-right card__infoes-icon"></i>
                           </div>
                       </div>
                   </div>
               @endforeach
           </div>
       </div>
   </div>
   </div>
   <!-- school about -->
