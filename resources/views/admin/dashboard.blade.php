@extends('admin.layout.app')

@section('content')
    <h1 class="page-header">Dashboard</h1>
    <hr>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{ $messagesCount }}</div>
                        <div>Uusi Viesti!</div>
                    </div>
                </div>
            </div>
            <a href="{{ url('contact/messages') }}">
                <div class="panel-footer">
                    <span class="pull-left">Lisää tiedot</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-group fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{ ($analyticsData) }}</div>
                        <div>Vierailijat tänään</div>
                    </div>
                </div>
            </div>
            <a href="{{ env('GOOGLE_ANALYTICS_DASHBOARD') }}">
                <div class="panel-footer">
                    <span class="pull-left">Lisää tiedot</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


@stop
