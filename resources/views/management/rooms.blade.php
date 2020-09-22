@extends('layoutm')
@section('content')



<section class="section">
      <div class="container">
      <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Комнаты</h2>
             <a href="/management/addroom" class="room">Добавить комнату</a>
          </div>
        </div>
        <div class="row">
          
          @foreach($rooms as $room)
          <div class="col-md-6 col-lg-4" data-aos="fade-up">
           
              <figure class="img-wrap">
                <img src="<?=asset(config('sitesettings.imagesputh').'/'.$room->imagename)?>" 
               alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>{{$room->name}}</h2>
                <span class="text-uppercase letter-spacing-1"> {{$room->prise}}$ / за ночь</span>
              </div>
             <a href="/management/deleteroom/{{$room->id}}" class="room">Удалить</a>
              <a href="/management/updateroom/{{$room->id}}" class="room">Редактировать</a>
          </div>
          @endforeach
        </div>
         </div>
    </section>


@endsection