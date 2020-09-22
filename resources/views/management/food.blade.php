@extends('layoutm')
@section('content')
<section class="section">
      <div class="container">
      <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Кухня</h2>
             <a href="/management/addfood" class="room">Добавить</a>
          </div>
        </div>
        <div class="row">
          
          @foreach($food as $f)
          <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <div class="p-3 text-center room-info">
                <h2>{{$f->name}}</h2>

                <span class="text-uppercase letter-spacing-1"> {{$f->Type->name}}</span>

                <span class="text-uppercase letter-spacing-1"> {{$f->prise}}$</span>
              </div>
             <a href="/management/deletefood/{{$f->id}}" class="room">Удалить</a>
             <a href="/management/updatefood/{{$f->id}}" class="room">Редактировать</a>
          </div>
          @endforeach
        </div>
         </div>
    </section>


@endsection