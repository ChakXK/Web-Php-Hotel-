@extends('layout')
@section('content')
<section class="section">
      <div class="container">
      <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Комнаты</h2>
            <p data-aos="fade-up" data-aos-delay="100"><?php echo config('sitesettings.hotelname')?> - это 5-звёздочный 25-этажный отель в центре Киева. Интерьер гостиницы сочетает в себе современные технологии и дизайнерские находки для максимального удобства жилого и рабочего пространств. Выберите комнату чтобы забронировать уже сейчас!</p>
          </div>
        </div>
        <div class="row">
          
          @foreach($rooms as $room)
          @if($room->id!=0)
          <div class="col-md-6 col-lg-4" data-aos="fade-up">
            <a href="/booking/{{$room->id}}" class="room">
              <figure class="img-wrap">
                <img src="<?php echo config('sitesettings.imagesputh')?>/{{$room->imagename}}" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>{{$room->name}}</h2>
                <span class="text-uppercase letter-spacing-1"> {{$room->prise}}$ / за ночь</span>
              </div>
            </a>
          </div>
          @endif
          @endforeach
        </div>
         </div>
    </section>
@endsection