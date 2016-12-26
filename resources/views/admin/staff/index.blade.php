@extends('admin.layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <a class="btn btn-success pull-right  raw-margin-top-24"
               href="{!! route('staff.create') !!}">Add New Staff Member</a>
            <h1>This is the staff page.</h1>

            <p>Here we list all the staff members.</p>

        </div>

        <hr>
        <div class="row">
            <div class="container">

                @if($staff->isEmpty())

                    <div class="well well-sm text-center">
                        <h3>
                            No staff members.
                        </h3>
                    </div>
                @else
                    @include('admin.staff._cards')
                @endif
            </div>
        </div>
    </div>

@stop

