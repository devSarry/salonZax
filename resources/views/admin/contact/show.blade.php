@extends('admin.layout.app')

@section('content')
    <div class="container" v-pre>
        <div class="row">
            <div class="">
                <div class="panel panel-default">
                    <div class="panel-heading">message {{ $message->id }}</div>
                    <div class="panel-body">
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['contact/messages', $message->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::button('<span class="fa fa-trash" aria-hidden="true" title="Delete message" />', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'title' => 'Delete message',
                                'onclick'=>'return confirm("Confirm delete?")'
                        ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th>ID</th><td>{{ $message->id }}</td>
                                </tr>
                                <tr><th> Title </th><td> {{ $message->title }} </td></tr><tr><th> Body </th><td> {{ $message->body }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop