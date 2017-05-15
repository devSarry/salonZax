<footer id="footer">
    <ul class="icons">
        <ul class="icons">

            @foreach(App\ContactSection::first()->socialMedia as $socialMedia)
                <li>
                    <a href="http://{!! $socialMedia['link'] !!}" class="icon fa-{{ $socialMedia['name'] }}">
                        <span class="label">{{ $socialMedia['name'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>

    </ul>
    <ul class="copyright">
        <li>&copy; Sarry</li><li>Design: <a href="http://makkaraperuna.com">Salon Demo</a></li>
    </ul>
</footer>