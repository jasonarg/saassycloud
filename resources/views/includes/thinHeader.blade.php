<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
        <a class="navbar-brand" href="/"><strong>SaaS</strong>sy Cloud</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            @if (!Auth::guest())
            <img class="ml-auto rounded-circle profile-image-sm" src="/profile/picture" />
            @endif
        </div>
    </nav>
</header>