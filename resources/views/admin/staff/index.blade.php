@extends('admin.layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <a class="btn btn-success pull-right  raw-margin-top-24"
               href="{!! route('staff.create') !!}">Lisä uusi kuva</a>
            <h1>Kuvagalleria</h1>

        </div>

        <hr>
        <div class="row">
            <div class="container">

                @if($staff->isEmpty())

                    <div class="well well-sm text-center">
                        <h3>
                            Ei ole vielä kuvia
                        </h3>
                    </div>
                @else
                    @include('admin.staff._cards')
                @endif
            </div>
        </div>
    </div>

@stop

