@extends('admin.layout.app')

@section('content')
    <h1 class="page-header">Dashboard</h1>
    <hr>
    <div class="container"  v-pre>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Message</div>
                    <div class="panel-body">

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>ID</th><th> Name </th><th> Email </th><th> Message </th><th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($messages as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td><td>{{ $item->email }}</td><td>{{ $item->bodySummery }}</td>
                                        <td>
                                            <a href="{{ url('/contact/messages/' . $item->id) }}" class="btn btn-success btn-xs" title="View message"><span class="fa fa-eye" aria-hidden="true"/></a>

                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['contact/messages', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('<span class="fa fa-trash" aria-hidden="true" title="Delete message" />', array(
                                                    'type' => 'submit',
                                                    'class' => 'btn btn-danger btn-xs',
                                                    'title' => 'Delete message',
                                                    'onclick'=>'return confirm("Confirm delete?")'
                                            )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $messages->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




@stop
