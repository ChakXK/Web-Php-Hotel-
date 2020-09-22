@extends('layout')
@section('content')
 <section class="section">
      <div class="container">
      <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Выберите комнату, которая вас интерисует</h2>
         </div>
        </div>
  </div>
</section>
 @include('rooms.showrooms')
@endsection