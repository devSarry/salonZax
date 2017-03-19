@extends('admin.layout.app')

@section('content')

        <div class="row">
            <a class="btn btn-success pull-right  raw-margin-top-24"
               href="{!! route('category.create') !!}">Add New Category</a>
            <h1>This is the services page.</h1>

            <p>Here we list all the services provided.</p>

        </div>

        <hr>
        <div class="row">
            @foreach($categories as $category)
                <div class="service-index col-md-6">
                    <div class="row">

                        <div class="col-md-6">
                            <h1 class="pull-left raw-margin-top-24 raw-margin-left-24">{{ $category->name }}</h1>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <span class="dropdown pull-right raw-margin-top-24 raw-margin-right-8">
                                <a href="#" class="dropdown dropdown-toggle btn btn-primary "
                                   id="drop3"
                                   data-toggle="dropdown"
                                   role="button"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                ><i class="fa fa-cog fa-1x"></i>
                                </a>
                                <ul class="dropdown-menu " aria-labelledby="drop3">
                                    <li>
                                        <span>
                                            <a href="{{ route('category.edit', ['id' => $category->id]) }}"
                                               class="btn btn-info btn-block">
                                                <i class="fa fa-pencil"></i> Edit
                                            </a>
                                        </span>
                                    </li>

                                    <li>
                                        <form method="post"
                                              action="{!! route('category.update', [$category->id]) !!}">
                                                        {!! csrf_field() !!}
                                            {!! method_field('PATCH') !!}
                                            <div >
                                                <button type="submit" class="btn btn-default btn-block">
                                                    <span class="fa {{ $category->approved ? 'fa-check-square-o' : 'fa-square-o' }}">
                                                    </span>
                                                    Show?
                                                </button>
                                            </div>
                                        </form>

                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <form method="post"
                                          action="{!! route('category.destroy', [$category->id]) !!}">
                                                    {!! csrf_field() !!}
                                        {!! method_field('DELETE') !!}
                                        <li class=" dropdown">
                                            <button class="btn btn-danger btn-block"
                                                    type="submit"
                                                    onclick="return confirm('Are you sure you want to delete this workout?')">
                                                    <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </li>
                                    </form>
                                </ul>
                        </span>
                            <a class="btn btn-primary pull-right raw-margin-top-24 raw-margin-right-8"
                               href="{!! route('services.create', ['category_id' => $category->id]) !!}">Add New Service</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            @if ($category->services->isEmpty())
                                <div class="well text-center">No services found.</div>
                            @else
                                <table class="table table-striped">
                                    <thead>
                                    <th>Service</th>
                                    <th>Price</th>
                                    <th class="text-right" width="200px">Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($category->services as $service)
                                        <tr>
                                            <td>
                                                <a href="{!! route('services.edit', [$service->id]) !!}">{{ $service->service }}</a>
                                            </td>
                                            <td>
                                                <a href="{!! route('services.edit', [$service->id]) !!}">{{ $service->price }}</a>
                                            </td>
                                            <td class="text-right">
                                                <form method="post"
                                                      action="{!! route('services.destroy', [$service->id]) !!}">
                                                    {!! csrf_field() !!}
                                                    {!! method_field('DELETE') !!}
                                                    <button class="btn btn-danger btn-xs pull-right" type="submit"
                                                            onclick="return confirm('Are you sure you want to delete this workout?')">
                                                        <i
                                                                class="fa fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                                <a class="btn btn-default btn-xs pull-right raw-margin-right-10"
                                                   href="{!! route('services.edit', [$service->id]) !!}"><i
                                                            class="fa fa-pencil"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

@stop

