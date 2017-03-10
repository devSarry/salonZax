@extends('admin.layout.app')

@section('content')
    <div class="container" v-pre>
        <div class="row">
            <div class="">
                <div class="panel panel-default">
                    <div class="panel-heading">Message from <b>{{ $message->name }}</b>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['contact/messages', $message->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::button('<span class="fa fa-trash" aria-hidden="true" title="Delete message" />', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs pull-right',
                                'title' => 'Delete message',
                                'onclick'=>'return confirm("Confirm delete?")'
                        ))!!}
                        {!! Form::close() !!}
                    </div>
                    <div class="panel-body">
                        <h3>email</h3>
                        <h3>Message</h3>
                        <p>{{ $message->body }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop