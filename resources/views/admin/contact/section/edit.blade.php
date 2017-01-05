@extends('admin.section.settings.edit')

@section('form-options')


    <h3>Contact Info</h3>

    <location-picker db-location="{{ $data->formated_address }}"
                     lat="{{ $data->lat }}"
                     lng="{{ $data->long }}">

    </location-picker>

    <div class="form-group">
        <label for="email">Email</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="text"
                   class="form-control"
                   name="email"
                   id="email"
                   placeholder="email (required)"
                   value="{{ old('email') ?? $data->email }}"
            >
        </div>
        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
    </div>

    <div class="form-group">
        <label for="email">Phone Number</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
            <input type="text"
                   class="form-control"
                   name="phone_number"
                   id="phone_number"
                   placeholder="Phone Number (required)"
                   value="{{ old('phone_number') ?? $data->phone_number }}"
            >
        </div>

        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
    </div>

    <h3>Social Media (optional)</h3>


    <social-media-input
            name="facebook"
            icon="fa-facebook"
            {{--from db--}}
            old_label="{{ $data->facebook_label }}"
            old_url="{{ $data->facebook_url }}"
            errors="{{ $errors->first('facebook_url') }}"
    >
    </social-media-input>
    <social-media-input
            name="twitter"
            icon="fa-twitter"
            {{--from db--}}
            old_label="{{ $data->twitter_label }}"
            old_url="{{ $data->twitter_url }}"
    >

    </social-media-input>
    <social-media-input
            name="instagram"
            icon="fa-instagram"
            {{--from db--}}
            old_label="{{ $data->instagram_label }}"
            old_url="{{ $data->instagram_url }}"
    >
    </social-media-input>



@stop

