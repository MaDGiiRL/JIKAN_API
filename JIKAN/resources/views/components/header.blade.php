@if(Route::currentRouteName() == "welcome")
<header class="video-header">
    <video autoplay muted loop id="background-video">
        <source src="/images/mob.3840x2160.mp4" type="video/mp4">
    </video>
    <div class="overlay"></div>
    <div class="content">
        <img src="/images/header-logo.png" alt="">
        <p class="pt-5 fs-4" data-aos="fade-right">Get ready to experience <strong>anime like never before—stream, read, and connect</strong> with fellow fans all in one place!</p>
    </div>
</header>

@elseif (Route::currentRouteName() == "manga")
<header class="video-header2">
    <video autoplay muted loop id="background-video2">
        <source src="/images/naoko-kirino-pumpkin-night-moewalls-com.mp4" type="video/mp4">
    </video>
    <div class="overlay2"></div>
    <div class="content">
        <img src="/images/mangas.png" alt="">
    </div>
</header>


@elseif (Route::currentRouteName() == "anime")
<header class="video-header3">
    <video autoplay muted loop id="background-video3">
        <source src="/images/tanjiro-moonlit-night-monochrome-moewalls-com.mp4" type="video/mp4">
    </video>
    <div class="overlay3"></div>
    <div class="content">
        <img src="/images/animes.png" alt="">
    </div>
</header>

@elseif (Route::currentRouteName() == "contact")
<header class="video-header3">
    <video autoplay muted loop id="background-video3">
        <source src="/images/pain-dark-realm.3840x2160.mp4" type="video/mp4">
    </video>
    <div class="overlay3"></div>
    <div class="content">
        <img src="/images/animes.png" alt="">
    </div>
</header>

@endif