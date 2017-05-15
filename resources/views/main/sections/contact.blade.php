<section class="wrapper style3">
<div class="container">
    <header>
        <h2>{{ $contact->first()->section->title }}</h2>
    </header>
    <div class="row">
        <div class="6u 12u$(small)">
            <section>
                <p>{{ $contact->first()->section->body }}</p>
                <div class="row">
                    <div class="6u 12u(mobile)">
                        <ul class="icons">
                            <li class="icon fa-home">
                            @foreach( explode('>,', $contact->first()->wrapped_address) as $address)
                                {!! $address !!} <br>
                            @endforeach
                            <li class="icon fa-phone">
                                {{ $contact->first()->phone_number }}
                            </li>
                            <li class="icon fa-envelope">
                                <a href="#">{{ $contact->first()->email }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="6u 12u(mobile)">
                        <ul class="icons">
                            @if($contact->first()->facebook_url)
                            <li>
                                <a href="{!! $contact->first()->facebook_url !!}">
                                    <span class="icon fa-facebook"></span>
                                    {{$contact->facebook_label ?? ''}}
                                </a>
                            </li>
                            @endif
                            @if($contact->first()->twitter_url)
                                <li>
                                    <a href="{{$contact->first()->twitter_url}}">
                                        <span class="icon fa-twitter"></span>
                                        {{$contact->twitter_label ?? ''}}
                                    </a>
                                </li>
                            @endif
                            @if($contact->first()->instagram_url)
                                <li>
                                    <a href="{{$contact->first()->instagram_url}}">
                                        <span class="icon fa-instagram"></span>
                                        {{$contact->first()->instagram_label ?? ''}}
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        @include('main.sections._contactForm')
    </div>
</div>
</section>

