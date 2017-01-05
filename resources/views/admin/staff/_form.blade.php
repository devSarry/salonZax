        <upload-image image-src="{{ $staff->image ? url(($staff->image->upload_dir) . ($staff->image->image)): null }}" info="{!! $errors->first('image') !!}"></upload-image>

        {{ debugbar()->info($errors) }}

        {!! $errors->first('image', '<span class="help-block">:message</span>') !!}
        <div class="form-group {{ $errors->has('service') ? 'has-error' : '' }}">
            <label for="name">Name</label>
            <input type="text"
                   class="form-control"
                   name="name"
                   id="name"
                   value="{{ old('name', is_param($staff->name)) }}"
            >
            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
        </div>


        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            <label for="title">Title</label>
            <input type="text"
                   class="form-control"
                   name="title"
                   id="title"
                   required
                   value="{{old('title', is_param($staff->title))}}"
            >
            {!! $errors->first('price', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email">Email</label>
            <input type="text"
                   class="form-control"
                   name="email"
                   id="email"
                   required
                   value="{{old('email', is_param($staff->email))}}"
            >
            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group {{ $errors->has('birthday') ? 'has-error' : '' }}">
            <label for="birthday">Birthday</label>
            <input type="date"
                   class="form-control"
                   name="birthday"
                   id="birthday"
                   required
                   value="{{old('birthday', is_param($staff->birthday))}}"
            >
            {!! $errors->first('birthday', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
            <label for="body">Description</label>
                        <textarea class="form-control"
                                  name="body"
                                  id="body"
                                  required
                        >{{old('body', is_param($staff->body))}}</textarea>
            {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
        </div>


