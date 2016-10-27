@extends('admin.layout.app')

@section('content')
    <div class="col-sm-9 col-md-10 main">
        <div class="row">
            <h1 class="pull-left raw-margin-top-24 raw-margin-left-24">Services: Create</h1>
        </div>

        <div class="row">
            <div class="col-md-12">

                <form action="{!! route('services.store') !!}" method="post" role="form">
                    {{ csrf_field() }}

                    <div class="form-group col-md-8 {{ $errors->has('service') ? 'has-error' : '' }}">
                        <label for="service">Service</label>
                        <input type="text"
                               class="form-control"
                               name="service"
                               id="service"
                               required
                               value="{{ old('service') }}"
                        >

                        <input type="hidden" name="service_category_id" value="{{ $category_id }}">

                        {!! $errors->first('service', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group col-md-offset-2 col-md-2">
                        <label for="price">Price</label>
                        <div class="input-group {{ $errors->has('service') ? 'has-error' : '' }}">
                            <span class="input-group-addon">‎€</span>
                            <input type="text"
                                   class="form-control"
                                   name="price"
                                   id="price"
                                   required
                                   value="{{old('price')}}"
                            >

                        </div>
                        {!! $errors->first('price', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group  col-md-8">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </form>

            </div>
        </div>
    </div>


@stop

