 @extends('layouts.site')
 @section('title')
   Rahbariyat
 @endsection
 @section('content')

  <!-- Main Starting -->

  <main>
    <div class="container">
      <div class="row leadership__content">
        <nav aria-label="breadcrumb " class="news__content-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Bosh sahifa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Rahbariyat</li>
          </ol>
        </nav>
        <h2 class="leadership__title">Rahbariyat</h2>

          @foreach ($leaders as $leader)


        <div class="ledadership__content-info">
          <div class="leader__info-image">
            <img src="/images/{{ $leader->image }}" alt="" class="leadership__info-img">
          </div>
          <div class="leadership__infos-info">
            <h5 class="leadership__info-titleh5">{{ $leader->title }}</h5>
            <h2 class="leadership__info-titleh2">{{ $leader->name }}</h2>
            <div class="leadership__info-box">
              <div class="box__info">
                <ul class="leadership__info-list">
                  <i class="fas fa-phone-alt fa-2x leadership__info-icon"></i>
                </ul>
                <div class="leadership__info-titles">
                  <h5><b>Telefon :</b></h5>
                  <a href="tel:{{ $leader->contact }}" class="leadership__info-link">{{ $leader->contact }}</a>

                </div>
              </div>
              <div class="box__info">
                <ul class="leadership__info-list">
                  <i class="far fa-clock fa-2x leadership__info-icon"></i>
                </ul>
                <div class="leadership__info-titles">
                  <h5><b>Qabul :</b></h5>
                  <p> {{ $leader->acceptance }} </p>

                </div>
              </div>

            </div>

            <div class="leadership__btns">
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Biografiya</a>
              </div>
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Majburiyatlar</a>
              </div>
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Faoliyati</a>
              </div>
            </div>
          </div>


          <div class="leadership__item">
            <h5 class="leadership__item-title">Biografiyasi</h5>
            <p class="leadership__item-text">{{ $leader->biografiya }} </p>

          </div>
          <div class="leadership__item">
            <h5 class="leadership__item-title">Majburiyatlari</h5>
            <p class="leadership__item-text">{{ $leader->majburiyatlar }}</p>

          </div>
          <div class="leadership__item">
            <h5 class="leadership__item-title">Faoliyati</h5>
            <p class="leadership__item-text">{{ $leader->faoliyat }}</p>

          </div>
        </div>
        @endforeach
        {{-- <div class="ledadership__content-info">
          <div class="leader__info-image">
            <img src="./img/maqsud.jpg" alt="" class="leadership__info-img">
          </div>
          <div class="leadership__infos-info">
            <h5 class="leadership__info-titleh5">29-maktab O'TIBDO' direktor o'rin bosari</h5>
            <h2 class="leadership__info-titleh2">Umarov Mahsudjon Abduvaidovich</h2>
            <div class="leadership__info-box">
              <div class="box__info">
                <ul class="leadership__info-list">
                  <i class="fas fa-phone-alt fa-2x leadership__info-icon"></i>
                </ul>
                <div class="leadership__info-titles">
                  <h5><b>Telefon :</b></h5>
                  <a href="tel:998994795982" class="leadership__info-link">+998 (99) 479 59 82</a>

                </div>
              </div>
              <div class="box__info">
                <ul class="leadership__info-list">
                  <i class="far fa-clock fa-2x leadership__info-icon"></i>
                </ul>
                <div class="leadership__info-titles">
                  <h5><b>Qabul :</b></h5>
                  <p>Juma 10:00 dan 12:00 gacha</p>

                </div>
              </div>

            </div>

            <div class="leadership__btns">
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Biografiya</a>
              </div>
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Majburiyatlar</a>
              </div>
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Faoliyati</a>
              </div>
            </div>
          </div>


          <div class="leadership__item">
            <h5 class="leadership__item-title">Biografiya</h5>
            <p class="leadership__item-text">Tug‘ilgan yili: 11.03.1988 </p>
            <p class="leadership__item-text">Tug‘ilgan joyi: Sirdaryo viloyati Sayxunobod tumani </p>
            <p class="leadership__item-text">Millati: o‘zbek </p>
            <p class="leadership__item-text">Partiyaviyligi: yo‘q</p>
            <p class="leadership__item-text">Ma’lumoti: oliy</p>
            <p class="leadership__item-text">Tamomlagan: 2013-yil Guliston davlat universiteti (kunduzgi)</p>
            <p class="leadership__item-text">Ma’lumoti bo‘yicha mutaxassisligi: Tarix fani o'qituvchisi</p>
          </div>
          <div class="leadership__item">
            <h5 class="leadership__item-title">Majburiyatlar</h5>
            <p class="leadership__item-text">Treningning uslubiy komponentini ta'minlash. Bosh o'qituvchi talabalar
              uchun o'quv dasturlarini tuzishi, tasdiqlashi va kerak bo'lganda tuzatishi shart. Muhim shart - bu ta'lim
              muassasasidagi yoki mamlakatdagi vaziyatning o'zgarishi bilan bog'liq bo'lishi mumkin bo'lgan tuzatishning
              tezkorligi. Masalan, har qanday favqulodda vaziyat (terrorchilik harakati, tabiiy ofat va boshqalar) bilan
              bog'liq qo'shimcha darsni kiritishda.
              Pedagoglar jamoasining ishini muvofiqlashtirish. Direktor o'rinbosari darslarda, to'garaklar va
              mashg'ulotlarda qatnashish huquqiga ega darsdan tashqari mashg'ulotlar o'qituvchining ishini nazorat
              qilish maqsadida. Bundan tashqari, u o'qituvchilarni o'z vaqtida attestatsiyadan o'tkazish va ularning
              malakasini oshirish uchun ularning malakasini oshirish uchun javobgardir.
              Rejalashtirish. Gap joriy va istiqbolli rejalar haqida bormoqda, ular direktorning o'quv va tarbiyaviy
              ishlar bo'yicha o'rinbosari tomonidan tuzilishi va muassasa direktori tomonidan tasdiqlanishi kerak.
            </p>

          </div>
          <div class="leadership__item">
            <h5 class="leadership__item-title">Faoliyat</h5>
            <p class="leadership__item-text">2011-2013 yil - Sayxunobod tumani 17-sonli umumiy o'rta ta'lim maktab tarix
              fani o'qituchisi</p>
            <p class="leadership__item-text">2013-2013 yil - Sayxunobod tumani 22-sonli umumiy o'rta ta'lim maktab tarix
              fani o'qituvchisi.</p>
            <p class="leadership__item-text">2013-2014 yil - Sayxunobod tumani 22-sonli umumiy o'rta ta'lim maktab
              amaliyotchi psixolog</p>
            <p class="leadership__item-text">2014-2015 yil - Sayxunobod tumani 22-sonli umumiy o'rta ta'lim maktab TIBD.
            </p>
            <p class="leadership__item-text">2015-2018 yil - Sayxunobod tunani 17-sonli umumiy o'rta ta'lim maktab tarix
              fani o'qituchisi</p>
            <p class="leadership__item-text">2018-2019 yil - Majburiy izjro byurosi Sayxunobod tumani bo'limi davlat
              izjrochisi.</p>
            <p class="leadership__item-text">2019 yil - sovuq mavsum - Sayhunobod tumani 29-sonli umumiy o'rta ta'lim
              maktabining o'quv
              ishlari bo'yicha direktor o'rinbosari.</p>
          </div>
        </div>
        <div class="ledadership__content-info">
          <div class="leader__info-image">
            <img src="./img/asqar.jpg" alt="" class="leadership__info-img">
          </div>
          <div class="leadership__infos-info">
            <h5 class="leadership__info-titleh5">29-maktab Ma'naviyat ishlar bo'yicha direktor o'rin bosari</h5>
            <h2 class="leadership__info-titleh2">Mamatqulov Asqarjon Qodirqulovich</h2>
            <div class="leadership__info-box">
              <div class="box__info">
                <ul class="leadership__info-list">
                  <i class="fas fa-phone-alt fa-2x leadership__info-icon"></i>
                </ul>
                <div class="leadership__info-titles">
                  <h5><b>Telefon :</b></h5>
                  <a href="tel:998994795982" class="leadership__info-link">+998 (99) 479 59 82</a>

                </div>
              </div>
              <div class="box__info">
                <ul class="leadership__info-list">
                  <i class="far fa-clock fa-2x leadership__info-icon"></i>
                </ul>
                <div class="leadership__info-titles">
                  <h5><b>Qabul :</b></h5>
                  <p>Juma 10:00 dan 12:00 gacha</p>

                </div>
              </div>

            </div>

            <div class="leadership__btns">
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Biografiya</a>
              </div>
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Majburiyatlar</a>
              </div>
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Faoliyati</a>
              </div>
            </div>
          </div>


          <div class="leadership__item">
            <h5 class="leadership__item-title">Biografiya</h5>
            <p class="leadership__item-text">Tug‘ilgan yili: 08.10.1971</p>
            <p class="leadership__item-text">Tug‘ilgan joyi: Samarqand viloyati, Urgut tumani </p>
            <p class="leadership__item-text">Millati: o‘zbek </p>
            <p class="leadership__item-text">Partiyaviyligi: yo‘q</p>
            <p class="leadership__item-text">Ma’lumoti: oliy</p>
            <p class="leadership__item-text">Tamomlagan: 1997 y. Samarqand davlat arxitektura-qurilish instituti, 2003
              y. Toshkent davlat iqtisodiyot universiteti, 2010 y. O‘zbekiston Respublikasi Bank-moliya akademiyasi</p>
            <p class="leadership__item-text">Ma’lumoti bo‘yicha mutaxassisligi: iqtisodchi, moliyachi</p>
          </div>
          <div class="leadership__item">
            <h5 class="leadership__item-title">Majburiyatlar</h5>
            <p class="leadership__item-text">Ma’naviy va tarbiyaviy ishlarni tashkil etish va malakali kadrlar
              tayyorlashni ta’minlash;

              · Ma’naviy-ma’rifiy va tarbiya jarayonlariga oid masalalar bo‘yicha mutasaddi yuqori tashkilotlar
              buyruqlari, farmoyishlari va ko‘rsatmalari, Filial ilmiy kengashi qarorlari va direktor buyruqlari va
              farmoyishlari bajarilishini tashkil qilish;

              · Ma’naviy-ma’rifiy va tarbiyaviy jarayonlarni ta’minlaydigan bo‘limlar, dekanatlar ishlarini
              muvofiqlashtirish va nazorat qilish;

              · Bo‘limlar, fakultet va kafedralar ma’naviy-ma’rifiy jarayoniga oid ish rejalarni tasdiqlash va ularning
              bajarilishini nazorat qilish;

              · Professor-o‘qituvchilar va o‘quv ishiga yordamlashuvchi xodimlar shtatlari bo‘yicha takliflarni ishlab
              chiqish, kafedralar va bo‘limlarni malakali kadrlar bilan ta’minlash ishlarini tashkil etishda ishtirok
              etish;

              · Oliy ta’lim muassasalari bilan ma’naviy-ma’rifiy yo‘nalishda doimiy hamkorlikni amalga oshirish,
              konferensiya, seminarlarda professor-o‘qituvchilarning faol ishtirokini ta’minlash, mahalliy hokimiyatlar
              bilan hamkorlikda ishlash;

              · O‘rnatilgan tartibda Filialning yillik reytingini aniqlash, tahlil qilish, ma’naviy-ma’rifiy faoliyatini
              takomillashtirishga oid ishlarni amalga oshirish;

              · Filialni o‘rnatilgan tartibda doimiy ichki attestatsiyadan o‘tkazish, tashqi attestatsiyaga tayyorlash
              va o‘tkazishda faol ishtirok etish. Yuksak ma’naviy-axloqiy fazilatli, mustaqil fikrlashga qodir bo‘lgan
              yuqori ma’lumotli, malakali kadrlar tayyorlashni ta’minlash;

              · Kafedralar faoliyatini muvofiqlashtirish hamda ularni Filialning ma’naviy-ma’rifiy ishlarida faol
              qatnashishlarini ta’minlash;

              · Talabalar ongiga milliy g‘oyani singdirish, ma’naviy-axloqiy tarbiya ishlarini olib borishning amaliy,
              ta’sirchan mexanizmlarini shakllantirish, ma’naviy-ma’rifiy jarayonni boshqarish va izchil
              takomillashtirib borish;</p>

          </div>
          <div class="leadership__item">
            <h5 class="leadership__item-title">Faoliyat</h5>
            <p class="leadership__item-text">1988-1991 yy. - Samarqand viloyati Urgut tumani A.Navoiy nomli jamoa
              xo‘jaligi ishchisi, hisobchisi</p>
            <p class="leadership__item-text">1991-1992 yy. - Samarqand viloyati Loyiha-qidiruv stansiyasi bosh
              hisobchisi</p>
            <p class="leadership__item-text">1992-1998 yy. - “O‘zagrotreydinvest” tashqi iqtisodiy birlashmasi Samarqand
              bo‘limi bosh hisobchisi </p>
            <p class="leadership__item-text">1998-2000 yy. - “Agrosharq” tashqi savdo ishlab-chiqarish korxonasi bosh
              hisobchisi</p>
            <p class="leadership__item-text">2000-2005 yy. - “Agrosharq” tashqi savdo ishlab-chiqarish korxonasi
              direktori o‘rinbosari</p>
            <p class="leadership__item-text">2005-2008 yy. - Qishloq va suv xo‘jaligi vazirligining suv xo‘jaligi
              kompleksini mablag‘ bilan ta’minlash boshqarmasi yetakchi mutaxassisi, bosh mutaxassisi</p>
            <p class="leadership__item-text">2008-2014 yy. - Qishloq va suv xo‘jaligi vazirligining suv xo‘jaligi
              kompleksini mablag‘ bilan ta’minlashni tashkil etish boshqarmasi boshlig‘i o‘rinbosari - Byudjet
              tashkilotlarini moliyalashtirish bo‘limi boshlig‘i</p>
          </div>
        </div>
        <div class="ledadership__content-info">
          <div class="leader__info-image">
            <img src="./img/asror.jpg" alt="" class="leadership__info-img">
          </div>
          <div class="leadership__infos-info">
            <h5 class="leadership__info-titleh5">29-maktab Psixolog</h5>
            <h2 class="leadership__info-titleh2">Mamatqulov Asrorjon Qodirqulovich</h2>
            <div class="leadership__info-box">
              <div class="box__info">
                <ul class="leadership__info-list">
                  <i class="fas fa-phone-alt fa-2x leadership__info-icon"></i>
                </ul>
                <div class="leadership__info-titles">
                  <h5><b>Telefon :</b></h5>
                  <a href="tel:998994795982" class="leadership__info-link">+998 (99) 479 59 82</a>

                </div>
              </div>
              <div class="box__info">
                <ul class="leadership__info-list">
                  <i class="far fa-clock fa-2x leadership__info-icon"></i>
                </ul>
                <div class="leadership__info-titles">
                  <h5><b>Qabul :</b></h5>
                  <p>Juma 10:00 dan 12:00 gacha</p>

                </div>
              </div>

            </div>

            <div class="leadership__btns">
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Biografiya</a>
              </div>
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Majburiyatlar</a>
              </div>
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Faoliyati</a>
              </div>
            </div>
          </div>


          <div class="leadership__item">
            <h5 class="leadership__item-title">Biografiya</h5>
            <p class="leadership__item-text">Tug‘ilgan yili: 23.01.1987</p>
            <p class="leadership__item-text">Tug‘ilgan joyi: Sirdaryo viloyati Sayxunobod tumani </p>
            <p class="leadership__item-text">Millati: o‘zbek </p>
            <p class="leadership__item-text">Partiyaviyligi: yo‘q</p>
            <p class="leadership__item-text">Ma’lumoti: oliy</p>
            <p class="leadership__item-text">Tamomlagan: 2005-yil Sirdaryo Pedagogika kasb-hunar kulleji</p>
            <p class="leadership__item-text">Ma’lumoti bo‘yicha mutaxassisligi: Musiqa o'qituvchisi</p>
          </div>
          <div class="leadership__item">
            <h5 class="leadership__item-title">Majburiyatlar</h5>
            <p class="leadership__item-text">Psixologik xizmat haqida Nizom amaliyotchi psixolog o`z faoliyatida amal
              qiladigan asosiy hujjat hisoblanadi. Psixologik xizmat haqida Nizom Sobiq Ittifoqda 1989 yilda qabul
              qilingan. Ushbu Nizomga ko`ra psixologlar haftasiga 41 soat ishlashar edi. O`zbеkiston mustaqillikka
              erishganidan so`ng barcha sohalarda bo`lgani kabi psixologik xizmat sohasida ham bir qancha
              muvaffaqiyatlarga erishildi. Ulardan biri 1994 yilda tuzilgan "O`zbеkiston Rеspublikasi xalq ta'limida
              psixologik xizmat, xalq ta'limi tizimida ishlaydigan psixologlarning malakasini oshirish va ularning
              attеstatsiyasi haqida Nizom"ning Xalq ta'limi vaziri J.G`.Yo`ldoshеv tomonidan tasdiqlanishi (1996 yil 5
              aprеl) bo`ldi. 2001 yilda bu Nizomga o`zgartirish kiritildi. Nizomga yеttinchi bo`lim, kasb hunarga
              yo`naltirish bo`limi ham qo`shildi. Maktablarga maxsus kasb-hunarga yo`naltirish darslari kiritildi. Ushbu
              darslarni psixologlar o`ta boshlashdi. 2002 yilda Nizomga qayta o`zgartirish kiritildi. Bu o`zgarishning
              salbiy va ijobiy tomoni bo`ldi. Ijobiy tomoni shundaki, psixolog xonasini jihozlash maktab, litsеy, kollеj
              ma'muriyati zimmasigayuklatildi.Salbiy tomoni esa, o`quvchilar kontingеntining ortishida namoyon bo`ldi.
              Maktabda o`quvchilar soni 1000 nafar va undan ortiq bo`lsa,bir shtat birligi psixolog ajratiladigan
              bo`ldi. Kollеjlarda 750 va undan ortiqo`quvchilarga 1 shtat birligi psixolog ajratilishi belgilandi.2010
              yilda Nizomga qayta o`zgartirish kiritildi.</p>

          </div>
          <div class="leadership__item">
            <h5 class="leadership__item-title">Faoliyat</h5>
            <p class="leadership__item-text">2002-2005 yil. - Sirdaryo pedagogika kasb hunar kolleji talabasi</p>
            <p class="leadership__item-text">12005-2014 yil. - “Fayozbek Sa’dulla” Fermer xo‘jaligida ishchi</p>
            <p class="leadership__item-text">2017 yil. - Sirdaryo viloyati Sayxunobod tumanidagi 29-maktab Musiqa fani
              o'quvchisi </p>
          </div>
        </div>
        <div class="ledadership__content-info">
          <div class="leader__info-image">
            <img src="./img/qahramon.jpg" alt="" class="leadership__info-img">
          </div>
          <div class="leadership__infos-info">
            <h5 class="leadership__info-titleh5">29-maktab CHQBT rahbari</h5>
            <h2 class="leadership__info-titleh2">Nixalov Qaxramon Abriyevich</h2>
            <div class="leadership__info-box">
              <div class="box__info">
                <ul class="leadership__info-list">
                  <i class="fas fa-phone-alt fa-2x leadership__info-icon"></i>
                </ul>
                <div class="leadership__info-titles">
                  <h5><b>Telefon :</b></h5>
                  <a href="tel:998994795982" class="leadership__info-link">+998 (99) 479 59 82</a>

                </div>
              </div>
              <div class="box__info">
                <ul class="leadership__info-list">
                  <i class="far fa-clock fa-2x leadership__info-icon"></i>
                </ul>
                <div class="leadership__info-titles">
                  <h5><b>Qabul :</b></h5>
                  <p>Juma 10:00 dan 12:00 gacha</p>

                </div>
              </div>

            </div>

            <div class="leadership__btns">
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Biografiya</a>
              </div>
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Majburiyatlar</a>
              </div>
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Faoliyati</a>
              </div>
            </div>
          </div>


          <div class="leadership__item">
            <h5 class="leadership__item-title">Biografiya</h5>
            <p class="leadership__item-text">Tug‘ilgan yili: 16.11.1967 </p>
            <p class="leadership__item-text">Tug‘ilgan joyi: Sirdaryo viloyati Sayxunobod tumani </p>
            <p class="leadership__item-text">Millati: o‘zbek </p>
            <p class="leadership__item-text">Partiyaviyligi: yo‘q</p>
            <p class="leadership__item-text">Ma’lumoti: oliy</p>
            <p class="leadership__item-text">Tamomlagan: 1994-yil Guliston Davlat Universiteti (Kunduzgi)
            </p>
            <p class="leadership__item-text">Ma’lumoti bo‘yicha mutaxassisligi: Umim texnika fanlari va mexnat fani O'qitvchisi</p>
          </div>
          <div class="leadership__item">
            <h5 class="leadership__item-title">Majburiyatlar</h5>
            <p class="leadership__item-text">Ta’lim muassasasi direktori yoshlarning ChQBT va harbiy-vatanparvarlik
              ruhidagi tarbiyasini puxta tashkillashtirilishi, sifatli o‘tkazilishi, sohaga doir ijobiy natijalarga
              erishilishi, ta’lim muassasasi ixtiyoriga berilgan o‘quv qurol-yarog‘lari, kichik kalibrli va pnevmatik
              miltiqlar, ularda qo‘llaniladigan patronlar but saqlanishi uchun javob beradi.

              Ta’lim muassasasi direktori zimmasiga ChQBT sohasida quyidagi majburiyatlar yuklanadi:

              o‘quv-tarbiyaviy jarayonni o‘z vaqtida rejalashtirilishi, tashkil etilishi hamda ChQBT dasturini to‘liq va
              sifatli bajarilishini ta’minlash;

              ChQBT fani uchun xona, ushbu tayyorgarlikning amaliy masalalarini o‘tkazish uchun joy va maydonlar
              ajratish, shuningdek ushbu fanga oid o‘quv-moddiy bazani mazkur Nizom hamda ChQBT dasturida belgilangan
              talablarga muvofiq muntazam ravishda takomillashtirib borish choralarini ko‘rish;

              ta’lim muassasalarida “Shon-sharaf burchagi” yoki “Jasorat muzeyi”ni tashkil etish va ularning
              jihozlanishini qat’iy nazoratga olish;

              ta’lim muassasasi ixtiyoriga berilgan o‘quv qurol-yarog‘lar (kichik kalibrli va pnevmatik miltiqlar,
              ularda qo‘llaniladigan patronlar) hisobini tegishli yo‘riqnoma talablariga muvofiq yuritilishi,
              saqlanishi, ta’mirlanishi va hisobdan chiqarilishini tashkillashtirish, shuningdek har uch oyda bir marta
              ularning mavjudligi, hisobi to‘g‘ri yuritilayotgani, talab darajasida saqlanayotgani va texnik holatini
              shaxsan tekshirib borish;

              ChQBT fani rahbari va o‘qituvchisiga o‘quv-uslubiy jihatdan yordam berish, ushbu fanning boshqa fanlar
              bilan uzviyligini, shuningdek to‘garak ishlari tashkil etilishi va olib borilishini ta’minlash;

              ChQBT fani rahbari va o‘qituvchisi tomonidan o‘tkazilayotgan darslar va o‘quvchilarning o‘quv
              materiallarini o‘zlashtirishi sifatini muntazam tekshirib borish, ular bilan olib borilayotgan ChQBT va
              harbiy-vatanparvarlik ruhidagi tarbiyaviy ishlarning holatini o‘quv semestri davomida o‘tkaziladigan
              pedagoglar kengashlarda (yig‘ilish va majlislarda) muhokama etib borish;</p>

          </div>
          <div class="leadership__item">
            <h5 class="leadership__item-title">Faoliyat</h5>
            <p class="leadership__item-text">1988-1994 yil Guliston davlat universiteti talabasi.</p>
            <p class="leadership__item-text">1994-1997 yil Sayxunobod tumani 29 - umumiy o'rta ta'lim maktabida mehnat fani o'qituvchisi.</p>
            <p class="leadership__item-text">1997-2003 yil Sayxunobod tumani 29 - umumiy o'rta ta'lim maktabida psixolog. </p>
            <p class="leadership__item-text">2003-2011 yil Sayxunobod 29 - umumiy o'rta ta'lim maktabida ma'naviy- marifiy ishlar bo'yicha direktor o'rinbosari</p>
            <p class="leadership__item-text">2011-2015 yil Sayxunobod tumani 29 - umumiy o'rta ta'lim maktabi direktori</p>
            <p class="leadership__item-text">2015-2018 yil Sayxunobod tumani 29-umum talim maktabi mehnat fani o'quvchisi</p>
            <p class="leadership__item-text">2018 yil- sovuq mavsum - Sayxunobod tumani 29-umum ta'lim maktabida ChQBT rahbari.</p>
          </div>
        </div>
        <div class="ledadership__content-info">
          <div class="leader__info-image">
            <img src="./img/qahramon.jpg" alt="" class="leadership__info-img">
          </div>
          <div class="leadership__infos-info">
            <h5 class="leadership__info-titleh5">29-maktab Xo'jalik ishlar bo'yicha direktor o'rin bosari</h5>
            <h2 class="leadership__info-titleh2">Nixalov Qaxramon Abriyevich</h2>
            <div class="leadership__info-box">
              <div class="box__info">
                <ul class="leadership__info-list">
                  <i class="fas fa-phone-alt fa-2x leadership__info-icon"></i>
                </ul>
                <div class="leadership__info-titles">
                  <h5><b>Telefon :</b></h5>
                  <a href="tel:998994795982" class="leadership__info-link">+998 (99) 479 59 82</a>

                </div>
              </div>
              <div class="box__info">
                <ul class="leadership__info-list">
                  <i class="far fa-clock fa-2x leadership__info-icon"></i>
                </ul>
                <div class="leadership__info-titles">
                  <h5><b>Qabul :</b></h5>
                  <p>Juma 10:00 dan 12:00 gacha</p>

                </div>
              </div>

            </div>

            <div class="leadership__btns">
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Biografiya</a>
              </div>
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Majburiyatlar</a>
              </div>
              <div class="leadership__btn">
                <a href="" class="leadership__btn-link">Faoliyati</a>
              </div>
            </div>
          </div>


          <div class="leadership__item">
            <h5 class="leadership__item-title">Biografiya</h5>
            <p class="leadership__item-text">Tug‘ilgan yili: 08.10.1971</p>
            <p class="leadership__item-text">Tug‘ilgan joyi: Samarqand viloyati, Urgut tumani </p>
            <p class="leadership__item-text">Millati: o‘zbek </p>
            <p class="leadership__item-text">Partiyaviyligi: yo‘q</p>
            <p class="leadership__item-text">Ma’lumoti: oliy</p>
            <p class="leadership__item-text">Tamomlagan: 1997 y. Samarqand davlat arxitektura-qurilish instituti, 2003
              y. Toshkent davlat iqtisodiyot universiteti, 2010 y. O‘zbekiston Respublikasi Bank-moliya akademiyasi</p>
            <p class="leadership__item-text">Ma’lumoti bo‘yicha mutaxassisligi: iqtisodchi, moliyachi</p>
          </div>
          <div class="leadership__item">
            <h5 class="leadership__item-title">Majburiyatlar</h5>
            <p class="leadership__item-text">Tuman hokimi O‘zbekiston Respublikasi Oliy Majlisi palatalari, O‘zbekiston
              Respublikasi Prezidenti qarorlari va Vazirlar Mahkamasi qabul qilgan hujjatlar, mahalliy davlat hokimiyati
              va boshqaruvi organlari bilan fuqarolarning o‘zini o‘zi boshqarish organlari o‘rtasidagi aloqalarni,
              aholini tumannni boshqarishga jalb etishni ta’minlaydi;

              o‘ziga berilgan vakolatlar doirasida tegishli hududda joylashgan korxonalar, muassasalar, tashkilotlar,
              birlashmalar, shuningdek mansabdor shaxslar va fuqarolar tomonidan ijro etilishi majburiy bo‘lgan qarorlar
              qabul qiladi;

              O‘zbekiston Respublikasi qonunlari, O‘zbekiston Respublikasi Oliy Majlisi palatalari, O‘zbekiston
              Respublikasi Prezidenti, Vazirlar Mahkamasi hujjatlarining, yuqori turuvchi organlar va tegishli xalq
              deputatlari tuman Kengashi qarorlarining ijrosini tashkil etadi;</p>

          </div>
          <div class="leadership__item">
            <h5 class="leadership__item-title">Faoliyat</h5>
            <p class="leadership__item-text">1988-1991 yy. - Samarqand viloyati Urgut tumani A.Navoiy nomli jamoa
              xo‘jaligi ishchisi, hisobchisi</p>
            <p class="leadership__item-text">1991-1992 yy. - Samarqand viloyati Loyiha-qidiruv stansiyasi bosh
              hisobchisi</p>
            <p class="leadership__item-text">1992-1998 yy. - “O‘zagrotreydinvest” tashqi iqtisodiy birlashmasi Samarqand
              bo‘limi bosh hisobchisi </p>
            <p class="leadership__item-text">1998-2000 yy. - “Agrosharq” tashqi savdo ishlab-chiqarish korxonasi bosh
              hisobchisi</p>
            <p class="leadership__item-text">2000-2005 yy. - “Agrosharq” tashqi savdo ishlab-chiqarish korxonasi
              direktori o‘rinbosari</p>
            <p class="leadership__item-text">2005-2008 yy. - Qishloq va suv xo‘jaligi vazirligining suv xo‘jaligi
              kompleksini mablag‘ bilan ta’minlash boshqarmasi yetakchi mutaxassisi, bosh mutaxassisi</p>
            <p class="leadership__item-text">2008-2014 yy. - Qishloq va suv xo‘jaligi vazirligining suv xo‘jaligi
              kompleksini mablag‘ bilan ta’minlashni tashkil etish boshqarmasi boshlig‘i o‘rinbosari - Byudjet
              tashkilotlarini moliyalashtirish bo‘limi boshlig‘i</p>
          </div>
        </div> --}}
      </div>
    </div>

  </main>

  <!-- Main End -->

 @endsection
