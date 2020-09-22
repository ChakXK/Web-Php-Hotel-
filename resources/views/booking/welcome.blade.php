@extends('layout')

@section('content')

@include('rooms.showrooms')
          <div >
            <form action="{{ url('/search') }}" method="get" class="bg-white p-md-5 p-4 mb-5 border">
            	{{ csrf_field() }}
               
              	<div class="row justify-content-center text-center mb-5">
              		 <div class="col-md-12 form-group">
              		 	<H1>Поиск доступных номеров </H1>
              		 </div>
                  <div class="col-md-4 form-group">
                  <label for="start">Дата въезда</label>
                    <input type="date" id="start" class="form-control" name="start" >
                </div>
              
                <div class="col-md-4 form-group">
                  <label for="finish">Дата выезда</label>
                    <input type="date" id="finish" class="form-control" name="finish">
                </div>
                <div class="col-md-2 form-group">
                <input type="submit" value="Поиск" class="form-control btn btn-primary text-white font-weight-bold">
                </div>
                </div>
                
            </form>
          </div>
@include('foods.showfoods')
@endsection