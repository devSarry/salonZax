@extends('admin.section.settings.edit')

@section('form-options')

    <upload-image image-src="{{ $data->image ? url(($data->image->upload_dir) . ($data->image->image)): null }}"
                  info="{!! $errors->first('image') !!}"
    >
    </upload-image>

@stop

