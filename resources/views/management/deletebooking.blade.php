@extends('layoutm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтвердите удаление бронирования') }}</div>
                <div class="card-header">{{$booking->id}}, {{$booking->name}}, {{$booking->checkin_date}},
                  {{$booking->checkout_date}}</div>
                <div class="card-body">
                    <form action="{{ url('/management/deletebookingpost') }}"  method = "post" class="p-3 p-md-5 bg-light" >  
                          @csrf    
                           <input type="hidden" name="id" value={{$booking->id}}    
                          <div class="form-group">
                        <input type="submit" name="ok"value="Подтвердить" class="btn py-3 px-4 btn-primary">
                          <input type="submit" name="cancel"value="Отмена" class="btn py-3 px-4 btn-primary">
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
