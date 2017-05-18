@extends('admin.layout.app')

@section('content')
    <div class="col-sm-9 col-md-10 main">
        <div class="row">
            <h1 class="pull-left raw-margin-top-24 raw-margin-left-24">Palvelu: Muokkaa</h1>
        </div>

        <div class="row">
            <form action="{!! route('services.update', ['id' => $service->id]) !!}" method="post" role="form">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="form-group col-md-8">
                    <label for="service">Palvelu</label>
                    <input type="text" class="form-control" name="service" id="service"
                           value="{{ $service->service  }}">
                </div>
                <div class="form-group col-md-offset-1 col-md-3">
                    <label for="price">Hinta</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{ $service->price }}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" style="margin-left: 15px">Tallena
                    </button>
                </div>
            </form>
        </div>
    </div>


@stop

