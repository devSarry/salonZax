@foreach($staff->chunk(2) as $chunk)
    <div class="row">
        @foreach($chunk as $member)
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            @laravelImage($member->image->upload_dir , $member->image->image, 300, 300,[
                                            'fit' => 'crop-top'], [
                                            'class' => 'img-rounded img-responsive'])
                        </div>
                        <div class="col-sm-6 col-md-8">

                            <span class="dropdown pull-right raw-margin-right-8">
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
                                            <a href="{{ route('staff.edit', ['id' => $member->id]) }}"
                                               class="btn btn-info btn-block">
                                                <i class="fa fa-pencil"></i> muokkaa
                                            </a>
                                        </span>
                                    </li>

                                    <li>
                                        <form method="post"
                                              action="{!! route('staff.update', [ $member->id]) !!}">
                                                        {!! csrf_field() !!}
                                                        {!! method_field('PATCH') !!}
                                            <div>
                                                <button type="submit" class="btn btn-default btn-block">
                                                    <span class="fa {{  $member->active ? 'fa-check-square-o' : 'fa-square-o' }}">
                                                    </span>
                                                    Näytää?
                                                </button>
                                            </div>
                                        </form>
                                    </li>
                                        <li role="separator" class="divider"></li>
                                            <form method="post"
                                                  action="{!! route('staff.destroy', [$member->id]) !!}">
                                                            {!! csrf_field() !!}
                                                {!! method_field('DELETE') !!}
                                                <li class=" dropdown">
                                                    <button class="btn btn-danger btn-block"
                                                            type="submit"
                                                            onclick="return confirm('Are you sure you want to delete this post?')">
                                                            <i class="fa fa-trash"></i> Poista
                                                    </button>
                                                </li>
                                            </form>
                                        </ul>
                                    </span>
                            <h4>{{ $member->name ?? $member->title ?? 'Ei Otsiko Texti'}}</h4>
{{--                            <p>
                                <i class="fa fa-envelope"></i> {{ $member->email ?? 'No Email'}}
                                <br/>
                                <i class="fa fa-gift"></i> {{ $member->birthday ?? 'No Birthday' }}
                            </p>--}}
                            <p>
                                {{ $member->body ? $member->body : 'Ei Kuvaus Texti' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endforeach