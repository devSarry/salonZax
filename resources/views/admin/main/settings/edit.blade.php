@extends('admin.layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>{{ $pageData['section'] }} Page: Edit</h1>
            <form action="{!! route( $pageData['route']) !!}" method="post" role="form">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}

                <upload-image image-src="{{ $data->image ? url(($data->image->upload_dir) . ($data->image->image)): null }}" info="{!! $errors->first('image') !!}"></upload-image>

                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label for="title">Title</label>
                    <input type="text"
                           class="form-control"
                           name="title"
                           id="title"
                           required
                           value="{{ old('title') ? : $data->section->title }}"
                    >

                    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                    <label for="body">Body</label>
                    <textarea class="form-control"
                              name="body"
                              id="body"
                              rows="5"
                              required
                    >{{ old('body') ? : $data->section->body }}</textarea>

                    {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
                </div>

                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
    </div>
@stop

