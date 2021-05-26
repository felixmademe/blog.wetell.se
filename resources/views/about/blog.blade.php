@section( 'title', 'Om bloggen' )
@section( 'heroTitle', 'Om ' . config( 'app.name' ) )
@section( 'heroSubtitle', 'En blogg om inget' )
@extends( 'layouts.app' )

@section( 'content' )

    <div class="text">
        <h3 class="title medium">Vad är {{ config( 'app.name' ) }}?</h3>
        <p>
            Jag ville skapa min blogg för att bygga någpt coolt. Så jag gjorde det.
        </p>
        <hr class="separator">
        <p>
            Bloggen är byggd med flera olika ramverk och tekniker som jag gillar att använda.
            <br>
            Dessa inkluderar:
        </p>
        <ul>
            <li>Laravel</li>
            <li>SCSS</li>
        </ul>
    </div>

@endsection
