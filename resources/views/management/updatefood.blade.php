
@extends('layoutm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Редактирование кухни') }}</div>

                <div class="card-body">
                    <form action="{{ url('/management/updatefoodpost') }}"  method = "post" class="p-3 p-md-5 bg-light">  
                          @csrf     
                           <div class="form-group row">   
                          	<input type="hidden" name="id" value={{$food->id}}
                            <label for="name">Название</label>
                            <input type="text" name="name" id="name" value="{{$food->name}}"  rows="10" class="form-control"></input>
                            <label for="prise">Цена</label>
                            <input type="text" name="prise" id="prise" value="{{$food->prise}}" rows="4" class="form-control"></input>
                        	  

                        <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Тип') }}</label>
                            <div class="col-md-6">
                                  <select name="type">
                                      <option value=0 >Выбеете тип</option>
                                          @foreach($type as $t)
                                            @if($t->id==$food->type_foods_id)
                                              <option selected value={{$t->id}}>{{$t->name}}</option>
                                              @else <option value={{$t->id}}>{{$t->name}}</option>
                                           @endif
                                          @endforeach
                                  </select>
                            </div>


                        <input type="submit" name="ok"value="Сохранить" class="btn py-3 px-4 btn-primary">
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
