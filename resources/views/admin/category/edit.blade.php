@extends('admin.layout.app')

@section('content')
    <div class="col-sm-9 col-md-10 main">
        <div class="row">
            <h1 class="pull-left raw-margin-top-24 raw-margin-left-24">Service Category: Edit</h1>
        </div>
        <div class="row">
            <div class="col-md-12">

                <form action="{!! route('category.update', $category->id) !!}" method="post" role="form">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group col-md-8 {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name">Category Name</label>
                        <input type="text"
                               class="form-control"
                               name="name"
                               id="name"
                               required
                               value="{{ $category->name }}"
                        >

                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div  class="form-group col-md-offset-1 col-md-3 raw-margin-top-24" >
                        <input type="checkbox"
                               name="approved"
                               id="fancy-checkbox-default"
                               autocomplete="off"
                               {{ $category->approved ? 'checked="checked"' : '' }}/>
                        <div class="btn-group ">
                            <label for="fancy-checkbox-default" class="btn btn-default">
                                <span class="fa fa-check"></span>
                                <span> </span>
                            </label>
                            <label for="fancy-checkbox-default" class="btn btn-default active">
                                Show?
                            </label>
                        </div>
                    </div>

                    <div class="form-group  col-md-8">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@stop

