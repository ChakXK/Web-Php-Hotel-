
@extends('layoutm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Редактирование номера') }}</div>

                <div class="card-body">
                    <form action="{{ url('/management/updateroompost') }}"  method = "post" class="p-3 p-md-5 bg-light" enctype="multipart/form-data">  
                          @csrf     
                           <div class="form-group row">   
                          	<input type="hidden" name="id" value={{$room->id}}
                            <label for="name">Имя</label>
                            <input type="text" name="name" id="name" value="{{$room->name}}"  rows="10" class="form-control"></input>
                            <label for="prise">Цена</label>
                            <input type="text" name="prise" id="prise" value="{{$room->prise}}" rows="4" class="form-control"></input>
                        	  <figure class="img-wrap">
				                <img src="<?=asset(config('sitesettings.imagesputh').'/'.$room->imagename)?>" 
				               alt="Free website template" class="img-fluid mb-3">
				              </figure>

                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Загрузить новую кртинку') }}</label>
                            <div class="col-md-6">
                                <input type="file"  name="image" class="form-control-file" id="image" aria-describedby="fileHelp" accept="image/jpeg,image/png">
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
