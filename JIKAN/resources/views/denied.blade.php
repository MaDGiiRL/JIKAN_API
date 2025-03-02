<x-layout title="Died!">
 
    @if (session('emailError'))
    <div id="confirmed" class="error-section">
        <div class="confirmed">
            <div class="confirmed-error">
                <h1>{{ session('emailError') }}</h1>
            </div>
            <h2>Something went wrong..</h2>
            <form class="confirmed-search">
                <input type="text" placeholder="Search...">
                <button type="button" class="btn btn-dark">Search</button>
            </form>
            <a href="{{route('welcome')}}">Return to Homepage</a>
        </div>
    </div>
    @endif
</x-layout>