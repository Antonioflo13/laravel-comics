{{-- nav --}}
<nav>
    {{-- nav-top --}}
    <div id="bg">
        <div class="nav-top">
            <a href="#"><h5>dc power visa&reg;</h5></a>
            <a href="#"><h5>addittional dc sites</h5></a>
        </div>
    </div>
    {{-- /nav-top --}}

    {{-- nav-bottom --}}
    <div class="nav-bottom">
        <img src="{{ asset('images/dc-logo.png') }}" alt="">
        <ul>
            @foreach ($links as $link)
                <li><a href="{{$link["url"] }}">{{ $link["title"] }}</a></li>
            @endforeach
        </ul>
    </div>
    {{-- nav-bottom --}}
</nav>
{{-- /nav --}}

{{-- jumbotron --}}
<div class="jumbotron"></div>
{{-- /jumbotron --}}