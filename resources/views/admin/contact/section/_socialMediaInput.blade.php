<div class="row">
    <div class="form-group col-sm-4">
        <div class="input-group">
            <span class="input-group-addon"><i class="{{ $options['icon'] }}"></i></span>
            <input type="text"
                   class="form-control"
                   name="{{ $options['label_field'] }}"
                   id="{{ $options['label_field'] }}"
                   placeholder="{{ $options['name'] }} label"
                   value="{{ old($options['label_field']) or $options['stored_label_field'] }}"
            >
        </div>
    </div>
    <div class="form-group col-sm-8">
        <input type="text"
               class="form-control"
               name="{{$options['url_field'] }}"
               id="title"
               placeholder="{{ $options['name'] }} label"
               value="{{ old($options['url_field']) or $options['stored_url_field'] }}"
               {{--value="{{ old('facebook_label') ? : $data->section->facebook_label }}"--}}
        >
        {!! $errors->first('facebook_label', '<span class="help-block">:message</span>') !!}
    </div>
</div>