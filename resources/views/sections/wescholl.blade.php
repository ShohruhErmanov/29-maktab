 <!-- We school -->
 <div class="my__school">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-xl-6 my__school-info">
                 <h2 class="my__school-title">BIZNING MAKTAB</h2>
                 <span class="photo-percent2">
                     <div class="kva2"></div>
                 </span>
                 <p class="my__school-text">Sirdaryo viloyati Sayxunobod tumani xalq taʼlimi boʻlimiga qarashli 29-umumiy
                     oʻrta taʼlim maktabi</p>
             </div>
             @foreach ($images as $image)
                 <div class="col-xl-6">
                     <img src="/images/{{ $image->image }}" alt="" class="my__school-image">
                 </div>
             @endforeach
         </div>
     </div>
 </div>

 <!-- We school -->
