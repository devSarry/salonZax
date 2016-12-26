@extends('admin.layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>{{ $pageData['section'] }} Page: Edit</h1>
            <form action="{!! route( $pageData['route']) !!}" method="post" role="form">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}

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

                <div class="well well-sm form-group">

                    <h3>Background Color</h3>

                    <div class="btn-group" data-toggle="buttons">

                        <label class="btn btn-style1 {{ classActiveButton('style1', $data->section->color ) }}">
                            <input type="radio" name="color" id="color1" value="style1"  autocomplete="off">
                            <span class="glyphicon glyphicon-ok"></span>
                        </label>

                        <label class="btn btn-style2 {{ classActiveButton('style2', $data->section->color ) }}">
                            <input type="radio" name="color" id="color2"  value="style2"  autocomplete="off">
                            <span class="glyphicon glyphicon-ok"></span>
                        </label>

                        <label class="btn btn-style3 {{ classActiveButton('style3', $data->section->color ) }}">
                            <input type="radio" name="color" id="color3" value="style3"  autocomplete="off">
                            <span class="glyphicon glyphicon-ok"></span>
                        </label>

                        <label class="btn btn-style5 {{ classActiveButton('style4', $data->section->color ) }}">
                            <input type="radio" name="color" id="color4" value="style4"  autocomplete="off">
                            <span class="glyphicon glyphicon-ok"></span>
                        </label>
                    </div>


                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
    </div>
@stop

