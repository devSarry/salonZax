@extends('main.layout.app')

@section('content')

    {{--Banner--}}
    @include('main.sections.banner')

    <!-- One -->
    {{--@include('main.sections.one')--}}


    <!-- Services Special -->
    @include('main.sections.special')

    @include('main.sections.staff')

    @include('main.sections.contact')

    @include('main.sections.map')

    @include('main.layout._footer')



@stop