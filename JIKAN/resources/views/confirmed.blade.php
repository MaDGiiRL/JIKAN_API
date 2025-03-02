<x-layout title="Confirmed!">
    @if (session('status'))
    <div id="confirmed" class="error-section">
        <div class="confirmed">
            <div class="confirmed-error">
                <h1>{{ session('status') }}</h1>
            </div>
            <h2>Check your email-box!</h2>
            <form class="confirmed-search">
                <input type="text" placeholder="Search...">
                <button type="button" class="btn btn-dark">Search</button>
            </form>
            <a href="{{route('welcome')}}">Return to Homepage</a>
        </div>
    </div>
    @endif
</x-layout>