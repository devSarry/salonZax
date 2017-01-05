<section class="wrapper style3">
<div class="container">
    <header>
        <h2>{{ $contact->section->title }}</h2>
    </header>
    <div class="row">
        <div class="6u 12u$(small)">
            <section>
                <p>{{ $contact->section->body }}</p>
                <div class="row">
                    <div class="6u 12u(mobile)">
                        <ul class="icons">
                            <li class="icon fa-home">
                            @foreach( explode('>,', $contact->wrapped_address) as $address)
                                {!! $address !!} <br>
                            @endforeach
                            <li class="icon fa-phone">
                                {{ $contact->phone_number }}
                            </li>
                            <li class="icon fa-envelope">
                                <a href="#">{{ $contact->email }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="6u 12u(mobile)">
                        <ul class="icons">
                            @if($contact->facebook_url)
                            <li>
                                <a href="{{$contact->facebook_url}}">
                                    <span class="icon fa-facebook"></span>
                                    {{$contact->facebook_label ?? ''}}
                                </a>
                            </li>
                            @endif
                            @if($contact->twitter_url)
                                <li>
                                    <a href="{{$contact->twitter_url}}">
                                        <span class="icon fa-twitter"></span>
                                        {{$contact->twitter_label ?? ''}}
                                    </a>
                                </li>
                            @endif
                            @if($contact->instagram_url)
                                <li>
                                    <a href="{{$contact->instagram_url}}">
                                        <span class="icon fa-instagram"></span>
                                        {{$contact->instagram_label ?? ''}}
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <div class="6u 12u$(medium)">
            <section>
                <form method="post" action="#">
                    <div class="row uniform">
                        <div class="6u 12u(mobile)">
                            <input name="name" placeholder="Name" type="text">
                        </div>
                        <div class="6u 12u(mobile)">
                            <input name="email" placeholder="Email" type="text">
                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="12u">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="row uniform">
                        <div class="12u">
                            <a href="#" class="form-button-submit button icon fa-envelope">Send Message</a>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</section>

