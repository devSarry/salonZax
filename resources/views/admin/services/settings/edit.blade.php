@extends('admin.layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>Services Page: Edit</h1>
            <form action="{!! route('services.setting.update') !!}" method="post" role="form">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}

                <div class="form-group {{ $errors->has('service') ? 'has-error' : '' }}">
                    <label for="service">Service</label>
                    <input type="text"
                           class="form-control"
                           name="title"
                           id="service"
                           required
                           value="{{ old('service') ? : $service->section->title }}"
                    >

                    {!! $errors->first('service', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group {{ $errors->has('service') ? 'has-error' : '' }}">
                    <label for="body">Body</label>
                    <textarea class="form-control"
                              name="body"
                              id="body"
                              rows="5"
                              required
                    >{{ old('body') ? : $service->section->body }}</textarea>

                    {!! $errors->first('service', '<span class="help-block">:message</span>') !!}
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
    </div>
@stop

