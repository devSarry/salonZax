@extends('admin.layout.app')

@section('content')
    <div class="col-sm-9 col-md-10 main">
        <div class="row">
            <h1 class="pull-left raw-margin-top-24 raw-margin-left-24">Services: Edit</h1>
            <a class="btn btn-primary pull-right raw-margin-top-24 raw-margin-right-8"
               href="{!! route('services.create') !!}">Add New</a>
        </div>

        <div class="row">
            <div class="col-md-12">

                <form action="{!! route('services.update', ['id' => $service->id]) !!}" method="post" role="form">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    <div class="form-group col-md-8">
                        <label for="service">Service</label>
                        <input type="text" class="form-control" name="service" id="service"
                               value="{{ $service->service  }}">
                    </div>
                    <div class="form-group col-md-offset-2 col-md-2">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" id="price" value="{{ $service->price }}">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>


@stop

