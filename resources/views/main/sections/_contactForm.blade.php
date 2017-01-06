<div class="6u 12u$(medium)">
    <section>
        <form method="post" action="{{ url('/') }}">
            {{ csrf_field() }}
            <div class="row uniform">
                <div class="6u 12u(mobile)">
                    <input name="name" placeholder="Name" type="text" required>
                    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="6u 12u(mobile)">
                    <input name="email" placeholder="Email" type="text" required>
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
            <div class="row uniform">
                <div class="12u">
                    <textarea name="body" placeholder="Message"></textarea>
                    {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
            <div class="row uniform">
                <div class="12u">
                    <button type="submit" class="form-button-submit button icon fa-envelope">Send Message</button>
                </div>
            </div>
        </form>
    </section>
</div>