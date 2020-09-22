@extends('layout')
@section('content')
<section class="section bg-light pb-0"  >
      <div class="container">

        <div class="row check-availabilty" id="next">
          <div class="block-32" data-aos="fade-up" data-aos-offset="-200">
			<label >Оставить заявку на {{$room->name}}</label>
            <form action="{{ url('/reserve') }}" method="get" class="bg-white p-md-5 p-4 mb-5 border">
            	{{ csrf_field() }}
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control " name="name" required />
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control " name="phone" required />
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control " name="email" >
                </div>
              </div>
                
              	<div class="row">
                <div class="col-md-6 form-group">
                  <label for="start">Дата въезда</label>
                    <input type="date" id="start" class="form-control" name="start" >
                </div>
            	
                <div class="col-md-6 form-group">
                  <label for="finish">Дата выезда</label>
                    <input type="date" id="finish" class="form-control" name="finish">
                </div>
                </div>
                <input type="hidden" name="roomId" value=<?php echo $room->id ?>>
                <input type="hidden" name="roomName" value=<?php echo $room->name ?>>
              <div class="row">
                  <div class="col-md-6 col-lg-3 align-self-end">
                  <input type="submit" value="Забронировать" class="btn btn-primary text-white font-weight-bold">
                </div>
              </div>
            </form>



          </div>


        </div>
      </div>
    </section>


@endsection
