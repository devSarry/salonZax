@extends('admin.layout.app')

@section('content')
    <div class="col-sm-9 col-md-10 main">
        <div class="row">
            <h1 class="pull-left raw-margin-top-24 raw-margin-left-24">Staff: Create</h1>
        </div>

        <div class="row">
            <div class="col-md-8 col-lg-offset-2">

                <form action="{!! route('staff.update', [$staff->id]) !!}" method="post" role="form">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    @include('admin.staff._form')

                    <div class="form-group  col-md-8">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </form>

            </div>
        </div>
    </div>


@stop

