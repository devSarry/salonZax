        <upload-image image-src="{{ $staff->image ? url(($staff->image->upload_dir) . ($staff->image->image)): null }}" info="{!! $errors->first('image') !!}"></upload-image>

        {{ debugbar()->info($errors) }}

        {!! $errors->first('image', '<span class="help-block">:message</span>') !!}

        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            <label for="title">Title (optional)</label>
            <input type="text"
                   class="form-control"
                   name="title"
                   id="title"
                   value="{{old('title', is_param($staff->title))}}"
            >
            {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
            <label for="body">Description</label>
                        <textarea class="form-control"
                                  name="body"
                                  id="body"
                        >{{old('body', is_param($staff->body))}}</textarea>
            {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
        </div>


