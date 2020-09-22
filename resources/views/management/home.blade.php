
@extends('layoutm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                <div class="card-body">
                   
                    <section class="section">
                        <div class="container">
                        <div class="row justify-content-center text-center mb-5">
                            <div class="col-md-7">
                        <h2 class="heading" data-aos="fade-up">Бронирование</h2>
                
                    </div>
                    </div>
                      <a href="/reservation" target="_blank" class="room">Добавить бронь</a>
                    <hr>
                   
                    @foreach($booking as $b)
                       <div class="row">
                        <p>
                            <h4>{{$b->name}} | </h4>
                            <h4>{{$b->phone}} | </h4>
                            <h4>{{$b->email}} | </h4>
                            <h4>Вьезд {{$b->checkin_date}} | </h4>
                            <h4>Выезд {{$b->checkout_date}} | </h4>
                            <h4>{{$b->Type->name}} | </h4>
                        </p>
                  
                        </div>
                    <hr>
                    <a href="/management/deletebooking/{{$b->id}}" class="room">Удалить</a>
                     <br>
                    <hr>
                    @endforeach
             </div>
        </section>
        </div>
    </div>
</div>
@endsection
