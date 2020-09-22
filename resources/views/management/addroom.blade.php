@extends('layoutm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Добавление номера') }}</div>

                <div class="card-body">
                    <form action="{{ url('/management/addroompost') }}"  method = "post" class="p-3 p-md-5 bg-light" enctype="multipart/form-data">  
                          @csrf        
                          <div class="form-group">
                             <div class="form-group row">
                            <label for="name">Имя</label>
                            <input type="text" name="name" id="name"  rows="10" class="form-control"></input>
                        </div>

                             <div class="form-group row">
                            <label for="prise">Цена</label>
                            <input type="text" name="prise" id="prise"  rows="4" class="form-control"></input>
                        </div>

                        <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Загрузить кртинку') }}</label>
                            <div class="col-md-6">
                                <input type="file"  name="image" class="form-control-file" id="image" aria-describedby="fileHelp" accept="image/jpeg,image/png">
                            </div>
                        </div>

                      </div>
                      <div class="form-group">
                        <input type="submit" value="Отправить" class="btn py-3 px-4 btn-primary">
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
