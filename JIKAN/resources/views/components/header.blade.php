@if(Route::currentRouteName() == "welcome")
<header class="container-fluid header-custom">
    <div class="row">
        <div class="col-12">
            <div class="content">
                <img src="/images/header-logo.png" alt="">
                <p class="pt-5 fs-4" data-aos="fade-right">Get ready to experience <strong>anime like never before—stream, read, and connect</strong> with fellow fans all in one place!</p>
            </div>
        </div>
    </div>
</header>

@elseif (Route::currentRouteName() == "manga")
<header class="container-fluid header-custom2">
    <div class="row">
        <div class="col-12">
            <div class="content">
                <img src="/images/mangas.png" alt="">
            </div>
        </div>
    </div>
</header>

@elseif (Route::currentRouteName() == "anime")
<header class="container-fluid header-custom3">
    <div class="row">
        <div class="col-12">
            <div class="content">
                <img src="/images/animes.png" alt="">
            </div>
        </div>
    </div>
</header>

@endif